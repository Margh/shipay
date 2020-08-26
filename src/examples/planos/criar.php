<?php

try {

    $api = require_once('../api.php');

    //usar a v2 para planos
    $api->setApiVersion('v2');

    $plano = new \Zoop\Plans($api);

    $data = [
        "name"            => "Basico",
        "frequency"       => "monthly",
        "interval"        => 1,
        "payment_methods" => [],
        "currency"         => "BRL",
        "amount"           => 20000,
        "description"      => "Start",
        "grace_period"     => 7,
        "tolerance_period" => 5
    ];

    $plano = $plano->create($data);
    
    echo '<pre>';
    print_r($plano);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}