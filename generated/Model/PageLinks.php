<?php

namespace Varspool\JobAdder\V2\Model;

class PageLinks
{
    /**
     * @var string
     */
    protected $first;
    /**
     * @var string
     */
    protected $prev;
    /**
     * @var string
     */
    protected $next;
    /**
     * @var string
     */
    protected $last;

    /**
     * @return string
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * @param string $first
     *
     * @return self
     */
    public function setFirst($first = null)
    {
        $this->first = $first;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrev()
    {
        return $this->prev;
    }

    /**
     * @param string $prev
     *
     * @return self
     */
    public function setPrev($prev = null)
    {
        $this->prev = $prev;

        return $this;
    }

    /**
     * @return string
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @param string $next
     *
     * @return self
     */
    public function setNext($next = null)
    {
        $this->next = $next;

        return $this;
    }

    /**
     * @return string
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * @param string $last
     *
     * @return self
     */
    public function setLast($last = null)
    {
        $this->last = $last;

        return $this;
    }
}
