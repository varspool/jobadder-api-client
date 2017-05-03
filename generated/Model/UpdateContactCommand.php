<?php

namespace Varspool\JobAdder\V2\Model;

class UpdateContactCommand
{
    /**
     * @var string
     */
    protected $firstName;
    /**
     * @var string
     */
    protected $lastName;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $phone;
    /**
     * @var string
     */
    protected $mobile;
    /**
     * @var string
     */
    protected $position;
    /**
     * @var int
     */
    protected $companyId;
    /**
     * @var int
     */
    protected $reportsToContactId;
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
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName($firstName = null)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName($lastName = null)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return self
     */
    public function setPhone($phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     *
     * @return self
     */
    public function setMobile($mobile = null)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $position
     *
     * @return self
     */
    public function setPosition($position = null)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     *
     * @return self
     */
    public function setCompanyId($companyId = null)
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * @return int
     */
    public function getReportsToContactId()
    {
        return $this->reportsToContactId;
    }

    /**
     * @param int $reportsToContactId
     *
     * @return self
     */
    public function setReportsToContactId($reportsToContactId = null)
    {
        $this->reportsToContactId = $reportsToContactId;

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
