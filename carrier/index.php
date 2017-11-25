<?php

require_once 'Objects/PostageRequest.php';
require_once 'Service/PostageService.php';
require_once 'Carriers/CarrierInterface.php';

$weight  = 120;
$result = 0;

$postageRequest = new PostageRequest();
$postageRequest->setWeight($weight);

$postage = new PostageService(CarrierInterface::CARRIER_TYPE_DHL);
$postageResponse = $postage->calculatePostage($postageRequest);

var_dump($postageResponse);