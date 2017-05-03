<?php

namespace Varspool\JobAdder\V2\Model;

class RequisitionLinks
{
    /**
     * @var string
     */
    protected $self;
    /**
     * @var string
     */
    protected $workflow;
    /**
     * @var string
     */
    protected $job;
    /**
     * @var string
     */
    protected $history;

    /**
     * @return string
     */
    public function getSelf()
    {
        return $this->self;
    }

    /**
     * @param string $self
     *
     * @return self
     */
    public function setSelf($self = null)
    {
        $this->self = $self;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkflow()
    {
        return $this->workflow;
    }

    /**
     * @param string $workflow
     *
     * @return self
     */
    public function setWorkflow($workflow = null)
    {
        $this->workflow = $workflow;

        return $this;
    }

    /**
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param string $job
     *
     * @return self
     */
    public function setJob($job = null)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * @return string
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * @param string $history
     *
     * @return self
     */
    public function setHistory($history = null)
    {
        $this->history = $history;

        return $this;
    }
}
