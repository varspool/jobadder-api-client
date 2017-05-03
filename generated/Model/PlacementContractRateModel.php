<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementContractRateModel
{
    /**
     * @var float
     */
    protected $hoursPerWeek;
    /**
     * @var float
     */
    protected $daysPerWeek;
    /**
     * @var float
     */
    protected $clientRate;
    /**
     * @var float
     */
    protected $candidateRate;
    /**
     * @var string
     */
    protected $onCostsType;
    /**
     * @var float
     */
    protected $onCosts;
    /**
     * @var float
     */
    protected $netMargin;

    /**
     * @return float
     */
    public function getHoursPerWeek()
    {
        return $this->hoursPerWeek;
    }

    /**
     * @param float $hoursPerWeek
     *
     * @return self
     */
    public function setHoursPerWeek($hoursPerWeek = null)
    {
        $this->hoursPerWeek = $hoursPerWeek;

        return $this;
    }

    /**
     * @return float
     */
    public function getDaysPerWeek()
    {
        return $this->daysPerWeek;
    }

    /**
     * @param float $daysPerWeek
     *
     * @return self
     */
    public function setDaysPerWeek($daysPerWeek = null)
    {
        $this->daysPerWeek = $daysPerWeek;

        return $this;
    }

    /**
     * @return float
     */
    public function getClientRate()
    {
        return $this->clientRate;
    }

    /**
     * @param float $clientRate
     *
     * @return self
     */
    public function setClientRate($clientRate = null)
    {
        $this->clientRate = $clientRate;

        return $this;
    }

    /**
     * @return float
     */
    public function getCandidateRate()
    {
        return $this->candidateRate;
    }

    /**
     * @param float $candidateRate
     *
     * @return self
     */
    public function setCandidateRate($candidateRate = null)
    {
        $this->candidateRate = $candidateRate;

        return $this;
    }

    /**
     * @return string
     */
    public function getOnCostsType()
    {
        return $this->onCostsType;
    }

    /**
     * @param string $onCostsType
     *
     * @return self
     */
    public function setOnCostsType($onCostsType = null)
    {
        $this->onCostsType = $onCostsType;

        return $this;
    }

    /**
     * @return float
     */
    public function getOnCosts()
    {
        return $this->onCosts;
    }

    /**
     * @param float $onCosts
     *
     * @return self
     */
    public function setOnCosts($onCosts = null)
    {
        $this->onCosts = $onCosts;

        return $this;
    }

    /**
     * @return float
     */
    public function getNetMargin()
    {
        return $this->netMargin;
    }

    /**
     * @param float $netMargin
     *
     * @return self
     */
    public function setNetMargin($netMargin = null)
    {
        $this->netMargin = $netMargin;

        return $this;
    }
}
