<?php

try {

    $api = require_once('../api.php');

    $auth = new \Shipay\AuthsPDVs($api);

    $data =[
        "access_key" => "59WAklhSIcn6rk6TyYfMZQ",
        "secret_key" => "5mPqTFwZb76ZuV5ZXMUlo7hVORqjIFiVAM4eJRgFn5sH1HIa7Jr2Vh1OANHjdXlempFSL_bB37zNikaK3RcI5w",
        "client_id"  => "LB5vMyWyPT07pB3ChAb2_i0BgH1Pz4aazyNQ03hi6TePxxDNf6O889wo5UwUId73DfkVRJodFmFz3d-WUlWAL9zLdNQGTte4VESYW675L6XbTQm1fQRKj331VX3B9o04ao_InsUGrrAkIcJVvWq4hrs_uOZi_y4oT6o7qv0urnw"
    ];

    $auth = $auth->post($data);
    
    echo '<pre>';
    print_r($auth);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}