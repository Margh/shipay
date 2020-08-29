<?php

try {

    $api = require_once('../api.php');

    //access token do PDV
    $access_token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1OTg3MDk3NDgsIm5iZiI6MTU5ODcwOTc0OCwianRpIjoiOWMzZTYyOWMtNTRmOS00ZDU3LTllZDctZjZmYjQyODhhMDY2IiwiZXhwIjoxNjAxMzAxNzQ4LCJpZGVudGl0eSI6eyJhdXRoX3R5cGUiOiJjbGllbnQiLCJjdXN0b21lcl9pZCI6ODMsInN0b3JlX3Bvc19pZCI6MTM2fSwiZnJlc2giOmZhbHNlLCJ0eXBlIjoiYWNjZXNzIiwidXNlcl9jbGFpbXMiOlsicHVibGljIl19.8KASpxTUPrRM_YNrRiF2JmNXK91io_kZrygMhLmsndk';
    
    $api->setAuthorization($access_token);
    
    $order = new \Shipay\Orders($api);

    $data = [
        "order_ref" => "picpay-001",
        "wallet" => "picpay",
        "total" => 0.51,
        "items" => [
            [
                "item_title" => "Cerveja Heineken",
                "unit_price" => 0.30,
                "quantity" => 1
            ],
            [
                "item_title" => "Cachaca 51",
                "unit_price" => 0.20,
                "quantity" => 1
            ],
            [
                "item_title" => "Cerveja Samba",
                "unit_price" => 0.01,
                "quantity" => 1
            ]
        ],
        "buyer" => [
            "first_name" => "Shipay",
            "last_name" => "PDV",
            "cpf" => "000.000.000-00",
            "email" => "shipaypagador@shipay.com.br",
            "phone" => "+55 11 99999-9999"
        ]
    ];

    $order = $order->post($data);
    
    echo '<pre>';
    print_r($order);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}