<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateVideoListRepresentation
{
    /**
     * @var CandidateVideoModel[]
     */
    protected $items;
    /**
     * @var PageLinks
     */
    protected $links;

    /**
     * @return CandidateVideoModel[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param CandidateVideoModel[] $items
     *
     * @return self
     */
    public function setItems(array $items = null)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return PageLinks
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param PageLinks $links
     *
     * @return self
     */
    public function setLinks(PageLinks $links = null)
    {
        $this->links = $links;

        return $this;
    }
}
