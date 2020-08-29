<?php

try {

    $api = require_once('../api.php');

    //refresh_token do usuario ou pdv
    $refresh_token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1OTg3MDk3NDgsIm5iZiI6MTU5ODcwOTc0OCwianRpIjoiOGFhNDQyMGYtMTc5MS00OWMzLTgzYTctOTVmOWEyZjM5MzIwIiwiZXhwIjoxNjAxMzAxNzQ4LCJpZGVudGl0eSI6eyJhdXRoX3R5cGUiOiJjbGllbnQiLCJjdXN0b21lcl9pZCI6ODMsInN0b3JlX3Bvc19pZCI6MTM2fSwidHlwZSI6InJlZnJlc2giLCJ1c2VyX2NsYWltcyI6WyJwdWJsaWMiXX0.mwosAE0iRoYeItaOiJ0yOSvgFkPDcPiDJXLBujTIIzA';
    
    $api->setAuthorization($refresh_token);
    
    $refresh = new \Shipay\RefreshTokens($api);

    $refresh = $refresh->post();
    
    echo '<pre>';
    print_r($refresh);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}