<?php

namespace Varspool\JobAdder\V2\Model;

class SubmissionSummaryModel
{
    /**
     * @var int
     */
    protected $submissionId;
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
     * @var JobOrderSummaryModel
     */
    protected $job;

    /**
     * @return int
     */
    public function getSubmissionId()
    {
        return $this->submissionId;
    }

    /**
     * @param int $submissionId
     *
     * @return self
     */
    public function setSubmissionId($submissionId = null)
    {
        $this->submissionId = $submissionId;

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
}
