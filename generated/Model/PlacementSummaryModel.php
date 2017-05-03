<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementSummaryModel
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
}
