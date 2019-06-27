<?php

namespace AppBundle\Entity;

/**
 * Temary
 */
class Temary
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $temary;

    /**
     * @var \DateTime
     */
    private $date;
    /**
     * @var Subject
     */
    private $subjects;
    /**
     * @var Teacher
     */
    private $teacher;


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
     * Set temary
     *
     * @param string $temary
     *
     * @return Temary
     */
    public function setTemary($temary)
    {
        $this->temary = $temary;

        return $this;
    }

    /**
     * Get temary
     *
     * @return string
     */
    public function getTemary()
    {
        return $this->temary;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Temary
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

    /**
     * @return Teacher
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * @param Teacher $teacher
     */
    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;
    }

}

