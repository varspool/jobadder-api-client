<?php

namespace Varspool\JobAdder\V2\Model;

class NoteSummaryModel
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
    protected $textPartial;
    /**
     * @var UserSummaryModel
     */
    protected $createdBy;
    /**
     * @var \DateTime
     */
    protected $createdAt;

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
    public function getTextPartial()
    {
        return $this->textPartial;
    }

    /**
     * @param string $textPartial
     *
     * @return self
     */
    public function setTextPartial($textPartial = null)
    {
        $this->textPartial = $textPartial;

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
}
