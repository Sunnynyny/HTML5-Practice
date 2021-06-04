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
                    'name' => 'clientSecret',
                    'type' => 'credentials',
                    'info' => 'Client secret.',
                    'required' => true,
                ),
                array (
                    'name' => 'redirectUri',
                    'type' => 'String',
                    'info' => 'URL in your app where users will be sent after authorization.',
                    'required' => true,
                ),
                array (
                    'name' => 'code',
                    'type' => 'String',
                    'info' => 'A one-time use code that may be exchanged for a bearer token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'refreshAccessToken',
            'description' => 'Refresh access token.',
            'args' => array (
                array (
                    'name' => 'clientId',
                    'type' => 'credentials',
                    'info' => 'Client identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'clientSecret',
                    'type' => 'credentials',
                    'info' => 'Client secret.',
                    'required' => true,
                ),
                array (
                    'name' => 'refreshToken',
                    'type' => 'String',
                    'info' => 'The refresh token retrieved during the initial request for an access token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'revokeAccessToken',
            'description' => 'RevokeAccessToken.',
            'args' => array (
                array (
                    'name' => 'token',
                    'type' => 'String',
                    'info' => 'Active access token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getNotifications',
            'description' => 'Lists notifications where the current user was the subscriber. Scopes: wallet:notifications:read',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'String',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'secretKey',
                    'type' => 'String',
                    'info' => 'Your API Secret.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSingleNotification',
            'description' => 'Show a notification for which the current user was a subsciber. Scopes: wallet:notifications:read',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'String',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'secretKey',
                    'type' => 'String',
                    'info' => 'Your API Secret.',
                    'required' => true,
                ),
                array (
                    'name' => 'notificationsId',
                    'type' => 'String',
                    'info' => 'Single notification identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getUser',
            'description' => 'Get any user’s public information with their ID.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'User identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getMe',
            'description' => 'Get current user’s public information. Scope: wallet:user:read,wallet:user:email',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getMyAuthInfo',
            'description' => 'Get current user’s authorization information including granted scopes.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'updateMe',
            'description' => 'Modify current user and their preferences. Scope: wallet:user:update',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'User’s public name.',
                    'required' => false,
                ),
                array (
                    'name' => 'timeZone',
                    'type' => 'String',
                    'info' => 'Time zone.',
                    'required' => false,
                ),
                array (
                    'name' => 'nativeCurrency',
                    'type' => 'String',
                    'info' => 'Local currency used to display amounts converted from BTC.',
                    'required' => false,
                ),
            ),
        ),
   