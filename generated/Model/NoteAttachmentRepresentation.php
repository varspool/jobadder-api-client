<?php

namespace Varspool\JobAdder\V2\Model;

class NoteAttachmentRepresentation
{
    /**
     * @var string
     */
    protected $fileName;
    /**
     * @var string
     */
    protected $fileType;
    /**
     * @var UserSummaryModel
     */
    protected $createdBy;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var NoteAttachentLinks
     */
    protected $links;

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName($fileName = null)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * @param string $fileType
     *
     * @return self
     */
    public function setFileType($fileType = null)
    {
        $this->fileType = $fileType;

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
     * @return NoteAttachentLinks
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param NoteAttachentLinks $links
     *
     * @return self
     */
    public function setLinks(NoteAttachentLinks $links = null)
    {
        $this->links = $links;

        return $this;
    }
}
