<?php


namespace AppBundle\Dto;
use JMS\Serializer\Annotation\Type;

class SubjectDto
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
    private $code;

    /**
     * @Type("AppBundle\Dto\TeacherDto")
     */
    private $teacher;
    /**
     * @Type("ArrayCollection<AppBundle\Dto\StudentDto>")
     */
    private $students;

    /**
     * SubjectDto constructor.
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
     * @return SubjectDto
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
     * @return SubjectDto
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return SubjectDto
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return Teacher
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * @param Teacher $teacher
     * @return SubjectDto
     */
    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;
        return $this;
    }

    /**
     * @return Student
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @param Student $students
     * @return SubjectDto
     */
    public function setStudents($students)
    {
        $this->students = $students;
        return $this;
    }


}