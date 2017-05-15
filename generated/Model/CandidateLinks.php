<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateLinks
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
    protected $contact;
    /**
     * @var string
     */
    protected $notes;
    /**
     * @var string
     */
    protected $attachments;
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
    protected $applications;
    /**
     * @var string
     */
    protected $placements;

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
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param string $attachments
     *
     * @return self
     */
    public function setAttachments($attachments = null)
    {
        $this->attachments = $attachments;

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
}
