<?php

namespace Varspool\JobAdder\V2\Model;

class UpdateCandidateCommand
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
     * @var string[]
     */
    protected $social;
    /**
     * @var SubmitAddressModel
     */
    protected $address;
    /**
     * @var string[]
     */
    protected $skillTags;
    /**
     * @var SubmitEmploymentModel
     */
    protected $employment;
    /**
     * @var StartModel
     */
    protected $availability;
    /**
     * @var SubmitCustomFieldValueModel[]
     */
    protected $customFields;
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
     * @return string[]
     */
    public function getSocial()
    {
        return $this->social;
    }

    /**
     * @param string[] $social
     *
     * @return self
     */
    public function setSocial(\ArrayObject $social = null)
    {
        $this->social = $social;

        return $this;
    }

    /**
     * @return SubmitAddressModel
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param SubmitAddressModel $address
     *
     * @return self
     */
    public function setAddress(SubmitAddressModel $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getSkillTags()
    {
        return $this->skillTags;
    }

    /**
     * @param string[] $skillTags
     *
     * @return self
     */
    public function setSkillTags(array $skillTags = null)
    {
        $this->skillTags = $skillTags;

        return $this;
    }

    /**
     * @return SubmitEmploymentModel
     */
    public function getEmployment()
    {
        return $this->employment;
    }

    /**
     * @param SubmitEmploymentModel $employment
     *
     * @return self
     */
    public function setEmployment(SubmitEmploymentModel $employment = null)
    {
        $this->employment = $employment;

        return $this;
    }

    /**
     * @return StartModel
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * @param StartModel $availability
     *
     * @return self
     */
    public function setAvailability(StartModel $availability = null)
    {
        $this->availability = $availability;

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
