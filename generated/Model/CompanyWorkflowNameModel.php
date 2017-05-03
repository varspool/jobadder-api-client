<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyWorkflowNameModel
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
}
