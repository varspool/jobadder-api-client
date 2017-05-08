<?php

namespace Varspool\JobAdder\V2\Model;

class FloatSummaryModel
{
    /**
     * @var int
     */
    protected $floatId;
    /**
     * @var string
     */
    protected $jobTitle;
    /**
     * @var CandidateSummaryModel
     */
    protected $candidate;
    /**
     * @var CompanySummaryModel
     */
    protected $company;
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
    public function getFloatId()
    {
        return $this->floatId;
    }

    /**
     * @param int $floatId
     *
     * @return self
     */
    public function setFloatId($floatId = null)
    {
        $this->floatId = $floatId;

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
