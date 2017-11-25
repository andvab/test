<?php

require_once 'CarrierInterface.php';

/**
 * Class PostRussiaCarrier
 */
class PostRussiaCarrier implements CarrierInterface
{
    /**
     * @return string
     */
    public function getType()
    {
        return CarrierInterface::CARRIER_TYPE_POST_RUSSIA;
    }

    /**
     * @param PostageRequest $postageRequest
     * @return float
     */
    public function calculatePostage(PostageRequest $postageRequest)
    {
        if ($postageRequest->getWeight() > 10) {
            return 1000.00;
        }

        return 100.00;
    }
}
