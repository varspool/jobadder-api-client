<?php

namespace Varspool\JobAdder\V2\Model;

class JobApplicationWorkflowModel
{
    /**
     * @var string
     */
    protected $stage;
    /**
     * @var int
     */
    protected $step;
    /**
     * @var string
     */
    protected $progress;

    /**
     * @return string
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * @param string $stage
     *
     * @return self
     */
    public function setStage($stage = null)
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * @return int
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @param int $step
     *
     * @return self
     */
    public function setStep($step = null)
    {
        $this->step = $step;

        return $this;
    }

    /**
     * @return string
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * @param string $progress
     *
     * @return self
     */
    public function setProgress($progress = null)
    {
        $this->progress = $progress;

        return $this;
    }
}
