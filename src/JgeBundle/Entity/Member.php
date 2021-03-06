<?php

namespace JgeBundle\Entity;

/**
 * Member
 */
class Member
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $licenceNum;

    /**
     * @var array
     */
    private $role;

    /**
     * @var \DateTime
     */
    private $dateOfBirth;

    /**
     * @var array
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var array
     */
    private $telNumber;

    /**
     * @var string
     */
    private $sex;

    /**
     * @var int
     */
    private $shoeSize;

    /**
     * @var int
     */
    private $heigth;


    /**
     * @var int
     */
    private $category;

    /**
     * @var array
     */
    private $convocations;


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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Member
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Member
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set licenceNum
     *
     * @param string $licenceNum
     *
     * @return Member
     */
    public function setLicenceNum($licenceNum)
    {
        $this->licenceNum = $licenceNum;

        return $this;
    }

    /**
     * Get licenceNum
     *
     * @return string
     */
    public function getLicenceNum()
    {
        return $this->licenceNum;
    }

    /**
     * Set role
     *
     * @param array $role
     *
     * @return Member
     */
    public function setRole($role)
    {
        $this->role[]=$role;

        return $this;
    }

    /**
     * Get role
     *
     * @return array
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     *
     * @return Member
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set email
     *
     * @param array $email
     *
     * @return Member
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return array
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Member
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set telNumber
     *
     * @param array $telNumber
     *
     * @return Member
     */
    public function setTelNumber($telNumber)
    {
        $this->telNumber = $telNumber;

        return $this;
    }

    /**
     * Get telNumber
     *
     * @return array
     */
    public function getTelNumber()
    {
        return $this->telNumber;
    }

    /**
     * Set sex
     *
     * @param string $sex
     *
     * @return Member
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set shoeSize
     *
     * @param integer $shoeSize
     *
     * @return Member
     */
    public function setShoeSize($shoeSize)
    {
        $this->shoeSize = $shoeSize;

        return $this;
    }

    /**
     * Get shoeSize
     *
     * @return int
     */
    public function getShoeSize()
    {
        return $this->shoeSize;
    }

    /**
     * Set heigth
     *
     * @param integer $heigth
     *
     * @return Member
     */
    public function setHeigth($heigth)
    {
        $this->heigth = $heigth;

        return $this;
    }

    /**
     * Get heigth
     *
     * @return int
     */
    public function getHeigth()
    {
        return $this->heigth;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Member
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getcategory()
    {
        return $this->category;
    }

    /**
     * Get convocations
     *
     * @return array
     */
    public function getconvocations()
    {
        return $this->convocations;
    }
}

