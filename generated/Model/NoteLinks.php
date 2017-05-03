<?php

namespace Varspool\JobAdder\V2\Model;

class NoteLinks
{
    /**
     * @var string
     */
    protected $self;

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
}
