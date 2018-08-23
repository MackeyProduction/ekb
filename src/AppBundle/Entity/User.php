<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User
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
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=100)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100)
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\Column(name="pId", type="integer")
     */
    private $pId;

    /**
     * @var int
     *
     * @ORM\Column(name="ugId", type="integer")
     */
    private $ugId;

    /**
     * @var string
     *
     * @ORM\Column(name="shortcut", type="string", length=2)
     */
    private $shortcut;


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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set pId
     *
     * @param integer $pId
     *
     * @return User
     */
    public function setPId($pId)
    {
        $this->pId = $pId;

        return $this;
    }

    /**
     * Get pId
     *
     * @return int
     */
    public function getPId()
    {
        return $this->pId;
    }

    /**
     * Set ugId
     *
     * @param integer $ugId
     *
     * @return User
     */
    public function setUgId($ugId)
    {
        $this->ugId = $ugId;

        return $this;
    }

    /**
     * Get ugId
     *
     * @return int
     */
    public function getUgId()
    {
        return $this->ugId;
    }

    /**
     * Set shortcut
     *
     * @param string $shortcut
     * @return User
     */
    public function setShortcut($shortcut)
    {
        $this->shortcut = $shortcut;

        return $this;
    }

    /**
     * Get shortcut
     *
     * @return string
     */
    public function getShortcut()
    {
        return $this->shortcut;
    }
}

