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
        array (
            'name' => 'getAccounts',
            'description' => 'Lists current user’s accounts to which the authentication method has access to. Scope: wallet:accounts:read',
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
            'name' => 'getSingleAccount',
            'description' => 'Show current user’s account. Scopes: wallet:accounts:read',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Current user account identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'createAccount',
            'description' => 'Creates a new account for user. Scopes: wallet:accounts:create',
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
                    'info' => 'Account name.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'setAccountAsPrimary',
            'description' => 'Promote an account as primary account. Scopes: wallet:accounts:update',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'updateAccount',
            'description' => 'UpdateAccount. Scopes: wallet:accounts:update',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'Account name',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'deleteAccount',
            'description' => 'Removes user’s account. Scopes: wallet:accounts:delete',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getAddresses',
            'description' => 'Lists addresses for an account. Scopes: wallet:addresses:read',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSingleAddress',
            'description' => 'GetSingleAddress. Scopes: wallet:addresses:read',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'addressId',
                    'type' => 'String',
                    'info' => 'Address identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getAddressTransactions',
            'description' => 'List transactions that have been sent to a specific address. Scopes: wallet:transactions:read',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'addressId',
                    'type' => 'String',
                    'info' => 'Address identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'createAddress',
            'description' => 'Creates a new address for an account. Scopes: wallet:addresses:create',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'Address label.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getTransactions',
            'description' => 'Lists account’s transactions. Scopes: wallet:transactions:read',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSingleTransaction',
            'description' => 'Show an individual transaction for an account. Scopes: wallet:transactions:read',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'transactionId',
                    'type' => 'String',
                    'info' => 'Transaction identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'sendMoney',
            'description' => 'Send funds to a bitcoin address, ethereum address, or email address. Scopes: wallet:transactions:send',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'to',
                    'type' => 'String',
                    'info' => 'A bitcoin address, ethereum address, or an email of the recipient.',
                    'required' => true,
                ),
                array (
                    'name' => 'amount',
                    'type' => 'String',
                    'info' => 'Amount to be sent.',
                    'required' => true,
                ),
                array (
                    'name' => 'currency',
                    'type' => 'String',
                    'info' => 'Currency for the amount.',
                    'required' => true,
                ),
                array (
                    'name' => 'description',
                    'type' => 'String',
                    'info' => 'Notes to be included in the email that the recipient receives.',
                    'required' => false,
                ),
                array (
                    'name' => 'skipNotifications',
                    'type' => 'Boolean',
                    'info' => 'Don’t send notification emails for small amounts.',
                    'required' => false,
                ),
                array (
                    'name' => 'fee',
                    'type' => 'String',
                    'info' => 'Transaction fee in BTC if you would like to pay it.',
                    'required' => false,
                ),
                array (
                    'name' => 'idem',
                    'type' => 'String',
                    'info' => 'A token to ensure idempotence.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'transferAccountsMoney',
            'description' => 'Transfer bitcoin or ethereum between two of a user’s accounts. Scopes: wallet:transactions:transfer',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'to',
                    'type' => 'String',
                    'info' => 'ID of the receiving account.',
                    'required' => true,
                ),
                array (
                    'name' => 'amount',
                    'type' => 'String',
                    'info' => 'Amount to be transferred.',
                    'required' => true,
                ),
                array (
                    'name' => 'currency',
                    'type' => 'String',
                    'info' => 'Currency for the amount.',
                    'required' => true,
                ),
                array (
                    'name' => 'description',
                    'type' => 'String',
                    'info' => 'Notes to be included in the transfer.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'requestMoney',
            'description' => 'Requests money from an email address. Scopes: wallet:transactions:request',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'to',
                    'type' => 'String',
                    'info' => 'An email of the recipient.',
                    'required' => true,
                ),
                array (
                    'name' => 'amount',
                    'type' => 'String',
                    'info' => 'Amount to be requested.',
                    'required' => true,
                ),
                array (
                    'name' => 'currency',
                    'type' => 'String',
                    'info' => 'Currency for the amount.',
                    'required' => true,
                ),
                array (
                    'name' => 'description',
                    'type' => 'String',
                    'info' => 'Notes to be included in the email that the recipient receives.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'completeRequestMoney',
            'description' => 'Lets the recipient of a money request complete the request by sending money to the user who requested the money. Scopes: wallet:transactions:request',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'transactionId',
                    'type' => 'String',
                    'info' => 'Transaction identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'resendMoneyRequest',
            'description' => 'Lets the user resend a money request. Scopes: wallet:transactions:request',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'transactionId',
                    'type' => 'String',
                    'info' => 'Transaction identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'cancelRequestMoney',
            'description' => 'Lets a user cancel a money request. Scopes: wallet:transactions:request',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'transactionId',
                    'type' => 'String',
                    'info' => 'Transaction identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getBuys',
            'description' => 'Lists buys for an account. Scopes: wallet:buys:read',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSingleBuy',
            'description' => 'Show an individual buy. Scopes: wallet:buys:read',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'buyId',
                    'type' => 'String',
                    'info' => 'Individual buy identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'placeBuyOrder',
            'description' => 'Buys a user-defined amount of bitcoin or ethereum. Scopes: wallet:buys:create',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'amount',
                    'type' => 'String',
                    'info' => 'Buy amount without fees.',
                    'required' => true,
                ),
                array (
                    'name' => 'currency',
                    'type' => 'String',
                    'info' => 'Currency for the amount.',
                    'required' => true,
                ),
                array (
                    'name' => 'total',
                    'type' => 'String',
                    'info' => 'Buy amount with fees (alternative to amount).',
                    'required' => false,
                ),
                array (
                    'name' => 'paymentMethod',
                    'type' => 'String',
                    'info' => 'The ID of the payment method that should be used for the buy.',
                    'required' => false,
                ),
                array (
                    'name' => 'agreeBtcAmountVaries',
                    'type' => 'Boolean',
                    'info' => 'Whether or not you would still like to buy if you have to wait for your money to arrive to lock in a price.',
                    'required' => false,
                ),
                array (
                    'name' => 'commit',
                    'type' => 'Boolean',
                    'info' => 'If set to false, this buy will not be immediately completed.',
                    'required' => false,
                ),
                array (
                    'name' => 'quote',
                    'type' => 'Boolean',
                    'info' => 'If set to true, response will return an unsave buy for detailed price quote.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'commitBuy',
            'description' => 'Completes a buy that is created in commit: false state. Scopes: wallet:buys:create',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'buyId',
                    'type' => 'String',
                    'info' => 'Individual buy identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSells',
            'description' => 'Lists sells for an account. Scopes: wallet:sells:read',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSingleSell',
            'description' => 'Show an individual sell. Scopes: wallet:sells:read',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'sellId',
                    'type' => 'String',
                    'info' => 'Individual sell identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'placeSellOrder',
            'description' => 'Sells a user-defined amount of bitcoin or ethereum. Scopes: wallet:sells:create',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'amount',
                    'type' => 'String',
                    'info' => 'Sell amount.',
                    'required' => true,
                ),
                array (
                    'name' => 'currency',
                    'type' => 'String',
                    'info' => 'Currency for the amount.',
                    'required' => true,
                ),
                array (
                    'name' => 'total',
                    'type' => 'String',
                    'info' => 'Sell amount with fees.',
                    'required' => false,
                ),
                array (
                    'name' => 'paymentMethod',
                    'type' => 'String',
                    'info' => 'The ID of the payment method that should be used for the sell.',
                    'required' => false,
                ),
                array (
                    'name' => 'agreeBtcAmountVaries',
                    'type' => 'Boolean',
                    'info' => 'Whether or not you would still like to sell if you have to wait for your money to arrive to lock in a price.',
                    'required' => false,
                ),
                array (
                    'name' => 'quote',
                    'type' => 'Boolean',
                    'info' => 'f set to true, response will return an unsave sell for detailed price quote.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'commitSell',
            'description' => 'Completes a sell that is created in commit: false state. Scopes: wallet:sells:create',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'sellId',
                    'type' => 'String',
                    'info' => 'Individual sell identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getDeposits',
            'description' => 'Lists deposits for an account. Scopes: wallet:deposits:read',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
                    'info' => 'Account identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSingleDeposit',
            'description' => 'Show an individual deposit. Scopes: wallet:deposits:read',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'accountId',
                    'type' => 'String',
  