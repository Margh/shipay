<?php

try {

    $api = require_once('../api.php');
    
    //access token do usuario ou do pdv
    $access_token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1OTg3MDk3NDgsIm5iZiI6MTU5ODcwOTc0OCwianRpIjoiOWMzZTYyOWMtNTRmOS00ZDU3LTllZDctZjZmYjQyODhhMDY2IiwiZXhwIjoxNjAxMzAxNzQ4LCJpZGVudGl0eSI6eyJhdXRoX3R5cGUiOiJjbGllbnQiLCJjdXN0b21lcl9pZCI6ODMsInN0b3JlX3Bvc19pZCI6MTM2fSwiZnJlc2giOmZhbHNlLCJ0eXBlIjoiYWNjZXNzIiwidXNlcl9jbGFpbXMiOlsicHVibGljIl19.8KASpxTUPrRM_YNrRiF2JmNXK91io_kZrygMhLmsndk';
    
    $api->setAuthorization($access_token);

    $order = new \Shipay\Orders($api);

    $id = '5cbc76d2-094c-4d07-922e-fd60dfd1b87d';

    $order = $order->get($id);
    
    echo '<pre>';
    print_r($order);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}