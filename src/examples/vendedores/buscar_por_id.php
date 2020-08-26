<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $vendedor = new \Zoop\Sellers($api);
    
    //$id = 'eaac5328426b476880c95d19956e66ed';
    $id = 'e8b1efd36c7f41b0bf24b90c53350646';
    
    $vendedor = $vendedor->searchById($id);

    echo '<pre>';
    print_r($vendedor);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}