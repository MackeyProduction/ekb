<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @UniqueEntity(fields="username", message="Benutzername wird bereits benutzt.")
 */
class User implements UserInterface
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
     */
    private $password;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Das Passwortfeld darf nicht leer sein.")
     * @Assert\Length(min = 7, max = 4096, minMessage="Das Passwort muss eine Mindestlänge von sieben Zeichen haben.", maxMessage="Das Passwort darf die Maximallänge von 4096 Zeichen nicht überschreiten.")
     */
    private $plainPassword;

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
     * @Assert\Type(type="AppBundle\Entity\Profile")
     * @Assert\Valid()
     */
    protected $profile;

    /**
     * @Assert\Type(type="AppBundle\Entity\UserGroup")
     * @Assert\Valid()
     */
    protected $userGroup;


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
     * @return mixed
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param Profile $profile
     */
    public function setProfile(Profile $profile = null)
    {
        $this->profile = $profile;
    }

    /**
     * Set plainPassword
     *
     * @param string $plainPassword
     *
     * @return $this
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }

    /**
     * Get plainPassword
     *
     * @return string
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return array('ROLE_USER');
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
    }

    /**
     * Set userGroup
     *
     * @param UserGroup $userGroup
     *
     * @return $this
     */
    public function setUserGroup(UserGroup $userGroup)
    {
        $this->userGroup = $userGroup;

        return $this;
    }

    /**
     * Get userGroup
     *
     * @return UserGroup
     */
    public function getUserGroup()
    {
        return $this->userGroup;
    }
}

