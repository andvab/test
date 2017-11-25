<?php

require_once 'CarrierInterface.php';

/**
 * Class DhlCarrier
 */
class DhlCarrier implements CarrierInterface
{
    /**
     * @return string
     */
    public function getType()
    {
        return CarrierInterface::CARRIER_TYPE_DHL;
    }

    /**
     * @param PostageRequest $postageRequest
     * @return float|int
     */
    public function calculatePostage(PostageRequest $postageRequest)
    {
        return $postageRequest->getWeight() * 100;
    }
}