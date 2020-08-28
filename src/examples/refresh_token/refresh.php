<?php

try {

    $api = require_once('../api.php');

    $r_token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1OTg1NjY2OTUsIm5iZiI6MTU5ODU2NjY5NSwianRpIjoiZWExZGQ2MTItMzM1NS00ZDk5LTkzZDAtNjFhNjYwMWU1NGEzIiwiZXhwIjoxNjAxMTU4Njk1LCJpZGVudGl0eSI6eyJhdXRoX3R5cGUiOiJwYXNzd29yZCIsInVzZXJfaWQiOjkxLCJtYXN0ZXJfYWNjb3VudCI6ZmFsc2UsImN1c3RvbWVyX2lkIjo4Mywic3RvcmVfcG9zX2lkIjpudWxsLCJyb2xlX2lkIjoxLCJpbXBlcnNvbmF0ZSI6ZmFsc2V9LCJ0eXBlIjoicmVmcmVzaCIsInVzZXJfY2xhaW1zIjpbInB1YmxpYyJdfQ.pn2jraUdwKao3TY9x0v45z8dB1CeEjOFmbYGnFUU7K8';
    
    $api->setAuthorization($token);

    $refresh = new \Shipay\RefreshTokens($api);

    $refresh = $refresh->post();
    
    echo '<pre>';
    print_r($refresh);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}