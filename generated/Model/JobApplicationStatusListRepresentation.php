<?php

namespace Varspool\JobAdder\V2\Model;

class JobApplicationStatusListRepresentation
{
    /**
     * @var JobApplicationStatusModel[]
     */
    protected $items;

    /**
     * @return JobApplicationStatusModel[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param JobApplicationStatusModel[] $items
     *
     * @return self
     */
    public function setItems(array $items = null)
    {
        $this->items = $items;

        return $this;
    }
}
