<?php

namespace Varspool\JobAdder\V2\Model;

class SalaryRangeModel
{
    /**
     * @var string
     */
    protected $ratePer;
    /**
     * @var float
     */
    protected $rateLow;
    /**
     * @var float
     */
    protected $rateHigh;
    /**
     * @var string
     */
    protected $currency;

    /**
     * @return string
     */
    public function getRatePer()
    {
        return $this->ratePer;
    }

    /**
     * @param string $ratePer
     *
     * @return self
     */
    public function setRatePer($ratePer = null)
    {
        $this->ratePer = $ratePer;

        return $this;
    }

    /**
     * @return float
     */
    public function getRateLow()
    {
        return $this->rateLow;
    }

    /**
     * @param float $rateLow
     *
     * @return self
     */
    public function setRateLow($rateLow = null)
    {
        $this->rateLow = $rateLow;

        return $this;
    }

    /**
     * @return float
     */
    public function getRateHigh()
    {
        return $this->rateHigh;
    }

    /**
     * @param float $rateHigh
     *
     * @return self
     */
    public function setRateHigh($rateHigh = null)
    {
        $this->rateHigh = $rateHigh;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency($currency = null)
    {
        $this->currency = $currency;

        return $this;
    }
}
