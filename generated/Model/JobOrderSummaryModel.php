<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderSummaryModel
{
    /**
     * @var int
     */
    protected $jobId;
    /**
     * @var string
     */
    protected $jobTitle;
    /**
     * @var CompanyNameModel
     */
    protected $company;
    /**
     * @var ContactNameModel
     */
    protected $contact;

    /**
     * @return int
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * @param int $jobId
     *
     * @return self
     */
    public function setJobId($jobId = null)
    {
        $this->jobId = $jobId;

        return $this;
    }

    /**
     * @return string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param string $jobTitle
     *
     * @return self
     */
    public function setJobTitle($jobTitle = null)
    {
        $this->jobTitle = $jobTitle;

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
     * @return ContactNameModel
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param ContactNameModel $contact
     *
     * @return self
     */
    public function setContact(ContactNameModel $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }
}
