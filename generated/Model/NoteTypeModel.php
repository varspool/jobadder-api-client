<?php

namespace Varspool\JobAdder\V2\Model;

class NoteTypeModel
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var NoteTypeDefaultModel
     */
    protected $default;

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
     * @return NoteTypeDefaultModel
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param NoteTypeDefaultModel $default
     *
     * @return self
     */
    public function setDefault(NoteTypeDefaultModel $default = null)
    {
        $this->default = $default;

        return $this;
    }
}
