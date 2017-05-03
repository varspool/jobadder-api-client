<?php

namespace Varspool\JobAdder\V2\Model;

class ErrorModel
{
    /**
     * @var string
     */
    protected $message;
    /**
     * @var ErrorItemModel[]
     */
    protected $errors;

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage($message = null)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return ErrorItemModel[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param ErrorItemModel[] $errors
     *
     * @return self
     */
    public function setErrors(array $errors = null)
    {
        $this->errors = $errors;

        return $this;
    }
}
