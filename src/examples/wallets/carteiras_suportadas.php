<?php

    //Busca as carteiras suportadas pela shipay
try {

    $api = require_once('../api.php');
    
    $wallet = new \Shipay\WalletsSupported($api);

    $wallet = $wallet->get();
    
    echo '<pre>';
    print_r($wallet);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}