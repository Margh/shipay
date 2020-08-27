<?php

namespace Shipay;

/**
 * Endpoint refresh-token
 * 
 * @link 
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
*/
class RefreshTokens extends Endpoint {

    /**
     * @return string o nome do endpoint da model 
    */
    public function getEndpoint(){

        return 'refresh-token';
    }

}