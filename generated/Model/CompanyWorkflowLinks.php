<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyWorkflowLinks
{
    /**
     * @var string
     */
    protected $requisition;

    /**
     * @return string
     */
    public function getRequisition()
    {
        return $this->requisition;
    }

    /**
     * @param string $requisition
     *
     * @return self
     */
    public function setRequisition($requisition = null)
    {
        $this->requisition = $requisition;

        return $this;
    }
}
