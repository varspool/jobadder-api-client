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
}
