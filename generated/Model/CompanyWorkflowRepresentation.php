<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyWorkflowRepresentation
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
     * @var ModelLinks
     */
    protected $links;

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

    /**
     * @return ModelLinks
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param ModelLinks $links
     *
     * @return self
     */
    public function setLinks(ModelLinks $links = null)
    {
        $this->links = $links;

        return $this;
    }
}
