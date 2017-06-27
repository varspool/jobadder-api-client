<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyLinks
{
    /**
     * @var string
     */
    protected $self;
    /**
     * @var string
     */
    protected $logo;
    /**
     * @var string
     */
    protected $contacts;
    /**
     * @var string
     */
    protected $subsidiaries;
    /**
     * @var string
     */
    protected $addresses;
    /**
     * @var string
     */
    protected $skills;
    /**
     * @var string
     */
    protected $notes;
    /**
     * @var string
     */
    protected $jobs;
    /**
     * @var string
     */
    protected $requisitions;
    /**
     * @var string
     */
    protected $floats;
    /**
     * @var string
     */
    protected $submissions;
    /**
     * @var string
     */
    protected $placements;
    /**
     * @var CompanyWorkflowLinks
     */
    protected $workflows;

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
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     *
     * @return self
     */
    public function setLogo($logo = null)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * @return string
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param string $contacts
     *
     * @return self
     */
    public function setContacts($contacts = null)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubsidiaries()
    {
        return $this->subsidiaries;
    }

    /**
     * @param string $subsidiaries
     *
     * @return self
     */
    public function setSubsidiaries($subsidiaries = null)
    {
        $this->subsidiaries = $subsidiaries;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param string $addresses
     *
     * @return self
     */
    public function setAddresses($addresses = null)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * @return string
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param string $skills
     *
     * @return self
     */
    public function setSkills($skills = null)
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     *
     * @return self
     */
    public function setNotes($notes = null)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * @return string
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * @param string $jobs
     *
     * @return self
     */
    public function setJobs($jobs = null)
    {
        $this->jobs = $jobs;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequisitions()
    {
        return $this->requisitions;
    }

    /**
     * @param string $requisitions
     *
     * @return self
     */
    public function setRequisitions($requisitions = null)
    {
        $this->requisitions = $requisitions;

        return $this;
    }

    /**
     * @return string
     */
    public function getFloats()
    {
        return $this->floats;
    }

    /**
     * @param string $floats
     *
     * @return self
     */
    public function setFloats($floats = null)
    {
        $this->floats = $floats;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubmissions()
    {
        return $this->submissions;
    }

    /**
     * @param string $submissions
     *
     * @return self
     */
    public function setSubmissions($submissions = null)
    {
        $this->submissions = $submissions;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlacements()
    {
        return $this->placements;
    }

    /**
     * @param string $placements
     *
     * @return self
     */
    public function setPlacements($placements = null)
    {
        $this->placements = $placements;

        return $this;
    }

    /**
     * @return CompanyWorkflowLinks
     */
    public function getWorkflows()
    {
        return $this->workflows;
    }

    /**
     * @param CompanyWorkflowLinks $workflows
     *
     * @return self
     */
    public function setWorkflows(CompanyWorkflowLinks $workflows = null)
    {
        $this->workflows = $workflows;

        return $this;
    }
}
