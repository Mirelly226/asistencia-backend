<?php

namespace AppBundle\Entity;

/**
 * Assistance
 */
class Assistance
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var bool
     */
    private $assistance;

    /**
     * @var \DateTime
     */
    private $date;
    /**
     * @var Student
     */
    private $students;
    /**
     * @var Subject
     */
    private $subjects;


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
     * Set assistance
     *
     * @param boolean $assistance
     *
     * @return Assistance
     */
    public function setAssistance($assistance)
    {
        $this->assistance = $assistance;

        return $this;
    }

    /**
     * Get assistance
     *
     * @return bool
     */
    public function getAssistance()
    {
        return $this->assistance;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Assistance
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
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
     */
    public function setStudents($students)
    {
        $this->students = $students;
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
     */
    public function setSubjects($subjects)
    {
        $this->subjects = $subjects;
    }

}

