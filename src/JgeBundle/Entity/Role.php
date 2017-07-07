<?php

namespace JgeBundle\Entity;

/**
 * Role
 */
class Role
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $member;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Role
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set member
     *
     * @param Member $member
     *
     * @return Role
     */
    public function setMember(Member $member)
    {
        $this->role = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return string
     */
    public function getMember()
    {
        return $this->member;
    }

    public function addMember(Member $member)
    {
        if($member !== $this->member){
            $this->member = $member;
            if (!$member){
                $member->setRole($this);
            }
        }

        return $this;
    }

}