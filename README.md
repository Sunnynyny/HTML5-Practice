[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Coinbase/functions?utm_source=RapidAPIGitHub_CoinbaseFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Coinbase Package
Connect to the Coinbase Digital Currency API to make bitcoin/ethereum transactions and get real-time data. Test an API call and export the code into your app.
* Domain: coinbase.com
* Credentials: clientId, clientSecret, apiKey, secretKey

## How to get credentials: 
0. Sign up in [Coinbase](https://www.coinbase.com/signup), and verify your email. 
1. Navigate to [Settings/API Access](https://www.coinbase.com/settings/api).
2. Click "New OAuth2 Application", fill all required fields.
3. Your app will appear in ["My OAuth2 Applications"](https://www.coinbase.com/settings/api#oauth_applications) section. Open it.
4. Use Client ID and Client Secret as credentials.

## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## Coinbase.getAccessToken
Geta access token.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| Client identifier.
| clientSecret| credentials| Client secret.
| redirectUri | String     | URL in your app where users will be sent after authorization.
| code        | String     | A one-time use code that may be exchanged for a bearer token.

## Coinbase.refreshAccessToken
Refresh access token.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| Client identifier.
| clientSecret| credentials| Client secret.
| refreshToken| String     | The refresh token retrieved during the initial request for an access token.

## Coinbase.revokeAccessToken
RevokeAccessToken.

| Field| Type  | Description
|------|-------|----------
| token| String| Active access token.

## Coinbase.getNotifications
Lists notifications where the current user was the subscriber. Scopes: wallet:notifications:read

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API Key.
| secretKey| credentials| Your API Secret.

## Coinbase.getSingleNotification
Show a notification for which the current user was a subsciber. Scopes: wallet:notifications:read

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| secretKey      | credentials| Your API Secret.
| notificationsId| String     | Single notification identifier.

## Coinbase.getUser
Get any user’s public information with their ID.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| userId     | String| User identifier.

## Coinbase.getMe
Get current user’s public information. Scope: wallet:user:read,wallet:user:email

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Coinbase.getMyAuthInfo
Get current user’s authorization information including granted scopes.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Coinbase.updateMe
Modify current user and their preferences. Scope: wallet:user:update

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token.
| name          | String| User’s public name.
| timeZone      | String| Time zone.
| nativeCurrency| String| Local currency used to display amounts converted from BTC.

## Coinbase.getAccounts
Lists current user’s accounts to which the authentication method has access to. Scope: wallet:accounts:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Coinbase.getSingleAccount
Show current user’s account. Scopes: wallet:accounts:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Current user account identifier.

## Coinbase.createAccount
Creates a new account for user. Scopes: wallet:accounts:create

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| name       | String| Account name.

## Coinbase.setAccountAsPrimary
Promote an account as primary account. Scopes: wallet:accounts:update

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.

## Coinbase.updateAccount
UpdateAccount. Scopes: wallet:accounts:update

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.
| name       | String| Account name

## Coinbase.deleteAccount
Removes user’s account. Scopes: wallet:accounts:delete

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.

## Coinbase.getAddresses
Lists addresses for an account. Scopes: wallet:addresses:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.

## Coinbase.getSingleAddress
GetSingleAddress. Scopes: wallet:addresses:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.
| addressId  | String| Address identifier.

## Coinbase.getAddressTransactions
List transactions that have been sent to a specific address. Scopes: wallet:transactions:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.
| addressId  | String| Address identifier.

## Coinbase.createAddress
Creates a new address for an account. Scopes: wallet:addresses:create

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.
| name       | String| Address label.

## Coinbase.getTransactions
Lists account’s transactions. Scopes: wallet:transactions:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.

## Coinbase.getSingleTransaction
Show an individual transaction for an account. Scopes: wallet:transactions:read

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| Access token.
| accountId    | String| Account identifier.
| transactionId| String| Transaction identifier.

## Coinbase.sendMoney
Send funds to a bitcoin address, ethereum address, or email address. Scopes: wallet:transactions:send

| Field            | Type   | Description
|------------------|--------|----------
| accessToken      | String | Access token.
| to               | String | A bitcoin address, ethereum address, or an email of the recipient.
| amo