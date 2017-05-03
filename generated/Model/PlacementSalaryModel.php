<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementSalaryModel
{
    /**
     * @var float
     */
    protected $base;
    /**
     * @var float
     */
    protected $superannuation;
    /**
     * @var float
     */
    protected $benefits;
    /**
     * @var float
     */
    protected $total;
    /**
     * @var float
     */
    protected $fee;

    /**
     * @return float
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param float $base
     *
     * @return self
     */
    public function setBase($base = null)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * @return float
     */
    public function getSuperannuation()
    {
        return $this->superannuation;
    }

    /**
     * @param float $superannuation
     *
     * @return self
     */
    public function setSuperannuation($superannuation = null)
    {
        $this->superannuation = $superannuation;

        return $this;
    }

    /**
     * @return float
     */
    public function getBenefits()
    {
        return $this->benefits;
    }

    /**
     * @param float $benefits
     *
     * @return self
     */
    public function setBenefits($benefits = null)
    {
        $this->benefits = $benefits;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param float $total
     *
     * @return self
     */
    public function setTotal($total = null)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return float
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @param float $fee
     *
     * @return self
     */
    public function setFee($fee = null)
    {
        $this->fee = $fee;

        return $this;
    }
}
