<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateRepresentation
{
    /**
     * @var int
     */
    protected $candidateId;
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
    protected $otherEmail;
    /**
     * @var string[]
     */
    protected $social;
    /**
     * @var AddressModel
     */
    protected $address;
    /**
     * @var StatusModel
     */
    protected $status;
    /**
     * @var string
     */
    protected $rating;
    /**
     * @var string
     */
    protected $source;
    /**
     * @var EmploymentModel
     */
    protected $employment;
    /**
     * @var StartModel
     */
    protected $availability;
    /**
     * @var string[]
     */
    protected $skillTags;
    /**
     * @var EducationModel[]
     */
    protected $education;
    /**
     * @var CustomFieldValueModel[]
     */
    protected $custom;
    /**
     * @var UserSummaryModel[]
     */
    protected $recruiters;
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
     * @var CandidateLinks
     */
    protected $links;

    /**
     * @return int
     */
    public function getCandidateId()
    {
        return $this->candidateId;
    }

    /**
     * @param int $candidateId
     *
     * @return self
     */
    public function setCandidateId($candidateId = null)
    {
        $this->candidateId = $candidateId;

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
    public function getOtherEmail()
    {
        return $this->otherEmail;
    }

    /**
     * @param string[] $otherEmail
     *
     * @return self
     */
    public function setOtherEmail(array $otherEmail = null)
    {
        $this->otherEmail = $otherEmail;

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
     * @return AddressModel
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param AddressModel $address
     *
     * @return self
     */
    public function setAddress(AddressModel $address = null)
    {
        $this->address = $address;

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
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param string $rating
     *
     * @return self
     */
    public function setRating($rating = null)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     *
     * @return self
     */
    public function setSource($source = null)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return EmploymentModel
     */
    public function getEmployment()
    {
        return $this->employment;
    }

    /**
     * @param EmploymentModel $employment
     *
     * @return self
     */
    public function setEmployment(EmploymentModel $employment = null)
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
     * @return EducationModel[]
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * @param EducationModel[] $education
     *
     * @return self
     */
    public function setEducation(array $education = null)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * @return CustomFieldValueModel[]
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * @param CustomFieldValueModel[] $custom
     *
     * @return self
     */
    public function setCustom(array $custom = null)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return UserSummaryModel[]
     */
    public function getRecruiters()
    {
        return $this->recruiters;
    }

    /**
     * @param UserSummaryModel[] $recruiters
     *
     * @return self
     */
    public function setRecruiters(array $recruiters = null)
    {
        $this->recruiters = $recruiters;

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
     * @return CandidateLinks
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param CandidateLinks $links
     *
     * @return self
     */
    public function setLinks(CandidateLinks $links = null)
    {
        $this->links = $links;

        return $this;
    }
}
