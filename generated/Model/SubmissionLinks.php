<?php

namespace Varspool\JobAdder\V2\Model;

class SubmissionLinks
{
    /**
     * @var string
     */
    protected $self;
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
