<?php

namespace Varspool\JobAdder\V2\Model;

class RequisitionSummaryModel
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
}
