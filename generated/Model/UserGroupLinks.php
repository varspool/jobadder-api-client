<?php

namespace Varspool\JobAdder\V2\Model;

class UserGroupLinks
{
    /**
     * @var string
     */
    protected $self;
    /**
     * @var string
     */
    protected $users;

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
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param string $users
     *
     * @return self
     */
    public function setUsers($users = null)
    {
        $this->users = $users;

        return $this;
    }
}
