<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementSourceModel
{
    /**
     * @var string
     */
    protected $placement;
    /**
     * @var string
     */
    protected $candidate;

    /**
     * @return string
     */
    public function getPlacement()
    {
        return $this->placement;
    }

    /**
     * @param string $placement
     *
     * @return self
     */
    public function setPlacement($placement = null)
    {
        $this->placement = $placement;

        return $this;
    }

    /**
     * @return string
     */
    public function getCandidate()
    {
        return $this->candidate;
    }

    /**
     * @param string $candidate
     *
     * @return self
     */
    public function setCandidate($candidate = null)
    {
        $this->candidate = $candidate;

        return $this;
    }
}
