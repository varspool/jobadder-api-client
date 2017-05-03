<?php

namespace Varspool\JobAdder\V2\Model;

class StandardFieldModel
{
    /**
     * @var string
     */
    protected $fieldName;
    /**
     * @var bool
     */
    protected $required;

    /**
     * @return string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @param string $fieldName
     *
     * @return self
     */
    public function setFieldName($fieldName = null)
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param bool $required
     *
     * @return self
     */
    public function setRequired($required = null)
    {
        $this->required = $required;

        return $this;
    }
}
