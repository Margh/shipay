<?php

namespace Shipay;

/**
 * Endpoint de ordem
 * 
 * @link 
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
*/
class Orders extends Endpoint {

    /**
     * @return string o nome do endpoint da model 
    */
    public function getEndpoint(){

        return 'order';
    }

}