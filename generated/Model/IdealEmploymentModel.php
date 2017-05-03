<?php

namespace Varspool\JobAdder\V2\Model;

class IdealEmploymentModel
{
    /**
     * @var string
     */
    protected $position;
    /**
     * @var WorkTypeModel
     */
    protected $workType;
    /**
     * @var SalaryRangeModel
     */
    protected $salary;
    /**
     * @var IdealSalaryModel[]
     */
    protected $other;

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $position
     *
     * @return self
     */
    public function setPosition($position = null)
    {
        $this->position = $position;

        return $this;
    }

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

    /**
     * @return IdealSalaryModel[]
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * @param IdealSalaryModel[] $other
     *
     * @return self
     */
    public function setOther(array $other = null)
    {
        $this->other = $other;

        return $this;
    }
}
