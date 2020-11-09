<?php

namespace Shipay;

/**
 * Endpoint de autenticação para os usuários
 * 
 * @link 
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
*/
class AuthsUsers extends Endpoint {

    /**
     * @return string o nome do endpoint da model 
    */
    public function getEndpoint(){

        return 'auth';
    }

}