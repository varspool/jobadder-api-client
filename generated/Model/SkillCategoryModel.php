<?php

namespace Varspool\JobAdder\V2\Model;

class SkillCategoryModel
{
    /**
     * @var int
     */
    protected $skillId;
    /**
     * @var string
     */
    protected $name;

    /**
     * @return int
     */
    public function getSkillId()
    {
        return $this->skillId;
    }

    /**
     * @param int $skillId
     *
     * @return self
     */
    public function setSkillId($skillId = null)
    {
        $this->skillId = $skillId;

        return $this;
    }

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
}
