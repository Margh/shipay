<?php

try {

    $api = require_once('../api.php');

    $order = new \Shipay\Orders($api);

    $data = [
        "order_ref" => "shipaypag-002",
        "wallet" => "shipay-pagador",
        "total" => 0.51
    ];

    $order = $order->post($data);
    
    echo '<pre>';
    print_r($order);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}