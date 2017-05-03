<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitCurrentEmploymentModel
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
     * @var int
     */
    protected $workTypeId;
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
