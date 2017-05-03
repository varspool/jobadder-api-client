<?php

namespace Varspool\JobAdder\V2\Model;

class ApproveRequisitionCommand
{
    /**
     * @var int
     */
    protected $approverId;
    /**
     * @var string
     */
    protected $portalUrl;

    /**
     * @return int
     */
    public function getApproverId()
    {
        return $this->approverId;
    }

    /**
     * @param int $approverId
     *
     * @return self
     */
    public function setApproverId($approverId = null)
    {
        $this->approverId = $approverId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPortalUrl()
    {
        return $this->portalUrl;
    }

    /**
     * @param string $portalUrl
     *
     * @return self
     */
    public function setPortalUrl($portalUrl = null)
    {
        $this->portalUrl = $portalUrl;

        return $this;
    }
}
