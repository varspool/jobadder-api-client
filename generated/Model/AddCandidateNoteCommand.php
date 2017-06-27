<?php

namespace Varspool\JobAdder\V2\Model;

class AddCandidateNoteCommand
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $text;
    /**
     * @var int[]
     */
    protected $applicationId;

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
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return self
     */
    public function setText($text = null)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * @param int[] $applicationId
     *
     * @return self
     */
    public function setApplicationId(array $applicationId = null)
    {
        $this->applicationId = $applicationId;

        return $this;
    }
}
