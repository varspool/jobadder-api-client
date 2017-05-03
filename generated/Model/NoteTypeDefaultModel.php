<?php

namespace Varspool\JobAdder\V2\Model;

class NoteTypeDefaultModel
{
    /**
     * @var bool
     */
    protected $note;
    /**
     * @var bool
     */
    protected $email;
    /**
     * @var bool
     */
    protected $sms;

    /**
     * @return bool
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param bool $note
     *
     * @return self
     */
    public function setNote($note = null)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return bool
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param bool $email
     *
     * @return self
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSms()
    {
        return $this->sms;
    }

    /**
     * @param bool $sms
     *
     * @return self
     */
    public function setSms($sms = null)
    {
        $this->sms = $sms;

        return $this;
    }
}
