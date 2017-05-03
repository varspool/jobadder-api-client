<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderRepresentation
{
    /**
     * @var int
     */
    protected $jobId;
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
    protected $contact;
    /**
     * @var StatusModel
     */
    protected $status;
    /**
     * @var string
     */
    protected $source;
    /**
     * @var string
     */
    protected $jobDescription;
    /**
     * @var int
     */
    protected $numberOfJobs;
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
     * @var JobOrderFeeModel
     */
    protected $fee;
    /**
     * @var UserSummaryModel
     */
    protected $owner;
    /**
     * @var UserSummaryModel[]
     */
    protected $recruiters;
    /**
     * @var UserSummaryModel
     */
    protected $createdBy;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var UserSummaryModel
     */
    protected $updatedBy;
    /**
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * @var JobOrderLinks
     */
    protected $links;

    /**
     * @return int
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * @param int $jobId
     *
     * @return self
     */
    public function setJobId($jobId = null)
    {
        $this->jobId = $jobId;

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
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param ContactNameModel $contact
     *
     * @return self
     */
    public function setContact(ContactNameModel $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return StatusModel
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param StatusModel $status
     *
     * @return self
     */
    public function setStatus(StatusModel $status = null)
    {
        $this->status = $status;

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
     * @return JobOrderFeeModel
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @param JobOrderFeeModel $fee
     *
     * @return self
     */
    public function setFee(JobOrderFeeModel $fee = null)
    {
        $this->fee = $fee;

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
     * @return UserSummaryModel
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param UserSummaryModel $createdBy
     *
     * @return self
     */
    public function setCreatedBy(UserSummaryModel $createdBy = null)
    {
        $this->createdBy = $createdBy;

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
     * @return UserSummaryModel
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * @param UserSummaryModel $updatedBy
     *
     * @return self
     */
    public function setUpdatedBy(UserSummaryModel $updatedBy = null)
    {
        $this->updatedBy = $updatedBy;

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
     * @return JobOrderLinks
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param JobOrderLinks $links
     *
     * @return self
     */
    public function setLinks(JobOrderLinks $links = null)
    {
        $this->links = $links;

        return $this;
    }
}
