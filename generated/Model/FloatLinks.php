<?php

namespace Varspool\JobAdder\V2\Model;

class FloatLinks
{
    /**
     * @var string
     */
    protected $self;
    /**
     * @var string
     */
    protected $contacts;
    /**
     * @var string
     */
    protected $notes;

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
}
