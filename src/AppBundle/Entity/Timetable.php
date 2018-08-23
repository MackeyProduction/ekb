<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Timetable
 *
 * @ORM\Table(name="timetable")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TimetableRepository")
 */
class Timetable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="scId", type="integer")
     */
    private $scId;

    /**
     * @var int
     *
     * @ORM\Column(name="rId", type="integer")
     */
    private $rId;

    /**
     * @var int
     *
     * @ORM\Column(name="fId", type="integer")
     */
    private $fId;

    /**
     * @var int
     *
     * @ORM\Column(name="tId", type="integer")
     */
    private $tId;

    /**
     * @var int
     *
     * @ORM\Column(name="lessonStart", type="integer")
     */
    private $lessonStart;

    /**
     * @var int
     *
     * @ORM\Column(name="lessonEnd", type="integer")
     */
    private $lessonEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


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
     * Set scId
     *
     * @param integer $scId
     *
     * @return Timetable
     */
    public function setScId($scId)
    {
        $this->scId = $scId;

        return $this;
    }

    /**
     * Get scId
     *
     * @return int
     */
    public function getScId()
    {
        return $this->scId;
    }

    /**
     * Set rId
     *
     * @param integer $rId
     *
     * @return Timetable
     */
    public function setRId($rId)
    {
        $this->rId = $rId;

        return $this;
    }

    /**
     * Get rId
     *
     * @return int
     */
    public function getRId()
    {
        return $this->rId;
    }

    /**
     * Set fId
     *
     * @param integer $fId
     *
     * @return Timetable
     */
    public function setFId($fId)
    {
        $this->fId = $fId;

        return $this;
    }

    /**
     * Get fId
     *
     * @return int
     */
    public function getFId()
    {
        return $this->fId;
    }

    /**
     * Set tId
     *
     * @param integer $tId
     *
     * @return Timetable
     */
    public function setTId($tId)
    {
        $this->tId = $tId;

        return $this;
    }

    /**
     * Get tId
     *
     * @return int
     */
    public function getTId()
    {
        return $this->tId;
    }

    /**
     * Set lessonStart
     *
     * @param integer $lessonStart
     *
     * @return Timetable
     */
    public function setLessonStart($lessonStart)
    {
        $this->lessonStart = $lessonStart;

        return $this;
    }

    /**
     * Get lessonStart
     *
     * @return int
     */
    public function getLessonStart()
    {
        return $this->lessonStart;
    }

    /**
     * Set lessonEnd
     *
     * @param integer $lessonEnd
     *
     * @return Timetable
     */
    public function setLessonEnd($lessonEnd)
    {
        $this->lessonEnd = $lessonEnd;

        return $this;
    }

    /**
     * Get lessonEnd
     *
     * @return int
     */
    public function getLessonEnd()
    {
        return $this->lessonEnd;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Timetable
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
}

