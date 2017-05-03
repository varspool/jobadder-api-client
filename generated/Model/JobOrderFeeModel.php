<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderFeeModel
{
    /**
     * @var string
     */
    protected $rateType;
    /**
     * @var float
     */
    protected $rate;
    /**
     * @var float
     */
    protected $estimatedTotal;

    /**
     * @return string
     */
    public function getRateType()
    {
        return $this->rateType;
    }

    /**
     * @param string $rateType
     *
     * @return self
     */
    public function setRateType($rateType = null)
    {
        $this->rateType = $rateType;

        return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     *
     * @return self
     */
    public function setRate($rate = null)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedTotal()
    {
        return $this->estimatedTotal;
    }

    /**
     * @param float $estimatedTotal
     *
     * @return self
     */
    public function setEstimatedTotal($estimatedTotal = null)
    {
        $this->estimatedTotal = $estimatedTotal;

        return $this;
    }
}
