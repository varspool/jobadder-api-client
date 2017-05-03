<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitRequisitionCommand
{
    /**
     * @var string
     */
    protected $portalUrl;

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
