<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitEmploymentModel
{
    /**
     * @var SubmitCurrentEmploymentModel
     */
    protected $current;
    /**
     * @var SubmitIdealEmploymentModel
     */
    protected $ideal;

    /**
     * @return SubmitCurrentEmploymentModel
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @param SubmitCurrentEmploymentModel $current
     *
     * @return self
     */
    public function setCurrent(SubmitCurrentEmploymentModel $current = null)
    {
        $this->current = $current;

        return $this;
    }

    /**
     * @return SubmitIdealEmploymentModel
     */
    public function getIdeal()
    {
        return $this->ideal;
    }

    /**
     * @param SubmitIdealEmploymentModel $ideal
     *
     * @return self
     */
    public function setIdeal(SubmitIdealEmploymentModel $ideal = null)
    {
        $this->ideal = $ideal;

        return $this;
    }
}
