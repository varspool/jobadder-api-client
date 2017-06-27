<?php

namespace Varspool\JobAdder\V2\Model;

class AddCandidateVideoCommand
{
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $reference;

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl($url = null)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     *
     * @return self
     */
    public function setReference($reference = null)
    {
        $this->reference = $reference;

        return $this;
    }
}
