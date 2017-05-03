<?php

namespace Varspool\JobAdder\V2\Model;

class LocationModel
{
    /**
     * @var int
     */
    protected $locationId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var LocationAreaModel[]
     */
    protected $areas;

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
     * @return LocationAreaModel[]
     */
    public function getAreas()
    {
        return $this->areas;
    }

    /**
     * @param LocationAreaModel[] $areas
     *
     * @return self
     */
    public function setAreas(array $areas = null)
    {
        $this->areas = $areas;

        return $this;
    }
}
