<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementRepresentation
{
    /**
     * @var int
     */
    protected $placementId;
    /**
     * @var bool
     */
    protected $approved;
    /**
     * @var \DateTime
     */
    protected $approvedAt;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $jobTitle;
    /**
     * @var JobOrderSummaryModel
     */
    protected $job;
    /**
     * @var CandidateSummaryModel
     */
    protected $candidate;
    /**
     * @var StatusModel
     */
    protected $status;
    /**
     * @var string
     */
    protected $startDate;
    /**
     * @var string
     */
    protected $endDate;
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
     * @var CompanySummaryModel
     */
    protected $company;
    /**
     * @var ContactSummaryModel
     */
    protected $contact;
    /**
     * @var PlacementSourceModel
     */
    protected $source;
    /**
     * @var CompanyAddressModel
     */
    protected $workplaceAddress;
    /**
     * @var string
     */
    protected $paymentType;
    /**
     * @var PlacementSalaryModel
     */
    protected $salary;
    /**
     * @var PlacementContractRateModel
     */
    protected $contractRate;
    /**
     * @var string
     */
    protected $award;
    /**
     * @var string
     */
    protected $industryCode;
    /**
     * @var string
     */
    protected $feeSplit;
    /**
     * @var PlacementBillingModel
     */
    protected $billing;
    /**
     * @var PlacementExportModel
     */
    protected $export;
    /**
     * @var UserSummaryModel
     */
    protected $owner;
    /**
     * @var PlacementRecruiterModel[]
     */
    protected $recruiters;
    /**
     * @var PlacementLinks
     */
    protected $links;

    /**
     * @return int
     */
    public function getPlacementId()
    {
        return $this->placementId;
    }

    /**
     * @param int $placementId
     *
     * @return self
     */
    public function setPlacementId($placementId = null)
    {
        $this->placementId = $placementId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * @param bool $approved
     *
     * @return self
     */
    public function setApproved($approved = null)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getApprovedAt()
    {
        return $this->approvedAt;
    }

    /**
     * @param \DateTime $approvedAt
     *
     * @return self
     */
    public function setApprovedAt(\DateTime $approvedAt = null)
    {
        $this->approvedAt = $approvedAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;

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
     * @return JobOrderSummaryModel
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param JobOrderSummaryModel $job
     *
     * @return self
     */
    public function setJob(JobOrderSummaryModel $job = null)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * @return CandidateSummaryModel
     */
    public function getCandidate()
    {
        return $this->candidate;
    }

    /**
     * @param CandidateSummaryModel $candidate
     *
     * @return self
     */
    public function setCandidate(CandidateSummaryModel $candidate = null)
    {
        $this->candidate = $candidate;

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
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     *
     * @return self
     */
    public function setStartDate($startDate = null)
    {
        $this->startDate = $startDate;

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
     * @return CompanySummaryModel
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param CompanySummaryModel $company
     *
     * @return self
     */
    public function setCompany(CompanySummaryModel $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return ContactSummaryModel
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param ContactSummaryModel $contact
     *
     * @return self
     */
    public function setContact(ContactSummaryModel $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return PlacementSourceModel
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param PlacementSourceModel $source
     *
     * @return self
     */
    public function setSource(PlacementSourceModel $source = null)
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
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param string $paymentType
     *
     * @return self
     */
    public function setPaymentType($paymentType = null)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * @return PlacementSalaryModel
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param PlacementSalaryModel $salary
     *
     * @return self
     */
    public function setSalary(PlacementSalaryModel $salary = null)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * @return PlacementContractRateModel
     */
    public function getContractRate()
    {
        return $this->contractRate;
    }

    /**
     * @param PlacementContractRateModel $contractRate
     *
     * @return self
     */
    public function setContractRate(PlacementContractRateModel $contractRate = null)
    {
        $this->contractRate = $contractRate;

        return $this;
    }

    /**
     * @return string
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * @param string $award
     *
     * @return self
     */
    public function setAward($award = null)
    {
        $this->award = $award;

        return $this;
    }

    /**
     * @return string
     */
    public function getIndustryCode()
    {
        return $this->industryCode;
    }

    /**
     * @param string $industryCode
     *
     * @return self
     */
    public function setIndustryCode($industryCode = null)
    {
        $this->industryCode = $industryCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getFeeSplit()
    {
        return $this->feeSplit;
    }

    /**
     * @param string $feeSplit
     *
     * @return self
     */
    public function setFeeSplit($feeSplit = null)
    {
        $this->feeSplit = $feeSplit;

        return $this;
    }

    /**
     * @return PlacementBillingModel
     */
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * @param PlacementBillingModel $billing
     *
     * @return self
     */
    public function setBilling(PlacementBillingModel $billing = null)
    {
        $this->billing = $billing;

        return $this;
    }

    /**
     * @return PlacementExportModel
     */
    public function getExport()
    {
        return $this->export;
    }

    /**
     * @param PlacementExportModel $export
     *
     * @return self
     */
    public function setExport(PlacementExportModel $export = null)
    {
        $this->export = $export;

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
     * @return PlacementRecruiterModel[]
     */
    public function getRecruiters()
    {
        return $this->recruiters;
    }

    /**
     * @param PlacementRecruiterModel[] $recruiters
     *
     * @return self
     */
    public function setRecruiters(array $recruiters = null)
    {
        $this->recruiters = $recruiters;

        return $this;
    }

    /**
     * @return PlacementLinks
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param PlacementLinks $links
     *
     * @return self
     */
    public function setLinks(PlacementLinks $links = null)
    {
        $this->links = $links;

        return $this;
    }
}
