<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderLocationAreaModel
{
    /**
     * @var int
     */
    protected $areaId;
    /**
     * @var string
     */
    protected $name;

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
