<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderCategoryModel
{
    /**
     * @var int
     */
    protected $categoryId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var JobOrderSubCategoryModel
     */
    protected $subCategory;

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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return JobOrderSubCategoryModel
     */
    public function getSubCategory()
    {
        return $this->subCategory;
    }

    /**
     * @param JobOrderSubCategoryModel $subCategory
     *
     * @return self
     */
    public function setSubCategory(JobOrderSubCategoryModel $subCategory = null)
    {
        $this->subCategory = $subCategory;

        return $this;
    }
}
