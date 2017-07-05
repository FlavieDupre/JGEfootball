<?php

namespace JgeBundle\Entity;

/**
 * Category_group
 */
class Category_group
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $manager;

    /**
     * @var array
     */
    private $categories;

    /**
     * @var array
     */
    private $coach;

    /**
     * @var string
     */
    private $name;


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
     * Set manager
     *
     * @param string $manager
     *
     * @return category_group
     */
    public function setManager($manager)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * Get manager
     *
     * @return string
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Set categories
     *
     * @param array $categories
     *
     * @return category_group
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return array
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set coach
     *
     * @param array $coach
     *
     * @return category_group
     */
    public function setCoach($coach)
    {
        $this->coach = $coach;

        return $this;
    }

    /**
     * Get coach
     *
     * @return array
     */
    public function getCoach()
    {
        return $this->coach;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return category_group
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
}

