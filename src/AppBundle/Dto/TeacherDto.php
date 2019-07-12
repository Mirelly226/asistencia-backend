<?php


namespace AppBundle\Dto;
use JMS\Serializer\Annotation\Type;

class TeacherDto
{
    /**
     * @Type("int")
     */
    private $id;

    /**
     * @Type("int")
     */
    private $ci;

    /**
     * @Type("string")
     */
    private $name;

    /**
     * @Type("string")
     */
    private $lastname;

    /**
     * @Type("string")
     */
    private $password;

    /**
     * TeacherDto constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return TeacherDto
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getCi()
    {
        return $this->ci;
    }

    /**
     * @param int $ci
     * @return TeacherDto
     */
    public function setCi($ci)
    {
        $this->ci = $ci;
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
     * @return TeacherDto
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return TeacherDto
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return TeacherDto
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }


}