<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $vendedor = new \Zoop\Sellers($api);

    /* $data = [
        "first_name"   => "Anthônio",
        "last_name"    => "Carlos de Carvalho",
        "email"        => "anthoniocarvalho@gmail.com",
        "phone_number" => "+12195465432",
        "birthdate"    => "1985-12-15",
        "taxpayer_id"  => "17367530020"
    ]; */
    
    //$id = 'eaac5328426b476880c95d19956e66ed';

    $data = [
        'business_name'   => 'Restaurante Modelo',
        'payment_methods' => 'credit'
    ];

    $id = 'e8b1efd36c7f41b0bf24b90c53350646';
    
    //'individuals' para editar uma pessoa física
    //'businesses'  para editar uma pessoa jurídica
    //$vendedor = $vendedor->edit($id, $data, 'individuals');
    $vendedor = $vendedor->edit($id, $data, 'businesses');

    echo '<pre>';
    print_r($vendedor);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
}