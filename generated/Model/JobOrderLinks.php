<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderLinks
{
    /**
     * @var string
     */
    protected $self;
    /**
     * @var string
     */
    protected $applications;

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
    public function getApplications()
    {
        return $this->applications;
    }

    /**
     * @param string $applications
     *
     * @return self
     */
    public function setApplications($applications = null)
    {
        $this->applications = $applications;

        return $this;
    }
}
