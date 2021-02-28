
<?php

namespace Core;
use \Core\CustomModel;
if ( ! defined( 'RAPID_IN' ) ) exit( 'No direct script access allowed' );

/**
 * Base Model
 */
class Router
{
    private $packageName;
    private $blocks;
    private $custom;
    private $klein;
    private $apiVersion;
    private $supportedMethods;

    public function __construct(
        $packageName,
        $blocks,
        $custom
    )
    {
        $this->packageName = $packageName;
        $this->blocks = $blocks;
        $this->custom = $custom;
        $this->klein = new \Klein\Klein();
        $this->http = new \GuzzleHttp\Client(['verify' => false]);
        $this->apiVersion = '2017-03-06';
        $this->supportedMethods = ['GET', 'POST', 'PUT', 'DELETE', 'API-KEY-GET'];
    }

    public function setup()
    {
        // Metatdata
        // api/<Package_name>/
        $this->klein->respond('GET', INDEX_PATH . 'api/' . $this->packageName . '/?', function(){
            include_once dirname(__DIR__) . '/metadata/metadata.json';
        });
        // Set all routes
        foreach($this->blocks as $blockSettings){
            $this->setRoute($blockSettings);
        }
    }

    public function run($dispatchSettings = [])
    {
        // Run router
        if(count($dispatchSettings)>0){
            $this->klein->dispatch($dispatchSettings);
        }else{
            $this->klein->dispatch();
        }
        // Set status 200
        $this->klein->response()->unlock();
        $this->klein->response()->code(200);
    }

    public function getRouter()
    {
        return $this->klein;
    }

    private function setRoute($block)
    {
        // Get method for vendor route
        if(
            isset($this->custom[$block['name']]['method'])&&
            in_array($this->custom[$block['name']]['method'], $this->supportedMethods)
        ){
            $method = $this->custom[$block['name']]['method'];
        }else{
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
            $result['contextWrites']['to']['status_msg'] = 'Declared unsupported method for block: ' . $block['name'] . '.';
            echo json_encode($result);
            exit(200);
        }

        // Prepare vars need for route processing
        $param = $this->getParam($block);
        $routePath = INDEX_PATH . 'api/' . $this->packageName . '/' . $block['name'] . '/?';
        $blockName = $block['name'];
        $blockCustom = $this->custom[$block['name']];

        // Add route
        $this->klein->respond('POST', $routePath, function()use($param, $blockName, $blockCustom, $method){
            // Get input param
            $inputPram = $this->getInputPram($param['param']);
            if(is_string($inputPram)){
                echo $inputPram;
                exit(200);
            }
            
            // Validate param as reqiured and/or json
            $validateResult = $this->validateParam($inputPram, $param['required'], $param['json']);
            if($validateResult){
                echo $validateResult;
                exit(200);
            }

            // Put param in Vendor Url if it need
            $vendorUrl = $blockCustom['vendorUrl'];
            $urlPart = [];
            preg_match_all('/\{\{[0-9a-z_]+\}\}/ui', $vendorUrl, $urlPart);
            if(count($urlPart[0])>0){
                foreach ($urlPart[0] as $onePart) {
                    $oneUrlPart = str_replace('}}', '', str_replace('{{', '', $onePart));
                    if (isset($inputPram[$oneUrlPart])&&strlen($inputPram[$oneUrlPart])>0) {
                        $paramVal = $inputPram[$oneUrlPart];
                        if($oneUrlPart=='expression'&&$paramVal!='0'){
                            $paramVal=str_replace(' ', '', $paramVal);
                            $paramVal=urlencode($paramVal);
                        }
                        $vendorUrl = str_replace('{{' . $oneUrlPart . '}}', $paramVal, $vendorUrl);
                    } else {
                        $response = [];
                        $response['callback'] = 'error';
                        $response['contextWrites']['to']['status_code'] = "REQUIRED_FIELDS";
                        $response['contextWrites']['to']['status_msg'] = "Please, check and fill in required fields.";
                        $response['contextWrites']['to']['fields'] = [$oneUrlPart];

                        echo json_encode($response);
                        exit(200);
                    }
                }
            }

            // Prepare param
            $sendParam = $this->prepareParam($inputPram, $blockCustom['dictionary'], $blockName);
            $sendBody = $sendParam;

            // If need, custom make custom default processing
            if(isset($blockCustom['default'])&&is_array($blockCustom['default'])&&count($blockCustom['default'])>0){
                $sendBody = array_merge($blockCustom['default'], $sendBody);
            }

            // Remove $accessToken from params
            if(isset($sendBody['access_token'])&&strlen($sendBody['access_token'])>0){
                $accessToken = $sendBody['access_token'];
                unset($sendBody['access_token']);
            }else{
                $accessToken = false;
            }

            // If need, custom make custom processing for route
            if(isset($blockCustom['custom'])&&$blockCustom['custom'] == true){
                $sendBody = CustomModel::$blockName($sendParam, $this->custom[$blockName], $vendorUrl, $this->apiVersion);
            }else{
                unset($sendBody['appClientId']);
                if(isset($this->custom[$blockName]['showApiType'])&&$this->custom[$blockName]['showApiType']==true){
                    $sendBody['api_type'] = 'json';
                }
                $sendBody = json_encode($sendBody);
            }

            // Make request
            $result = $this->httpRequest($vendorUrl, $method, $sendBody, $accessToken);
            echo json_encode($result);
            exit(200);
        });

        return true;
    }

    // Get param, required and JSON from url
    private function getParam($block)
    {
        $param = [];
        $required = [];
        $json = [];
        foreach($block['args'] as $oneParam){
            if($oneParam['required']){
                array_push($required, $oneParam['name']);
            }
            if($oneParam['type'] == 'JSON'){
                array_push($json, $oneParam['name']);
            }
            array_push($param, $oneParam['name']);
        }

        return [
            'param' => $param,
            'required' => $required,
            'json' => $json,
        ];
    }

    private function getInputPram($paramList)
    {
        // Retrieve data params from input body