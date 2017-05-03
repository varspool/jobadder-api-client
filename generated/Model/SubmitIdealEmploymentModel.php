<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitIdealEmploymentModel
{
    /**
     * @var string
     */
    protected $position;
    /**
     * @var int
     */
    protected $workTypeId;
    /**
     * @var SalaryRangeModel
     */
    protected $salary;
    /**
     * @var SubmitIdealSalaryModel[]
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

    /**
     * @return SubmitIdealSalaryModel[]
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * @param SubmitIdealSalaryModel[] $other
     *
     * @return self
     */
    public function setOther(array $other = null)
    {
        $this->other = $other;

        return $this;
    }
}
