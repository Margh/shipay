<?php

namespace Shipay;

/**
 * Define os comportamentos básicos de um endpoint na api
 * 
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
*/
abstract class Endpoint {
    
    protected $api;

    /**
     * @return string o nome do endpoint da model 
    */
    abstract protected function getEndpoint();

    /**
     * Construtor.
     * 
     * @param \Shipay\Api $api
    */
    public function __construct(\Shipay\Api $api){

        $this->api = $api;
    }

    /**
     * cria um registro
     * 
     * @param string $id = null Parâmetros da requisição
     * @param array  $data = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function post($data = null){
        
        try{

            $this->api->addHeader('content-type', 'application/json');

            return $this->api->execute('post', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Busca pelo por um ou mais registros
     * 
     * @param array $id = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function get($id = null){
        
        try{

            if($id) $this->api->complementUrl($id);

            return $this->api->execute('get', $this->getEndpoint(), null);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Edita um registro
     * 
     * @param array $data = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function put($id = null, $data = null){
        
        try{
            
            if(empty($id)) throw new \Exception("Id não informado.");

            $this->api->complementUrl($id);

            $this->api->addHeader('content-type', 'application/json');

            return $this->api->execute('put', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Apaga um registro
     * 
     * @param array $data = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function delete($id = null){
        
        try{
            
            if(empty($id)) throw new \Exception("Id não informado.");

            $this->api->complementUrl($id);

            return $this->api->execute('delete', $this->getEndpoint(), null);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

}