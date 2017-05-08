<?php

namespace Varspool\JobAdder\V2\Model;

class JobApplicationSummaryModel
{
    /**
     * @var int
     */
    protected $applicationId;
    /**
     * @var string
     */
    protected $jobTitle;
    /**
     * @var string
     */
    protected $jobReference;
    /**
     * @var bool
     */
    protected $manual;
    /**
     * @var string
     */
    protected $source;
    /**
     * @var JobApplicationStatusModel
     */
    protected $status;
    /**
     * @var CandidateSummaryModel
     */
    protected $candidate;
    /**
     * @var JobOrderSummaryModel
     */
    protected $job;
    /**
     * @var JobAdSummaryModel
     */
    protected $jobAd;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * @return int
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * @param int $applicationId
     *
     * @return self
     */
    public function setApplicationId($applicationId = null)
    {
        $this->applicationId = $applicationId;

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
    public function getJobReference()
    {
        return $this->jobReference;
    }

    /**
     * @param string $jobReference
     *
     * @return self
     */
    public function setJobReference($jobReference = null)
    {
        $this->jobReference = $jobReference;

        return $this;
    }

    /**
     * @return bool
     */
    public function getManual()
    {
        return $this->manual;
    }

    /**
     * @param bool $manual
     *
     * @return self
     */
    public function setManual($manual = null)
    {
        $this->manual = $manual;

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
     * @return JobApplicationStatusModel
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param JobApplicationStatusModel $status
     *
     * @return self
     */
    public function setStatus(JobApplicationStatusModel $status = null)
    {
        $this->status = $status;

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
     * @return JobAdSummaryModel
     */
    public function getJobAd()
    {
        return $this->jobAd;
    }

    /**
     * @param JobAdSummaryModel $jobAd
     *
     * @return self
     */
    public function setJobAd(JobAdSummaryModel $jobAd = null)
    {
        $this->jobAd = $jobAd;

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
}
