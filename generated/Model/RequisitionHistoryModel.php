<?php

namespace Varspool\JobAdder\V2\Model;

class RequisitionHistoryModel
{
    /**
     * @var RequisitionLogModel[]
     */
    protected $items;
    /**
     * @var int
     */
    protected $totalCount;

    /**
     * @return RequisitionLogModel[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param RequisitionLogModel[] $items
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
}
