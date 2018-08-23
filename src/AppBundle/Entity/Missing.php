<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Missing
 *
 * @ORM\Table(name="missing")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MissingRepository")
 */
class Missing
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
     * @ORM\Column(name="uId", type="integer")
     */
    private $uId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set uId
     *
     * @param integer $uId
     *
     * @return Missing
     */
    public function setUId($uId)
    {
        $this->uId = $uId;

        return $this;
    }

    /**
     * Get uId
     *
     * @return int
     */
    public function getUId()
    {
        return $this->uId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Missing
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
     * Set lessonStart
     *
     * @param integer $lessonStart
     *
     * @return Missing
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
     * @return Missing
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
}

