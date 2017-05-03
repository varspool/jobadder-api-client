<?php

namespace Varspool\JobAdder\V2\Model;

class AddCompanyCommand
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $parentCompanyId;
    /**
     * @var SubmitCustomFieldValueModel[]
     */
    protected $customFields;
    /**
     * @var int
     */
    protected $ownerUserId;
    /**
     * @var int[]
     */
    protected $recruiterUserId;

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
     * @return int
     */
    public function getParentCompanyId()
    {
        return $this->parentCompanyId;
    }

    /**
     * @param int $parentCompanyId
     *
     * @return self
     */
    public function setParentCompanyId($parentCompanyId = null)
    {
        $this->parentCompanyId = $parentCompanyId;

        return $this;
    }

    /**
     * @return SubmitCustomFieldValueModel[]
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param SubmitCustomFieldValueModel[] $customFields
     *
     * @return self
     */
    public function setCustomFields(array $customFields = null)
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * @return int
     */
    public function getOwnerUserId()
    {
        return $this->ownerUserId;
    }

    /**
     * @param int $ownerUserId
     *
     * @return self
     */
    public function setOwnerUserId($ownerUserId = null)
    {
        $this->ownerUserId = $ownerUserId;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getRecruiterUserId()
    {
        return $this->recruiterUserId;
    }

    /**
     * @param int[] $recruiterUserId
     *
     * @return self
     */
    public function setRecruiterUserId(array $recruiterUserId = null)
    {
        $this->recruiterUserId = $recruiterUserId;

        return $this;
    }
}
