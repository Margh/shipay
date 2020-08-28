<?php

    //Busca as carteiras do cliente
try {

    $api = require_once('../api.php');
    
    $wallet = new \Shipay\Wallets($api);

    $wallet = $wallet->get();
    
    echo '<pre>';
    print_r($wallet);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}