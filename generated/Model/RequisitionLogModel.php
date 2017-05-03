<?php

namespace Varspool\JobAdder\V2\Model;

class RequisitionLogModel
{
    /**
     * @var ContactSummaryModel
     */
    protected $contact;
    /**
     * @var string
     */
    protected $oldStatus;
    /**
     * @var string
     */
    protected $newStatus;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var \DateTime
     */
    protected $updatedAt;

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
     * @return string
     */
    public function getOldStatus()
    {
        return $this->oldStatus;
    }

    /**
     * @param string $oldStatus
     *
     * @return self
     */
    public function setOldStatus($oldStatus = null)
    {
        $this->oldStatus = $oldStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getNewStatus()
    {
        return $this->newStatus;
    }

    /**
     * @param string $newStatus
     *
     * @return self
     */
    public function setNewStatus($newStatus = null)
    {
        $this->newStatus = $newStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage($message = null)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
