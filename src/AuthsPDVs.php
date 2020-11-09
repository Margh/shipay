<?php

namespace Shipay;

/**
 * Endpoint de autenticação para os pdvs
 * 
 * @link 
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
*/
class AuthsPDVs extends Endpoint {

    /**
     * @return string o nome do endpoint da model 
    */
    public function getEndpoint(){

        return 'pdvauth';
    }

}