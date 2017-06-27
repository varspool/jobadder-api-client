<?php

namespace Varspool\JobAdder\V2\Model;

class AddRequisitionCommand
{
    /**
     * @var int
     */
    protected $contactId;
    /**
     * @var string
     */
    protected $jobTitle;
    /**
     * @var string
     */
    protected $jobDescription;
    /**
     * @var SubmitCategoryModel
     */
    protected $category;
    /**
     * @var SubmitLocationModel
     */
    protected $location;
    /**
     * @var string
     */
    protected $workplaceAddressId;
    /**
     * @var StartModel
     */
    protected $start;
    /**
     * @var DurationModel
     */
    protected $duration;
    /**
     * @var int
     */
    protected $workTypeId;
    /**
     * @var JobOrderSalaryRangeModel
     */
    protected $salary;
    /**
     * @var int
     */
    protected $numberOfJobs;
    /**
     * @var string
     */
    protected $source;
    /**
     * @var SubmitCustomFieldValueModel[]
     */
    protected $customFields;
    /**
     * @var int
     */
    protected $workflowId;
    /**
     * @var int[]
     */
    protected $recruiterUserId;

    /**
     * @return int
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * @param int $contactId
     *
     * @return self
     */
    public function setContactId($contactId = null)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * @return string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param string $jobTitle
     *
     * @return self
     */
    public function setJobTitle($jobTitle = null)
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * @return string
     */
    public function getJobDescription()
    {
        return $this->jobDescription;
    }

    /**
     * @param string $jobDescription
     *
     * @return self
     */
    public function setJobDescription($jobDescription = null)
    {
        $this->jobDescription = $jobDescription;

        return $this;
    }

    /**
     * @return SubmitCategoryModel
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param SubmitCategoryModel $category
     *
     * @return self
     */
    public function setCategory(SubmitCategoryModel $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return SubmitLocationModel
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param SubmitLocationModel $location
     *
     * @return self
     */
    public function setLocation(SubmitLocationModel $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkplaceAddressId()
    {
        return $this->workplaceAddressId;
    }

    /**
     * @param string $workplaceAddressId
     *
     * @return self
     */
    public function setWorkplaceAddressId($workplaceAddressId = null)
    {
        $this->workplaceAddressId = $workplaceAddressId;

        return $this;
    }

    /**
     * @return StartModel
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param StartModel $start
     *
     * @return self
     */
    public function setStart(StartModel $start = null)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * @return DurationModel
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param DurationModel $duration
     *
     * @return self
     */
    public function setDuration(DurationModel $duration = null)
    {
        $this->duration = $duration;

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
     * @return JobOrderSalaryRangeModel
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param JobOrderSalaryRangeModel $salary
     *
     * @return self
     */
    public function setSalary(JobOrderSalaryRangeModel $salary = null)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfJobs()
    {
        return $this->numberOfJobs;
    }

    /**
     * @param int $numberOfJobs
     *
     * @return self
     */
    public function setNumberOfJobs($numberOfJobs = null)
    {
        $this->numberOfJobs = $numberOfJobs;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     *
     * @return self
     */
    public function setSource($source = null)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return SubmitCustomFieldValueModel[]
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param SubmitCustomFieldValueModel[] $customFields
     *
     * @return self
     */
    public function setCustomFields(array $customFields = null)
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * @return int
     */
    public function getWorkflowId()
    {
        return $this->workflowId;
    }

    /**
     * @param int $workflowId
     *
     * @return self
     */
    public function setWorkflowId($workflowId = null)
    {
        $this->workflowId = $workflowId;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getRecruiterUserId()
    {
        return $this->recruiterUserId;
    }

    /**
     * @param int[] $recruiterUserId
     *
     * @return self
     */
    public function setRecruiterUserId(array $recruiterUserId = null)
    {
        $this->recruiterUserId = $recruiterUserId;

        return $this;
    }
}
