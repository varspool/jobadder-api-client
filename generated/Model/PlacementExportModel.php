<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementExportModel
{
    /**
     * @var bool
     */
    protected $payroll;
    /**
     * @var bool
     */
    protected $timesheets;
    /**
     * @var bool
     */
    protected $onboarding;

    /**
     * @return bool
     */
    public function getPayroll()
    {
        return $this->payroll;
    }

    /**
     * @param bool $payroll
     *
     * @return self
     */
    public function setPayroll($payroll = null)
    {
        $this->payroll = $payroll;

        return $this;
    }

    /**
     * @return bool
     */
    public function getTimesheets()
    {
        return $this->timesheets;
    }

    /**
     * @param bool $timesheets
     *
     * @return self
     */
    public function setTimesheets($timesheets = null)
    {
        $this->timesheets = $timesheets;

        return $this;
    }

    /**
     * @return bool
     */
    public function getOnboarding()
    {
        return $this->onboarding;
    }

    /**
     * @param bool $onboarding
     *
     * @return self
     */
    public function setOnboarding($onboarding = null)
    {
        $this->onboarding = $onboarding;

        return $this;
    }
}
