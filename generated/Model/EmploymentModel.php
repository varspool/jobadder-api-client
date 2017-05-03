<?php

namespace Varspool\JobAdder\V2\Model;

class EmploymentModel
{
    /**
     * @var CurrentEmploymentModel
     */
    protected $current;
    /**
     * @var IdealEmploymentModel
     */
    protected $ideal;

    /**
     * @return CurrentEmploymentModel
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @param CurrentEmploymentModel $current
     *
     * @return self
     */
    public function setCurrent(CurrentEmploymentModel $current = null)
    {
        $this->current = $current;

        return $this;
    }

    /**
     * @return IdealEmploymentModel
     */
    public function getIdeal()
    {
        return $this->ideal;
    }

    /**
     * @param IdealEmploymentModel $ideal
     *
     * @return self
     */
    public function setIdeal(IdealEmploymentModel $ideal = null)
    {
        $this->ideal = $ideal;

        return $this;
    }
}
