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
| apiKey   | 