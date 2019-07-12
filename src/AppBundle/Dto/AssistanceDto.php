<?php


namespace AppBundle\Dto;
use JMS\Serializer\Annotation\Type;

class AssistanceDto
{
    /**
     * @Type("int")
     */
    private $id;

    /**
     * @Type("bool")
     */
    private $assistance;

    /**
     * @Type("String")
     */
    private $date;

    /**
     * @Type("AppBundle\Dto\StudentDto")
     */
    private $students;

    /**
     * @Type("AppBundle\Dto\SubjectDto")
     */
    private $subjects;

    /**
     * AssistanceDto constructor.
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
     * @return AssistanceDto
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAssistance()
    {
        return $this->assistance;
    }

    /**
     * @param bool $assistance
     * @return AssistanceDto
     */
    public function setAssistance($assistance)
    {
        $this->assistance = $assistance;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return AssistanceDto
     */
    public function setDate($date)
    {
        $this->date = $date;
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
     * @return AssistanceDto
     */
    public function setStudents($students)
    {
        $this->students = $students;
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
     * @return AssistanceDto
     */
    public function setSubjects($subjects)
    {
        $this->subjects = $subjects;
        return $this;
    }


}