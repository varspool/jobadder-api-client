<?php

namespace Varspool\JobAdder\V2\Model;

class UserGroupRepresentation
{
    /**
     * @var int
     */
    protected $groupId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var UserSummaryModel[]
     */
    protected $users;
    /**
     * @var UserGroupLinks
     */
    protected $links;

    /**
     * @return int
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * @param int $groupId
     *
     * @return self
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return UserSummaryModel[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param UserSummaryModel[] $users
     *
     * @return self
     */
    public function setUsers(array $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * @return UserGroupLinks
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param UserGroupLinks $links
     *
     * @return self
     */
    public function setLinks(UserGroupLinks $links = null)
    {
        $this->links = $links;

        return $this;
    }
}
