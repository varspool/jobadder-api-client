<?php

namespace Varspool\JobAdder\V2\Model;

class WorkTypeListRepresentation
{
    /**
     * @var WorkTypeModel[]
     */
    protected $items;

    /**
     * @return WorkTypeModel[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param WorkTypeModel[] $items
     *
     * @return self
     */
    public function setItems(array $items = null)
    {
        $this->items = $items;

        return $this;
    }
}
