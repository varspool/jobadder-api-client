<?php

namespace Varspool\JobAdder\V2\Model;

class StartModel
{
    /**
     * @var bool
     */
    protected $immediate;
    /**
     * @var RelativeStartModel
     */
    protected $relative;
    /**
     * @var string
     */
    protected $date;

    /**
     * @return bool
     */
    public function getImmediate()
    {
        return $this->immediate;
    }

    /**
     * @param bool $immediate
     *
     * @return self
     */
    public function setImmediate($immediate = null)
    {
        $this->immediate = $immediate;

        return $this;
    }

    /**
     * @return RelativeStartModel
     */
    public function getRelative()
    {
        return $this->relative;
    }

    /**
     * @param RelativeStartModel $relative
     *
     * @return self
     */
    public function setRelative(RelativeStartModel $relative = null)
    {
        $this->relative = $relative;

        return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     *
     * @return self
     */
    public function setDate($date = null)
    {
        $this->date = $date;

        return $this;
    }
}
