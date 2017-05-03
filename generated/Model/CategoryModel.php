<?php

namespace Varspool\JobAdder\V2\Model;

class CategoryModel
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
     * @var SubCategoryModel[]
     */
    protected $subCategories;

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
     * @return SubCategoryModel[]
     */
    public function getSubCategories()
    {
        return $this->subCategories;
    }

    /**
     * @param SubCategoryModel[] $subCategories
     *
     * @return self
     */
    public function setSubCategories(array $subCategories = null)
    {
        $this->subCategories = $subCategories;

        return $this;
    }
}
