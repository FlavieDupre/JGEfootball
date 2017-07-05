<?php


namespace JgeBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Category
 */
class Category
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
     * @var array
     */
    private $members;

    /**
     * @var int
     */
    private $category_group;


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
     * Set members
     *
     * @param arrayCollection $members
     *
     * @return Category
     */
    public function setMembers(Member $members)
    {
        $this->members = $members;

        return $this;
    }

    /**
     * Get members
     *
     * @return array
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Category
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
     * Set category_group
     *
     * @param string $category_group
     *
     * @return Category
     */
    public function setCategory_group($category_group)
    {
        $this->category_group = $category_group;

        return $this;
    }

    /**
     * Get category_group
     *
     * @return int
     */
    public function getCategory_group()
    {
        return $this->category_group;
    }
}

