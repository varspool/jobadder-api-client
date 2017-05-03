<?php

namespace Varspool\JobAdder\V2\Model;

class RejectRequisitionCommand
{
    /**
     * @var int
     */
    protected $approverId;
    /**
     * @var string
     */
    protected $reason;
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
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     *
     * @return self
     */
    public function setReason($reason = null)
    {
        $this->reason = $reason;

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
