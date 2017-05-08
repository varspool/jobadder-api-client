<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyWorkflowApproverModel
{
    /**
     * @var int
     */
    protected $contactId;
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
    protected $position;
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
     * @var StatusModel
     */
    protected $status;
    /**
     * @var UserSummaryModel
     */
    protected $createdBy;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var UserSummaryModel
     */
    protected $updatedBy;
    /**
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * @var CompanyNameModel
     */
    protected $company;
    /**
     * @var int
     */
    protected $stageIndex;

    /**
     * @return int
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * @param int $contactId
     *
     * @return self
     */
    public function setContactId($contactId = null)
    {
        $this->contactId = $contactId;

        return $this;
    }

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
     * @return StatusModel
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param StatusModel $status
     *
     * @return self
     */
    public function setStatus(StatusModel $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return UserSummaryModel
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param UserSummaryModel $createdBy
     *
     * @return self
     */
    public function setCreatedBy(UserSummaryModel $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return UserSummaryModel
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * @param UserSummaryModel $updatedBy
     *
     * @return self
     */
    public function setUpdatedBy(UserSummaryModel $updatedBy = null)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return CompanyNameModel
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param CompanyNameModel $company
     *
     * @return self
     */
    public function setCompany(CompanyNameModel $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return int
     */
    public function getStageIndex()
    {
        return $this->stageIndex;
    }

    /**
     * @param int $stageIndex
     *
     * @return self
     */
    public function setStageIndex($stageIndex = null)
    {
        $this->stageIndex = $stageIndex;

        return $this;
    }
}
