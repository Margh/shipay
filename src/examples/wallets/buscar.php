<?php

try {

    $api = require_once('../api.php');
    
    $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1OTg1NDY4NzYsIm5iZiI6MTU5ODU0Njg3NiwianRpIjoiNTNmN2M1NzgtZGM5MC00NjE0LTk0ZmQtMDcxNjk3OWQ5MjUwIiwiZXhwIjoxNjAxMTM4ODc2LCJpZGVudGl0eSI6eyJhdXRoX3R5cGUiOiJwYXNzd29yZCIsInVzZXJfaWQiOjkxLCJtYXN0ZXJfYWNjb3VudCI6ZmFsc2UsImN1c3RvbWVyX2lkIjo4Mywic3RvcmVfcG9zX2lkIjpudWxsLCJyb2xlX2lkIjoxLCJpbXBlcnNvbmF0ZSI6ZmFsc2V9LCJmcmVzaCI6ZmFsc2UsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2NsYWltcyI6WyJwdWJsaWMiXX0.BM9xNTHkzcaPL0ypo_GuBkmO0lB4VgHc1sVNqmpI6JQ';
    
    $api->setAuthorization($token);
    
    $wallet = new \Shipay\Wallets($api);

    $wallet = $wallet->get();
    
    echo '<pre>';
    print_r($wallet);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}