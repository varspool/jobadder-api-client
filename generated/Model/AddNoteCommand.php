<?php

namespace Varspool\JobAdder\V2\Model;

class AddNoteCommand
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $text;
    /**
     * @var int[]
     */
    protected $jobId;
    /**
     * @var int[]
     */
    protected $requisitionId;
    /**
     * @var int[]
     */
    protected $candidateId;
    /**
     * @var int[]
     */
    protected $applicationId;
    /**
     * @var int[]
     */
    protected $placementId;
    /**
     * @var int[]
     */
    protected $companyId;
    /**
     * @var int[]
     */
    protected $contactId;

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
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return self
     */
    public function setText($text = null)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * @param int[] $jobId
     *
     * @return self
     */
    public function setJobId(array $jobId = null)
    {
        $this->jobId = $jobId;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getRequisitionId()
    {
        return $this->requisitionId;
    }

    /**
     * @param int[] $requisitionId
     *
     * @return self
     */
    public function setRequisitionId(array $requisitionId = null)
    {
        $this->requisitionId = $requisitionId;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getCandidateId()
    {
        return $this->candidateId;
    }

    /**
     * @param int[] $candidateId
     *
     * @return self
     */
    public function setCandidateId(array $candidateId = null)
    {
        $this->candidateId = $candidateId;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * @param int[] $applicationId
     *
     * @return self
     */
    public function setApplicationId(array $applicationId = null)
    {
        $this->applicationId = $applicationId;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getPlacementId()
    {
        return $this->placementId;
    }

    /**
     * @param int[] $placementId
     *
     * @return self
     */
    public function setPlacementId(array $placementId = null)
    {
        $this->placementId = $placementId;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param int[] $companyId
     *
     * @return self
     */
    public function setCompanyId(array $companyId = null)
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * @param int[] $contactId
     *
     * @return self
     */
    public function setContactId(array $contactId = null)
    {
        $this->contactId = $contactId;

        return $this;
    }
}
