<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitLocationModel
{
    /**
     * @var int
     */
    protected $locationId;
    /**
     * @var int
     */
    protected $areaId;

    /**
     * @return int
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * @param int $locationId
     *
     * @return self
     */
    public function setLocationId($locationId = null)
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * @return int
     */
    public function getAreaId()
    {
        return $this->areaId;
    }

    /**
     * @param int $areaId
     *
     * @return self
     */
    public function setAreaId($areaId = null)
    {
        $this->areaId = $areaId;

        return $this;
    }
}
