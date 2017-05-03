<?php

namespace Varspool\JobAdder\V2\Model;

class StatusListRepresentation
{
    /**
     * @var StatusModel[]
     */
    protected $items;
    /**
     * @var ModelLinks
     */
    protected $links;

    /**
     * @return StatusModel[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param StatusModel[] $items
     *
     * @return self
     */
    public function setItems(array $items = null)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return ModelLinks
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param ModelLinks $links
     *
     * @return self
     */
    public function setLinks(ModelLinks $links = null)
    {
        $this->links = $links;

        return $this;
    }
}
