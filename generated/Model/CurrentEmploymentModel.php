<?php

namespace Varspool\JobAdder\V2\Model;

class CurrentEmploymentModel
{
    /**
     * @var string
     */
    protected $employer;
    /**
     * @var string
     */
    protected $position;
    /**
     * @var WorkTypeModel
     */
    protected $workType;
    /**
     * @var SalaryModel
     */
    protected $salary;

    /**
     * @return string
     */
    public function getEmployer()
    {
        return $this->employer;
    }

    /**
     * @param string $employer
     *
     * @return self
     */
    public function setEmployer($employer = null)
    {
        $this->employer = $employer;

        return $this;
    }

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
     * @return SalaryModel
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param SalaryModel $salary
     *
     * @return self
     */
    public function setSalary(SalaryModel $salary = null)
    {
        $this->salary = $salary;

        return $this;
    }
}
