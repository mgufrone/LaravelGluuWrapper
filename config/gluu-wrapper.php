<?php
$idpEndpoint = env('IDP_ENDPOINT', 'https://dev.idp.kw.com');

return [
    'algorithm' => 'HS256',
    'authorization_endpoint' => "{$idpEndpoint}/oxauth/seam/resource/restv1/oxauth/authorize",
    'token_endpoint' => "{$idpEndpoint}/oxauth/seam/resource/restv1/oxauth/token",
    'userinfo_endpoint' => "{$idpEndpoint}/oxauth/seam/resource/restv1/oxauth/userinfo",
    'clientinfo_endpoint' => "{$idpEndpoint}/oxauth/seam/resource/restv1/oxauth/clientinfo",

    // This client_id and client_secret is used as self-consumed keys.
    'client_id' => env('IDP_CLIENT_ID', '@!8EF4.0267.10A3.7789!0001!58DE.5ADC!0008!66CE.92B9'),
    'client_secret' => env('IDP_CLIENT_SECRET', 'refactory'),

    'response_type' => 'code',
    'scope' => 'openid',

    'grant_type' => 'authorization_code',
    'client_assertion_type' => 'urn:ietf:params:oauth:client-assertion-type:jwt-bearer',

    // Set table name to store OpenID credentials
    'table_name' => 'access_tokens',

    // Set table name of user authentication which implements AuthenticatableContract
    'user_table_name' => 'users',

    // Endpoint for user to access
    'route_endpoint' => '/login',

    // Callback routes
    'route_access_token_granted' => '/access_granted',

    // Route for getting user info
    'route_get_user_info' => '/user_info/{access_token}',
];
