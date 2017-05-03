<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementLinks
{
    /**
     * @var string
     */
    protected $self;
    /**
     * @var string
     */
    protected $extendsPlacement;
    /**
     * @var string
     */
    protected $application;

    /**
     * @return string
     */
    public function getSelf()
    {
        return $this->self;
    }

    /**
     * @param string $self
     *
     * @return self
     */
    public function setSelf($self = null)
    {
        $this->self = $self;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtendsPlacement()
    {
        return $this->extendsPlacement;
    }

    /**
     * @param string $extendsPlacement
     *
     * @return self
     */
    public function setExtendsPlacement($extendsPlacement = null)
    {
        $this->extendsPlacement = $extendsPlacement;

        return $this;
    }

    /**
     * @return string
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * @param string $application
     *
     * @return self
     */
    public function setApplication($application = null)
    {
        $this->application = $application;

        return $this;
    }
}
