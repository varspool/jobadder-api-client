<?php

namespace Varspool\JobAdder\V2\Model;

class UserLinks
{
    /**
     * @var string
     */
    protected $self;
    /**
     * @var string
     */
    protected $userGroups;

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
    public function getUserGroups()
    {
        return $this->userGroups;
    }

    /**
     * @param string $userGroups
     *
     * @return self
     */
    public function setUserGroups($userGroups = null)
    {
        $this->userGroups = $userGroups;

        return $this;
    }
}
