<?php


namespace AppBundle\Dto;

use JMS\Serializer\Annotation\Type;

class TemaryDto
{
    /**
     * @Type("int")
     */
    private $id;

    /**
     * @Type("string")
     */
    private $temary;

    /**
     * @Type("String")
     */
    private $date;
    /**
     * @Type("AppBundle\Dto\SubjectDto")
     */
    private $subjects;


    /**
     * TemaryDto constructor.
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
     * @return TemaryDto
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemary()
    {
        return $this->temary;
    }

    /**
     * @param string $temary
     * @return TemaryDto
     */
    public function setTemary($temary)
    {
        $this->temary = $temary;
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
     * @return TemaryDto
     */
    public function setDate($date)
    {
        $this->date = $date;
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
     * @return TemaryDto
     */
    public function setSubjects($subjects)
    {
        $this->subjects = $subjects;
        return $this;
    }


}