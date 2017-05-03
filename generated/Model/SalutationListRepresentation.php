<?php

namespace Varspool\JobAdder\V2\Model;

class SalutationListRepresentation
{
    /**
     * @var NameModel[]
     */
    protected $items;

    /**
     * @return NameModel[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param NameModel[] $items
     *
     * @return self
     */
    public function setItems(array $items = null)
    {
        $this->items = $items;

        return $this;
    }
}
