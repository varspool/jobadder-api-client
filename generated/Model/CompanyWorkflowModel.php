<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyWorkflowModel
{
    /**
     * @var int
     */
    protected $workflowId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var CompanyWorkflowApproverModel[]
     */
    protected $approvers;

    /**
     * @return int
     */
    public function getWorkflowId()
    {
        return $this->workflowId;
    }

    /**
     * @param int $workflowId
     *
     * @return self
     */
    public function setWorkflowId($workflowId = null)
    {
        $this->workflowId = $workflowId;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return CompanyWorkflowApproverModel[]
     */
    public function getApprovers()
    {
        return $this->approvers;
    }

    /**
     * @param CompanyWorkflowApproverModel[] $approvers
     *
     * @return self
     */
    public function setApprovers(array $approvers = null)
    {
        $this->approvers = $approvers;

        return $this;
    }
}
