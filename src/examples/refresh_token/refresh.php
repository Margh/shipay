<?php

try {

    $api = require_once('../api.php');

    $r_token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1OTg2MzkxOTAsIm5iZiI6MTU5ODYzOTE5MCwianRpIjoiZWMxNTBkZWMtNTA0Yi00NGRmLTk0M2MtMDQyYzQ3OTNkMmJjIiwiZXhwIjoxNjAxMjMxMTkwLCJpZGVudGl0eSI6eyJhdXRoX3R5cGUiOiJwYXNzd29yZCIsInVzZXJfaWQiOjkxLCJtYXN0ZXJfYWNjb3VudCI6ZmFsc2UsImN1c3RvbWVyX2lkIjo4Mywic3RvcmVfcG9zX2lkIjpudWxsLCJyb2xlX2lkIjoxLCJpbXBlcnNvbmF0ZSI6ZmFsc2V9LCJ0eXBlIjoicmVmcmVzaCIsInVzZXJfY2xhaW1zIjpbInB1YmxpYyJdfQ.hKeSZopFfYXzB51d_qAhMCIk1avxaVQPYM4PMP1fYgs';
    
    $api->setAuthorization($token);

    $refresh = new \Shipay\RefreshTokens($api);

    $refresh = $refresh->post();
    
    echo '<pre>';
    print_r($refresh);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}