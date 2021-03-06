<?php

namespace Shipay;

/**
 * Endpoint de carteira
 * 
 * @link 
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
*/
class WalletsSupported extends Endpoint {

    /**
     * @return string o nome do endpoint da model 
    */
    public function getEndpoint(){

        return 'wallets-supported';
    }

}