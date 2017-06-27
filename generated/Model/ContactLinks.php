<?php

namespace Varspool\JobAdder\V2\Model;

class ContactLinks
{
    /**
     * @var string
     */
    protected $self;
    /**
     * @var string
     */
    protected $photo;
    /**
     * @var string
     */
    protected $company;
    /**
     * @var string
     */
    protected $officeAddress;
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
    protected $floats;
    /**
     * @var string
     */
    protected $submissions;

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
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     *
     * @return self
     */
    public function setPhoto($photo = null)
    {
        $this->photo = $photo;

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
    public function getOfficeAddress()
    {
        return $this->officeAddress;
    }

    /**
     * @param string $officeAddress
     *
     * @return self
     */
    public function setOfficeAddress($officeAddress = null)
    {
        $this->officeAddress = $officeAddress;

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
}
