<?php

    //Busca as carteiras do cliente
try {

    $api = require_once('../api.php');
    
    //access token do usuario ou do pdv
    $access_token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1OTg3MDk2MDEsIm5iZiI6MTU5ODcwOTYwMSwianRpIjoiYjcwY2E4OWMtMDVlYS00MmNlLWI1MWItYzBlYWZhYjEwZTM5IiwiZXhwIjoxNjAxMzAxNjAxLCJpZGVudGl0eSI6eyJhdXRoX3R5cGUiOiJwYXNzd29yZCIsInVzZXJfaWQiOjkxLCJtYXN0ZXJfYWNjb3VudCI6ZmFsc2UsImN1c3RvbWVyX2lkIjo4Mywic3RvcmVfcG9zX2lkIjpudWxsLCJyb2xlX2lkIjoxLCJpbXBlcnNvbmF0ZSI6ZmFsc2V9LCJmcmVzaCI6ZmFsc2UsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2NsYWltcyI6WyJwdWJsaWMiXX0.PEZTIGsfGAcWHDrqN5YCvie9kRmltiiCWXNfrbJxY0M';
    
    $api->setAuthorization($access_token);

    $wallet = new \Shipay\Wallets($api);

    $wallet = $wallet->get();
    
    echo '<pre>';
    print_r($wallet);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}