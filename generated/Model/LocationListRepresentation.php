<?php

namespace Varspool\JobAdder\V2\Model;

class LocationListRepresentation
{
    /**
     * @var LocationModel[]
     */
    protected $items;

    /**
     * @return LocationModel[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param LocationModel[] $items
     *
     * @return self
     */
    public function setItems(array $items = null)
    {
        $this->items = $items;

        return $this;
    }
}
