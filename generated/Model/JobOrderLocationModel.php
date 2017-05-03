<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderLocationModel
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
     * @var JobOrderLocationAreaModel
     */
    protected $area;

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
     * @return JobOrderLocationAreaModel
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param JobOrderLocationAreaModel $area
     *
     * @return self
     */
    public function setArea(JobOrderLocationAreaModel $area = null)
    {
        $this->area = $area;

        return $this;
    }
}
