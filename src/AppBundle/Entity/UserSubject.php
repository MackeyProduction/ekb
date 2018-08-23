<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSubject
 *
 * @ORM\Table(name="user_subject")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserSubjectRepository")
 */
class UserSubject
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
     * @var int
     *
     * @ORM\Column(name="fId", type="integer")
     */
    private $fId;


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
     * @return UserSubject
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
     * Set fId
     *
     * @param integer $fId
     *
     * @return UserSubject
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
}

