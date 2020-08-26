<?php

try {

    $api = require_once('../api.php');
    
    $api->setApiVersion('v1');

    /* $data = [
        'method'      => 'POST',
        'url'         => 'https://whteste.vendana.com.br',
        'description' => 'WebHook teste Vendana',
        'event'       => ['plan.created']
    ]; */

    $data = [
        'method'      => 'POST',
        'url'         => 'https://whteste.vendana.com.br',
        'description' => 'WebHook teste Vendana',
        'event'       => [
            'transaction.pre_authorization.succeeded',
            'transaction.pre_authorization.failed',
            'transaction.capture.succeeded',
            'transaction.capture.failed',
            'transaction.authorization.succeeded',
            'transaction.authorization.failed',
            'transaction.void.succeeded',
            'transaction.void.failed',
        ]
    ];


    $webhook = new \Zoop\Webhooks($api);

    $webhook = $webhook->create($data);

    echo '<pre>';
    print_r($webhook);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}