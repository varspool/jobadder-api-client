<?php

namespace Varspool\JobAdder\V2\Model;

class CustomFieldRepresentation
{
    /**
     * @var int
     */
    protected $fieldId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var bool
     */
    protected $mandatory;
    /**
     * @var int
     */
    protected $maxLength;
    /**
     * @var bool
     */
    protected $multiLine;
    /**
     * @var bool
     */
    protected $multiSelect;
    /**
     * @var string[]
     */
    protected $values;
    /**
     * @var ModelLinks
     */
    protected $links;

    /**
     * @return int
     */
    public function getFieldId()
    {
        return $this->fieldId;
    }

    /**
     * @param int $fieldId
     *
     * @return self
     */
    public function setFieldId($fieldId = null)
    {
        $this->fieldId = $fieldId;

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
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return bool
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }

    /**
     * @param bool $mandatory
     *
     * @return self
     */
    public function setMandatory($mandatory = null)
    {
        $this->mandatory = $mandatory;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * @param int $maxLength
     *
     * @return self
     */
    public function setMaxLength($maxLength = null)
    {
        $this->maxLength = $maxLength;

        return $this;
    }

    /**
     * @return bool
     */
    public function getMultiLine()
    {
        return $this->multiLine;
    }

    /**
     * @param bool $multiLine
     *
     * @return self
     */
    public function setMultiLine($multiLine = null)
    {
        $this->multiLine = $multiLine;

        return $this;
    }

    /**
     * @return bool
     */
    public function getMultiSelect()
    {
        return $this->multiSelect;
    }

    /**
     * @param bool $multiSelect
     *
     * @return self
     */
    public function setMultiSelect($multiSelect = null)
    {
        $this->multiSelect = $multiSelect;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param string[] $values
     *
     * @return self
     */
    public function setValues(array $values = null)
    {
        $this->values = $values;

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
