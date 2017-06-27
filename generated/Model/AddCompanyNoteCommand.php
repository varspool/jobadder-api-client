<?php

namespace Varspool\JobAdder\V2\Model;

class AddCompanyNoteCommand
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $text;
    /**
     * @var int[]
     */
    protected $contactId;

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
     * @return int[]
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * @param int[] $contactId
     *
     * @return self
     */
    public function setContactId(array $contactId = null)
    {
        $this->contactId = $contactId;

        return $this;
    }
}
