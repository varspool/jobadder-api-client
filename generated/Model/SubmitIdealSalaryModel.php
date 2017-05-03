<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitIdealSalaryModel
{
    /**
     * @var int
     */
    protected $workTypeId;
    /**
     * @var SalaryRangeModel
     */
    protected $salary;

    /**
     * @return int
     */
    public function getWorkTypeId()
    {
        return $this->workTypeId;
    }

    /**
     * @param int $workTypeId
     *
     * @return self
     */
    public function setWorkTypeId($workTypeId = null)
    {
        $this->workTypeId = $workTypeId;

        return $this;
    }

    /**
     * @return SalaryRangeModel
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param SalaryRangeModel $salary
     *
     * @return self
     */
    public function setSalary(SalaryRangeModel $salary = null)
    {
        $this->salary = $salary;

        return $this;
    }
}
