<?php

$gluuHost = env('GLUU_HOST', 'https://dev.idp.kw.com');

return [
    'algorithm' => env('GLUU_ALGORITHM', 'HS256'),
    'authorization_endpoint' => $gluuHost.'/oxauth/seam/resource/restv1/oxauth/authorize',
    'token_endpoint' => $gluuHost.'/oxauth/seam/resource/restv1/oxauth/token',
    'userinfo_endpoint' => $gluuHost.'/oxauth/seam/resource/restv1/oxauth/userinfo',
    'clientinfo_endpoint' => $gluHost.'/oxauth/seam/resource/restv1/oxauth/clientinfo',

    // This client_id and client_secret is used as self-consumed keys.
    'client_id' => env('GLUU_CLIENT_ID', '@!8EF4.0267.10A3.7789!0001!58DE.5ADC!0008!66CE.92B9'),
    'client_secret' => env('GLUU_CLIENT_SECRET', 'refactory'),

    'response_type' => env('GLUU_RESPONSE_TYPE', 'code'),
    'scope' => env('GLUU_SCOPE', 'openid email profile'),

    'grant_type' => env('GLUU_GRANT_TYPE', 'authorization_code'),
    'client_assertion_type' => env('GLUU_CLIENT_ASSERTION_TYPE', 'urn:ietf:params:oauth:client-assertion-type:jwt-bearer'),

    // Set this value to true to automatically store your token.
    // Make sure that you have migrate the table.
    'autosave' => env('GLUU_TOKEN_AUTOSAVE', true),
    'table_name' => env('GLUU_TOKEN_TABLENAME', 'access_tokens'),

    // Endpoint for user to access
    'route_endpoint' => env('GLUU_LOGIN_ENDPOINT', '/api/v1/login'),

    // Callback routes
    'route_access_token_granted' => env('GLUU_TOKEN_GRANTED_ENDPOINT', '/callback'),

    // users table name
    'user_table_name' => env('GLUU_USER_TABLE', 'users'),

    // Route for getting user info
    'route_get_user_info' => env('GLUU_USER_INFO_ENDPOINT', '/user_info/{access_token}'),
];
