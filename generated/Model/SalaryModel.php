<?php

namespace Varspool\JobAdder\V2\Model;

class SalaryModel
{
    /**
     * @var string
     */
    protected $ratePer;
    /**
     * @var float
     */
    protected $rate;
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
