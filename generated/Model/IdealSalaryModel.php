<?php

namespace Varspool\JobAdder\V2\Model;

class IdealSalaryModel
{
    /**
     * @var WorkTypeModel
     */
    protected $workType;
    /**
     * @var SalaryRangeModel
     */
    protected $salary;

    /**
     * @return WorkTypeModel
     */
    public function getWorkType()
    {
        return $this->workType;
    }

    /**
     * @param WorkTypeModel $workType
     *
     * @return self
     */
    public function setWorkType(WorkTypeModel $workType = null)
    {
        $this->workType = $workType;

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
