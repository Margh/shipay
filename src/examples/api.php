<?php

require_once('../../../vendor/autoload.php');

//Essas informações podem ser encontadas no painel da Shipay
//https://painel-staging.shipay.com.br/  - ambiente de teste
$access_key = '59WAklhSIcn6rk6TyYfMZQ';
$secret_key = '5mPqTFwZb76ZuV5ZXMUlo7hVORqjIFiVAM4eJRgFn5sH1HIa7Jr2Vh1OANHjdXlempFSL_bB37zNikaK3RcI5w';
$wallet     = 'shipay-pagador';
$client_id  = 'LB5vMyWyPT07pB3ChAb2_i0BgH1Pz4aazyNQ03hi6TePxxDNf6O889wo5UwUId73DfkVRJodFmFz3d-WUlWAL9zLdNQGTte4VESYW675L6XbTQm1fQRKj331VX3B9o04ao_InsUGrrAkIcJVvWq4hrs_uOZi_y4oT6o7qv0urnw';
$token      = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1OTg1NjIzNjcsIm5iZiI6MTU5ODU2MjM2NywianRpIjoiMTQwZTgwOWUtYzFlZS00ZTY1LWI5MzUtMDRkY2E1MzU1M2ExIiwiZXhwIjoxNjAxMTU0MzY3LCJpZGVudGl0eSI6eyJhdXRoX3R5cGUiOiJjbGllbnQiLCJjdXN0b21lcl9pZCI6ODMsInN0b3JlX3Bvc19pZCI6MTM2fSwiZnJlc2giOmZhbHNlLCJ0eXBlIjoiYWNjZXNzIiwidXNlcl9jbGFpbXMiOlsicHVibGljIl19.efn1ImONga4R-f39BstLAVNpG7zrlQNgoDV3MGZAnsI';
    
//$api->setAuthorization($token);
return new \Shipay\Api($access_key, $secret_key, $wallet, $client_id, $token);