<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitCustomFieldValueModel
{
    /**
     * @var int
     */
    protected $fieldId;
    /**
     * @var mixed
     */
    protected $value;

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
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     *
     * @return self
     */
    public function setValue($value = null)
    {
        $this->value = $value;

        return $this;
    }
}
