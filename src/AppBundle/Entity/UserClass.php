<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserClass
 *
 * @ORM\Table(name="user_class")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserClassRepository")
 */
class UserClass
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
     * @ORM\Column(name="userId", type="integer")
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="classId", type="integer")
     */
    private $classId;

    /**
     * @var int
     *
     * @ORM\Column(name="isTeacher", type="integer")
     */
    private $isTeacher;


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
     * Set userId
     *
     * @param integer $userId
     *
     * @return UserClass
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set classId
     *
     * @param integer $classId
     *
     * @return UserClass
     */
    public function setClassId($classId)
    {
        $this->classId = $classId;

        return $this;
    }

    /**
     * Get classId
     *
     * @return int
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * Set isTeacher
     *
     * @param integer $isTeacher
     *
     * @return UserClass
     */
    public function setIsTeacher($isTeacher)
    {
        $this->isTeacher = $isTeacher;

        return $this;
    }

    /**
     * Get isTeacher
     *
     * @return int
     */
    public function getIsTeacher()
    {
        return $this->isTeacher;
    }
}

