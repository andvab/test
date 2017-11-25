<?php

/**
 * Class PostageResponse
 */
class PostageResponse
{
    /**
     * @var float
     */
    protected $costShipping = 0;

    /**
     * @var array
     */
    protected $errors = [];

    /**
     * @return float
     */
    public function getCostShipping()
    {
        return $this->costShipping;
    }

    /**
     * @param float $costShipping
     * @return $this
     */
    public function setCostShipping($costShipping)
    {
        $this->costShipping = $costShipping;

        return $this;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param array $errors
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;

        return $this;
    }

    /**
     * @param string $error
     * @return $this
     */
    public function addError($error)
    {
        $this->errors[] = $error;

        return $this;
    }
}
