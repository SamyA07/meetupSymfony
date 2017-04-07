<?php
/**
 * Created by PhpStorm.
 * User: ameur
 * Date: 09/02/17
 * Time: 11:44
 */

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A meetup group.
 *
 * @ORM\Entity
 * @ORM\Table(name="meetup_group")
 * @ApiResource
 */
class Group {


    //ATTRIBUTES


    /**
     * @var string The group identifier
     *
     * @ORM\Column(type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string The group name
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @var string The group city
     *
     * @ORM\Column(type="string")
     */
    private $city;

    /**
     * @var string The group description
     *
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @var User[] The users group
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", mappedBy="users")
     */
    private $users;
    /**
     * @var User[] The admins group
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", inversedBy="groups")
     * @ORM\JoinTable(name="user_admin_groups")
     */
    private $admins;


    //METHODS


    //
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return User[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param User[] $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }

    /**
     * @return User[]
     */
    public function getAdmins()
    {
        return $this->admins;
    }

    /**
     * @param User[] $admins
     */
    public function setAdmins($admins)
    {
        $this->admins = $admins;
    }
}

