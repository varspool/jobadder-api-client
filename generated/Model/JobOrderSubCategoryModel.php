<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderSubCategoryModel
{
    /**
     * @var int
     */
    protected $subCategoryId;
    /**
     * @var string
     */
    protected $name;

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
}
