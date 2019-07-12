<?php


namespace AppBundle\Dto;
use JMS\Serializer\Annotation\Type;

class StudentDto
{
    /**
     * @Type("int")
     */
    private $id;

    /**
     * @Type("string")
     */
    private $name;

    /**
     * @Type("string")
     */
    private $lastname;

    /**
     * @Type("int")
     */
    private $ci;

    /**
     * @Type("string")
     */
    private $email;

    /**
     * @Type("string")
     */
    private $password;

    /**
     * @Type("ArrayCollection<AppBundle\Dto\SubjectDto>")
     */
    private $subjects;

    /**
     * StudentDto constructor.
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
     * @return StudentDto
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return StudentDto
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
     * @return StudentDto
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
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
     * @return StudentDto
     */
    public function setCi($ci)
    {
        $this->ci = $ci;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return StudentDto
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
     * @return StudentDto
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return Subject
     */
    public function getSubjects()
    {
        return $this->subjects;
    }

    /**
     * @param Subject $subjects
     * @return StudentDto
     */
    public function setSubjects($subjects)
    {
        $this->subjects = $subjects;
        return $this;
    }



}