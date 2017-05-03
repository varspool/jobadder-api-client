<?php

namespace Varspool\JobAdder\V2\Model;

class JobAdRepresentation
{
    /**
     * @var int
     */
    protected $adId;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $reference;
    /**
     * @var UserSummaryModel
     */
    protected $owner;
    /**
     * @var JobOrderSummaryModel
     */
    protected $job;
    /**
     * @var CompanySummaryModel
     */
    protected $company;
    /**
     * @var ContactSummaryModel
     */
    protected $contact;
    /**
     * @var UserSummaryModel
     */
    protected $createdBy;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var JobAdLinks
     */
    protected $links;
    /**
     * @var string
     */
    protected $summary;
    /**
     * @var string[]
     */
    protected $bulletPoints;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var \DateTime
     */
    protected $postAt;
    /**
     * @var \DateTime
     */
    protected $expireAt;

    /**
     * @return int
     */
    public function getAdId()
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     *
     * @return self
     */
    public function setAdId($adId = null)
    {
        $this->adId = $adId;

        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return self
     */
    public function setState($state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title = null)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     *
     * @return self
     */
    public function setReference($reference = null)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * @return UserSummaryModel
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param UserSummaryModel $owner
     *
     * @return self
     */
    public function setOwner(UserSummaryModel $owner = null)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return JobOrderSummaryModel
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param JobOrderSummaryModel $job
     *
     * @return self
     */
    public function setJob(JobOrderSummaryModel $job = null)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * @return CompanySummaryModel
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param CompanySummaryModel $company
     *
     * @return self
     */
    public function setCompany(CompanySummaryModel $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return ContactSummaryModel
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param ContactSummaryModel $contact
     *
     * @return self
     */
    public function setContact(ContactSummaryModel $contact = null)
    {
        $this->contact = $contact;

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
     * @return JobAdLinks
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param JobAdLinks $links
     *
     * @return self
     */
    public function setLinks(JobAdLinks $links = null)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     *
     * @return self
     */
    public function setSummary($summary = null)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getBulletPoints()
    {
        return $this->bulletPoints;
    }

    /**
     * @param string[] $bulletPoints
     *
     * @return self
     */
    public function setBulletPoints(array $bulletPoints = null)
    {
        $this->bulletPoints = $bulletPoints;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPostAt()
    {
        return $this->postAt;
    }

    /**
     * @param \DateTime $postAt
     *
     * @return self
     */
    public function setPostAt(\DateTime $postAt = null)
    {
        $this->postAt = $postAt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpireAt()
    {
        return $this->expireAt;
    }

    /**
     * @param \DateTime $expireAt
     *
     * @return self
     */
    public function setExpireAt(\DateTime $expireAt = null)
    {
        $this->expireAt = $expireAt;

        return $this;
    }
}
