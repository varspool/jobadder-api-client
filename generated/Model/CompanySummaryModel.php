<?php

namespace Varspool\JobAdder\V2\Model;

class CompanySummaryModel
{
    /**
     * @var int
     */
    protected $companyId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var ContactNameModel
     */
    protected $mainContact;

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
     * @return ContactNameModel
     */
    public function getMainContact()
    {
        return $this->mainContact;
    }

    /**
     * @param ContactNameModel $mainContact
     *
     * @return self
     */
    public function setMainContact(ContactNameModel $mainContact = null)
    {
        $this->mainContact = $mainContact;

        return $this;
    }
}
