<?php

/**
 * Class PostageRequest
 */
class PostageRequest
{
    /**
     * @var float
     */
    protected $weight = 0;

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }
}
