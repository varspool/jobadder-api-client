<?php

namespace Varspool\JobAdder\V2\Model;

class JobAdLinks
{
    /**
     * @var string
     */
    protected $self;
    /**
     * @var string
     */
    protected $job;
    /**
     * @var string
     */
    protected $company;
    /**
     * @var string
     */
    protected $contact;
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
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     *
     * @return self
     */
    public function setCompany($company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param string $contact
     *
     * @return self
     */
    public function setContact($contact = null)
    {
        $this->contact = $contact;

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
