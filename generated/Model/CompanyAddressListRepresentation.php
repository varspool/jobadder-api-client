<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyAddressListRepresentation
{
    /**
     * @var CompanyAddressModel[]
     */
    protected $items;
    /**
     * @var int
     */
    protected $totalCount;
    /**
     * @var ModelLinks
     */
    protected $links;

    /**
     * @return CompanyAddressModel[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param CompanyAddressModel[] $items
     *
     * @return self
     */
    public function setItems(array $items = null)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount($totalCount = null)
    {
        $this->totalCount = $totalCount;

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
