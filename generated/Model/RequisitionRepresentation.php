<?php

namespace Varspool\JobAdder\V2\Model;

class RequisitionRepresentation
{
    /**
     * @var int
     */
    protected $requisitionId;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var int
     */
    protected $workflowStageIndex;
    /**
     * @var string
     */
    protected $jobTitle;
    /**
     * @var CompanyNameModel
     */
    protected $company;
    /**
     * @var ContactNameModel
     */
    protected $hiringManager;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * @var CompanyWorkflowModel
     */
    protected $workflow;
    /**
     * @var string
     */
    protected $jobDescription;
    /**
     * @var int
     */
    protected $numberOfJobs;
    /**
     * @var string
     */
    protected $source;
    /**
     * @var CompanyAddressModel
     */
    protected $workplaceAddress;
    /**
     * @var JobOrderCategoryModel
     */
    protected $category;
    /**
     * @var JobOrderLocationModel
     */
    protected $location;
    /**
     * @var StartModel
     */
    protected $start;
    /**
     * @var DurationModel
     */
    protected $duration;
    /**
     * @var WorkTypeModel
     */
    protected $workType;
    /**
     * @var JobOrderSalaryRangeModel
     */
    protected $salary;
    /**
     * @var float
     */
    protected $timePerWeek;
    /**
     * @var CustomFieldValueModel[]
     */
    protected $customFields;
    /**
     * @var UserSummaryModel
     */
    protected $owner;
    /**
     * @var UserSummaryModel[]
     */
    protected $recruiters;
    /**
     * @var RequisitionLinks
     */
    protected $links;

    /**
     * @return int
     */
    public function getRequisitionId()
    {
        return $this->requisitionId;
    }

    /**
     * @param int $requisitionId
     *
     * @return self
     */
    public function setRequisitionId($requisitionId = null)
    {
        $this->requisitionId = $requisitionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return int
     */
    public function getWorkflowStageIndex()
    {
        return $this->workflowStageIndex;
    }

    /**
     * @param int $workflowStageIndex
     *
     * @return self
     */
    public function setWorkflowStageIndex($workflowStageIndex = null)
    {
        $this->workflowStageIndex = $workflowStageIndex;

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
     * @return CompanyNameModel
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param CompanyNameModel $company
     *
     * @return self
     */
    public function setCompany(CompanyNameModel $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return ContactNameModel
     */
    public function getHiringManager()
    {
        return $this->hiringManager;
    }

    /**
     * @param ContactNameModel $hiringManager
     *
     * @return self
     */
    public function setHiringManager(ContactNameModel $hiringManager = null)
    {
        $this->hiringManager = $hiringManager;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return CompanyWorkflowModel
     */
    public function getWorkflow()
    {
        return $this->workflow;
    }

    /**
     * @param CompanyWorkflowModel $workflow
     *
     * @return self
     */
    public function setWorkflow(CompanyWorkflowModel $workflow = null)
    {
        $this->workflow = $workflow;

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
     * @return CompanyAddressModel
     */
    public function getWorkplaceAddress()
    {
        return $this->workplaceAddress;
    }

    /**
     * @param CompanyAddressModel $workplaceAddress
     *
     * @return self
     */
    public function setWorkplaceAddress(CompanyAddressModel $workplaceAddress = null)
    {
        $this->workplaceAddress = $workplaceAddress;

        return $this;
    }

    /**
     * @return JobOrderCategoryModel
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param JobOrderCategoryModel $category
     *
     * @return self
     */
    public function setCategory(JobOrderCategoryModel $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return JobOrderLocationModel
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param JobOrderLocationModel $location
     *
     * @return self
     */
    public function setLocation(JobOrderLocationModel $location = null)
    {
        $this->location = $location;

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
     * @return float
     */
    public function getTimePerWeek()
    {
        return $this->timePerWeek;
    }

    /**
     * @param float $timePerWeek
     *
     * @return self
     */
    public function setTimePerWeek($timePerWeek = null)
    {
        $this->timePerWeek = $timePerWeek;

        return $this;
    }

    /**
     * @return CustomFieldValueModel[]
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param CustomFieldValueModel[] $customFields
     *
     * @return self
     */
    public function setCustomFields(array $customFields = null)
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * @return UserSummaryModel
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param UserSummaryModel $owner
     *
     * @return self
     */
    public function setOwner(UserSummaryModel $owner = null)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return UserSummaryModel[]
     */
    public function getRecruiters()
    {
        return $this->recruiters;
    }

    /**
     * @param UserSummaryModel[] $recruiters
     *
     * @return self
     */
    public function setRecruiters(array $recruiters = null)
    {
        $this->recruiters = $recruiters;

        return $this;
    }

    /**
     * @return RequisitionLinks
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param RequisitionLinks $links
     *
     * @return self
     */
    public function setLinks(RequisitionLinks $links = null)
    {
        $this->links = $links;

        return $this;
    }
}
