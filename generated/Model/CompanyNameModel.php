<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyNameModel
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
}
