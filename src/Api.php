<?php

namespace Shipay;

/**
 * Responsável pela comunicação com a api shipay
 * 
 * @author Victor Aguiar <victor@margh.com>
 * @copyright (c) 2020
*/
class Api {
    
    private $curl;
    private $url = "https://api.shipay.com.br";
    private $timeout;
    private $headers = array();
    private $complementUrl = '';

    /**
     * Construtor
     * 
     * @param string $access_key
     * @param string $secret_key
     * @param string $wallet
     * @param int    $timeout
    */
    public function __construct($environment = 'production', $timeout = 120){

        $this->curl    = new \Curl\Curl();
        $this->timeout = $timeout;
        
        if($environment == 'approval') $this->url = "https://api-staging.shipay.com.br";
    }

    /**
     * Executa um endpoint
     * 
     * @param string $action post|put|get|delete
     * @param string endpoint
     * @param array $data Parâmetros da requisicao
     * @throws \Exception
     * @return string Resposta do serviço
    */
    public function execute($action, $endpoint, $data){
        
        try{

            $this->curl->setOpt(CURLOPT_RETURNTRANSFER , true);
            $this->curl->setOpt(CURLOPT_FOLLOWLOCATION , true);
            $this->curl->setOpt(CURLOPT_SSL_VERIFYPEER , false);
            $this->curl->setOpt(CURLOPT_SSL_VERIFYHOST , false);

            foreach($this->headers as $key => $value){
                
                $this->curl->setHeader($key, $value);
            }

            $this->curl->setConnectTimeout($this->timeout);

            $url = $this->url .'/' .$endpoint;
            
            if(!empty($this->complementUrl)) $url .= '/' .$this->complementUrl;

            $this->curl->$action($url, $data);

            $this->complementUrl = '';

            if($this->curl->error) {

                throw new \Shipay\Exception($this->curl);
            }

            return $this->curl->response;
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Seta o complemento da url
     * 
     * @param string $value
     * @throws \Exception
     * @return string Resposta do serviço
    */
    public function complementUrl($value){

        $this->complementUrl = $value;

    }

    /**
     * Set timeout
     * 
     * @param string $value
    */
    public function setTimeout($value){

        $this->timeout = $value;

    }

    /**
     * Set Authorization
     * 
     * @param string $value
    */
    public function setAuthorization($token){
        
        $this->addHeader('Authorization', 'Bearer '. $token);

    }

    public function removeAuthorization(){

        $this->removeHeader('Authorization');

    }

    /**
     * Adiciona um item no Header
     * 
     * @param string $key
     * @param string $value
    */
    public function addHeader($key, $value){
        
        if(!empty($key) && !empty($value)){
            $this->headers[$key] = $value;
        }
    }

    /**
     * Remove um item no Header
     * 
     * @param string $key
    */
    public function removeHeader($key){
        
        $this->curl->removeHeader($key);
    }
}