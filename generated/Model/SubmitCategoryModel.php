<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitCategoryModel
{
    /**
     * @var int
     */
    protected $categoryId;
    /**
     * @var int
     */
    protected $subCategoryId;

    /**
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     *
     * @return self
     */
    public function setCategoryId($categoryId = null)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * @return int
     */
    public function getSubCategoryId()
    {
        return $this->subCategoryId;
    }

    /**
     * @param int $subCategoryId
     *
     * @return self
     */
    public function setSubCategoryId($subCategoryId = null)
    {
        $this->subCategoryId = $subCategoryId;

        return $this;
    }
}
