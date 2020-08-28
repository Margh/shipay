<?php

try {

    $api = require_once('../api.php');

    $order = new \Shipay\Orders($api);

    $id = '84dd6e5f-7b0d-4f31-bf08-794b016e7131';

    $order = $order->delete($id);
    
    echo '<pre>';
    print_r($order);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}