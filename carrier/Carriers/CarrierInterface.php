<?php

/**
 * Interface CarrierInterface
 */
interface CarrierInterface
{
    const CARRIER_TYPE_POST_RUSSIA = 'post_russia';
    const CARRIER_TYPE_DHL         = 'dhl';

    /**
     * @return string
     */
    public function getType();

    /**
     * @param PostageRequest $postageRequest
     * @return float
     */
    public function calculatePostage(PostageRequest $postageRequest);
}
