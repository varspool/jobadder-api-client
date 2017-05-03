<?php

namespace Varspool\JobAdder\V2\Model;

class StandardFieldListRepresentation
{
    /**
     * @var StandardFieldModel[]
     */
    protected $items;
    /**
     * @var ModelLinks
     */
    protected $links;

    /**
     * @return StandardFieldModel[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param StandardFieldModel[] $items
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
