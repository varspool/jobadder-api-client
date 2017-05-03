<?php

namespace Varspool\JobAdder\V2\Model;

class EducationModel
{
    /**
     * @var int
     */
    protected $educationId;
    /**
     * @var string
     */
    protected $institution;
    /**
     * @var string
     */
    protected $course;
    /**
     * @var string
     */
    protected $endDate;

    /**
     * @return int
     */
    public function getEducationId()
    {
        return $this->educationId;
    }

    /**
     * @param int $educationId
     *
     * @return self
     */
    public function setEducationId($educationId = null)
    {
        $this->educationId = $educationId;

        return $this;
    }

    /**
     * @return string
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * @param string $institution
     *
     * @return self
     */
    public function setInstitution($institution = null)
    {
        $this->institution = $institution;

        return $this;
    }

    /**
     * @return string
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param string $course
     *
     * @return self
     */
    public function setCourse($course = null)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     *
     * @return self
     */
    public function setEndDate($endDate = null)
    {
        $this->endDate = $endDate;

        return $this;
    }
}
