<?php

return array (
    'package' => 'Coinbase',
    'tagline' => 'Make bitcoin/ethereum transactions and get real-time data.',
    'description' => 'Connect to the Coinbase Digital Currency API to make bitcoin/ethereum transactions and get real-time data. Test an API call and export the code into your app.',
    'image' => 'https://logo.clearbit.com/coinbase.com?s=128',
    'repo' => 'https://github.com/RapidSoftwareSolutions/Marketplace-Coinbase-Package',
    'keywords' => array (
            'API', 'Bitcoin', 'Ethereum', 'Coinbase',
        ),
    'accounts' => array (
            'domain' => 'coinbase.com',
            'credentials' => array (
                    'clientId',
                    'clientSecret',
                    'apiKey',
                    'secretKey',
                ),
        ),
    'blocks' => array (
        array (
            'name' => 'getAccessToken',
            'description' => 'Geta access token.',
            'args' => array (
                array (
                    'name' => 'clientId',
                    'type' => 'credentials',
                    'info' => 'Client identifier.',
                    'required' => true,
                ),
                array (
   