<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @UniqueEntity(fields="username", message="Benutzername wird bereits benutzt.")
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
     *
     * @Assert\NotBlank(message="Es muss ein Benutzername angegeben werden.")
     * @Assert\Length(min = 5, minMessage="Der Benutzername muss eine Mindestlänge von 5 Zeichen haben.")
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100)
     *
     * @Assert\NotBlank(message="Das Passwortfeld darf nicht leer sein.")
     * @Assert\Length(min = 7, max = 4096, minMessage="Das Passwort muss eine Mindestlänge von sieben Zeichen haben.", maxMessage="Das Passwort darf die Maximallänge von 4096 Zeichen nicht überschreiten.")
     */
    private $password;

    /**
     * @var string
     */
    private $passwordRepeat;

    /**
     * @var int
     *
     * @ORM\Column(name="pId", type="integer")
     * @ORM\ManyToOne(targetEntity="Profile")
     * @ORM\JoinColumn(name="pId", referencedColumnName="id")
     */
    private $pId;

    /**
     * @var int
     *
     * @ORM\Column(name="ugId", type="integer")
     * @ORM\ManyToOne(targetEntity="UserGroup")
     * @ORM\JoinColumn(name="ugId", referencedColumnName="id")
     */
    private $ugId;

    /**
     * @var string
     *
     * @ORM\Column(name="shortcut", type="string", length=20)
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

    /**
     * Set passwordRepeat
     *
     * @param string $passwordRepeat
     *
     * @return User
     */
    public function setPasswordRepeat($passwordRepeat)
    {
        $this->passwordRepeat = $passwordRepeat;

        return $this;
    }

    /**
     * Get passwordRepeat
     *
     * @return string
     */
    public function getPasswordRepeat()
    {
        return $this->passwordRepeat;
    }
}

