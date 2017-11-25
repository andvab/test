<?php

require_once __DIR__ . '/../Carriers/DhlCarrier.php';
require_once __DIR__ . '/../Carriers/PostRussiaCarrier.php';
require_once __DIR__ . '/../Objects/PostageRequest.php';
require_once __DIR__ . '/../Objects/PostageResponse.php';

/**
 * Class PostageService
 */
class PostageService
{
    /**
     * @var string
     */
    private $carrierCode;

    /**
     * @var null|object
     */
    private $carrier;

    /**
     * Carrier constructor.
     * @param string $carrierCode
     */
    public function __construct($carrierCode)
    {
        $this->carrierCode = $carrierCode;
        $this->carrier     = $this->getCarrierClass();
    }

    /**
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->carrierCode;
    }

    /**
     * @param PostageRequest $postageRequest
     * @return mixed
     */
    public function calculatePostage(PostageRequest $postageRequest)
    {
        $postageResponse = new PostageResponse();

        if ($this->carrier) {
            $costShipping = $this->carrier->calculatePostage($postageRequest);

            $postageResponse->setCostShipping($costShipping);
        } else {
            $postageResponse->addError('Carrier class not exist');
        }

        return $postageResponse;
    }

    /**
     * @return null|object
     */
    private function getCarrierClass()
    {
        $className = $this->getClassName();

        if (class_exists($className)) {
            return new $className();
        }

        return null;
    }

    /**
     * @return string
     */
    private function getClassName()
    {
        $result = '';

        foreach (explode('_', $this->carrierCode) as $partName)
        {
            $result .= ucfirst($partName);
        }

        return $result . 'Carrier';
    }
}
