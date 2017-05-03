<?php

namespace Varspool\JobAdder\V2\Model;

class NoteRepresentation
{
    /**
     * @var string
     */
    protected $noteId;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $source;
    /**
     * @var string
     */
    protected $subject;
    /**
     * @var string
     */
    protected $text;
    /**
     * @var NoteAttachmentModel[]
     */
    protected $attachments;
    /**
     * @var JobOrderSummaryModel[]
     */
    protected $jobs;
    /**
     * @var RequisitionSummaryModel[]
     */
    protected $requisitions;
    /**
     * @var CandidateSummaryModel[]
     */
    protected $candidates;
    /**
     * @var JobApplicationSummaryModel[]
     */
    protected $jobApplications;
    /**
     * @var PlacementSummaryModel[]
     */
    protected $placements;
    /**
     * @var CompanySummaryModel[]
     */
    protected $companies;
    /**
     * @var ContactSummaryModel[]
     */
    protected $contacts;
    /**
     * @var UserSummaryModel
     */
    protected $createdBy;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var NoteLinks
     */
    protected $links;

    /**
     * @return string
     */
    public function getNoteId()
    {
        return $this->noteId;
    }

    /**
     * @param string $noteId
     *
     * @return self
     */
    public function setNoteId($noteId = null)
    {
        $this->noteId = $noteId;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     *
     * @return self
     */
    public function setSource($source = null)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     *
     * @return self
     */
    public function setSubject($subject = null)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return self
     */
    public function setText($text = null)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return NoteAttachmentModel[]
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param NoteAttachmentModel[] $attachments
     *
     * @return self
     */
    public function setAttachments(array $attachments = null)
    {
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * @return JobOrderSummaryModel[]
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * @param JobOrderSummaryModel[] $jobs
     *
     * @return self
     */
    public function setJobs(array $jobs = null)
    {
        $this->jobs = $jobs;

        return $this;
    }

    /**
     * @return RequisitionSummaryModel[]
     */
    public function getRequisitions()
    {
        return $this->requisitions;
    }

    /**
     * @param RequisitionSummaryModel[] $requisitions
     *
     * @return self
     */
    public function setRequisitions(array $requisitions = null)
    {
        $this->requisitions = $requisitions;

        return $this;
    }

    /**
     * @return CandidateSummaryModel[]
     */
    public function getCandidates()
    {
        return $this->candidates;
    }

    /**
     * @param CandidateSummaryModel[] $candidates
     *
     * @return self
     */
    public function setCandidates(array $candidates = null)
    {
        $this->candidates = $candidates;

        return $this;
    }

    /**
     * @return JobApplicationSummaryModel[]
     */
    public function getJobApplications()
    {
        return $this->jobApplications;
    }

    /**
     * @param JobApplicationSummaryModel[] $jobApplications
     *
     * @return self
     */
    public function setJobApplications(array $jobApplications = null)
    {
        $this->jobApplications = $jobApplications;

        return $this;
    }

    /**
     * @return PlacementSummaryModel[]
     */
    public function getPlacements()
    {
        return $this->placements;
    }

    /**
     * @param PlacementSummaryModel[] $placements
     *
     * @return self
     */
    public function setPlacements(array $placements = null)
    {
        $this->placements = $placements;

        return $this;
    }

    /**
     * @return CompanySummaryModel[]
     */
    public function getCompanies()
    {
        return $this->companies;
    }

    /**
     * @param CompanySummaryModel[] $companies
     *
     * @return self
     */
    public function setCompanies(array $companies = null)
    {
        $this->companies = $companies;

        return $this;
    }

    /**
     * @return ContactSummaryModel[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param ContactSummaryModel[] $contacts
     *
     * @return self
     */
    public function setContacts(array $contacts = null)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * @return UserSummaryModel
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param UserSummaryModel $createdBy
     *
     * @return self
     */
    public function setCreatedBy(UserSummaryModel $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return NoteLinks
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param NoteLinks $links
     *
     * @return self
     */
    public function setLinks(NoteLinks $links = null)
    {
        $this->links = $links;

        return $this;
    }
}
