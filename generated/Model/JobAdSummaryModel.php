<?php

namespace Varspool\JobAdder\V2\Model;

class JobAdSummaryModel
{
    /**
     * @var int
     */
    protected $adId;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $reference;
    /**
     * @var \DateTime
     */
    protected $postAt;
    /**
     * @var \DateTime
     */
    protected $expireAt;

    /**
     * @return int
     */
    public function getAdId()
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     *
     * @return self
     */
    public function setAdId($adId = null)
    {
        $this->adId = $adId;

        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return self
     */
    public function setState($state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title = null)
    {
        $this->title = $title;

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

    /**
     * @return \DateTime
     */
    public function getPostAt()
    {
        return $this->postAt;
    }

    /**
     * @param \DateTime $postAt
     *
     * @return self
     */
    public function setPostAt(\DateTime $postAt = null)
    {
        $this->postAt = $postAt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpireAt()
    {
        return $this->expireAt;
    }

    /**
     * @param \DateTime $expireAt
     *
     * @return self
     */
    public function setExpireAt(\DateTime $expireAt = null)
    {
        $this->expireAt = $expireAt;

        return $this;
    }
}
