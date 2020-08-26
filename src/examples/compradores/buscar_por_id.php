<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    //$api->incrementUrl($id);
    
    $comprador = new \Zoop\Buyers($api);
    
    $id = "e450ceaca9a84582a4e73c882d7292ab";

    $comprador = $comprador->searchById($id);

    echo '<pre>';
    print_r($comprador);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}