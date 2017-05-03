<?php

namespace Varspool\JobAdder\V2\Model;

class JobApplicationStatusRepresentation
{
    /**
     * @var int
     */
    protected $statusId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $active;
    /**
     * @var bool
     */
    protected $default;
    /**
     * @var JobApplicationWorkflowModel
     */
    protected $workflow;
    /**
     * @var JobApplicationStatusLinks
     */
    protected $links;

    /**
     * @return int
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * @param int $statusId
     *
     * @return self
     */
    public function setStatusId($statusId = null)
    {
        $this->statusId = $statusId;

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
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return self
     */
    public function setActive($active = null)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param bool $default
     *
     * @return self
     */
    public function setDefault($default = null)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @return JobApplicationWorkflowModel
     */
    public function getWorkflow()
    {
        return $this->workflow;
    }

    /**
     * @param JobApplicationWorkflowModel $workflow
     *
     * @return self
     */
    public function setWorkflow(JobApplicationWorkflowModel $workflow = null)
    {
        $this->workflow = $workflow;

        return $this;
    }

    /**
     * @return JobApplicationStatusLinks
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param JobApplicationStatusLinks $links
     *
     * @return self
     */
    public function setLinks(JobApplicationStatusLinks $links = null)
    {
        $this->links = $links;

        return $this;
    }
}
