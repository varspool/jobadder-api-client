<?php

namespace Varspool\JobAdder\V2\Model;

class NoteTypeListRepresentation
{
    /**
     * @var NoteTypeModel[]
     */
    protected $items;

    /**
     * @return NoteTypeModel[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param NoteTypeModel[] $items
     *
     * @return self
     */
    public function setItems(array $items = null)
    {
        $this->items = $items;

        return $this;
    }
}
