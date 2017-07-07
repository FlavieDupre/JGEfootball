<?php

namespace JgeBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;


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
     * @var ArrayCollection
     */
    private $role;

    /**
     * @var \DateTime
     */
    private $dateOfBirth;

    /**
     * @var string
     */
    private $email1;

    /**
     * @var string
     */
    private $email2;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $telNumber1;

    /**
     * @var string
     */
    private $telNumber2;

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

    public function __construct()
    {
        $this->role = new ArrayCollection();
    }


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
     * Get role
     *
     * @return ArrayCollection
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set role
     *
     * @param Role $role
     *
     * @return Member
     */


    public function setRole(Role $role)
    {
        if($role !== $this->role){
            $this->role = $role;
            if (!$role){
                $role->addMember($this);
            }
        }

        return $this;
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
     * Set email1
     *
     * @param string $email1
     *
     * @return Member
     */
    public function setEmail1($email)
    {
        $this->email1 = $email;

        return $this;
    }

    /**
     * Get email1
     *
     * @return string
     */
    public function getEmail1()
    {
        return $this->email1;
    }

    /**
     * Set email2
     *
     * @param string $email2
     *
     * @return Member
     */
    public function setEmail2($email)
    {
        $this->email2 = $email;

        return $this;
    }

    /**
     * Get email2
     *
     * @return string
     */
    public function getEmail2()
    {
        return $this->email2;
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
     * Set telNumber1
     *
     * @param string $telNumber1
     *
     * @return Member
     */
    public function setTelNumber1($telNumber)
    {
        $this->telNumber1 = $telNumber;

        return $this;
    }

    /**
     * Get telNumber1
     *
     * @return string
     */
    public function getTelNumber1()
    {
        return $this->telNumber1;
    }

    /**
     * Set telNumber2
     *
     * @param string $telNumber2
     *
     * @return Member
     */
    public function setTelNumber2($telNumber)
    {
        $this->telNumber2 = $telNumber;

        return $this;
    }

    /**
     * Get telNumber2
     *
     * @return string
     */
    public function getTelNumber2()
    {
        return $this->telNumber2;
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

