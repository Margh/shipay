<?php

require_once('../../../vendor/autoload.php');

//informado somente para ambiente de homologação
$environment = 'approval';

return new \Shipay\Api($environment);