<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderSummaryModel
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
}
