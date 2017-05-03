<?php

namespace Varspool\JobAdder\V2\Model;

class WorkTypeModel
{
    /**
     * @var int
     */
    protected $workTypeId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $ratePer;

    /**
     * @return int
     */
    public function getWorkTypeId()
    {
        return $this->workTypeId;
    }

    /**
     * @param int $workTypeId
     *
     * @return self
     */
    public function setWorkTypeId($workTypeId = null)
    {
        $this->workTypeId = $workTypeId;

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
     * @return string
     */
    public function getRatePer()
    {
        return $this->ratePer;
    }

    /**
     * @param string $ratePer
     *
     * @return self
     */
    public function setRatePer($ratePer = null)
    {
        $this->ratePer = $ratePer;

        return $this;
    }
}
