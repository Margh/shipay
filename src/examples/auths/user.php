<?php

try {

    $api = require_once('../api.php');

    $auth = new \Shipay\AuthsUsers($api);

    $data =[
        "username" => "contato@margh.com.br",
        "password" => "4FjfgX2X",
    ];

    $auth = $auth->post($data);
    
    echo '<pre>';
    print_r($auth);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}