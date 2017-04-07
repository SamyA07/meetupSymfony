<?php
/**
 * Created by PhpStorm.
 * User: ameur
 * Date: 28/03/17
 * Time: 20:07
 */

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A meetup group.
 *
 * @ORM\Entity
 * @ORM\Table(name="meetup_user")
 * @ApiResource
 */
class User {

    //ATTRIBUTES

    /**
     * @var string The user identifier
     *
     * @ORM\Column(type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string The user name
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @var string The user email
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $email;

    /**
     * @var string The user password
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $password;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Group",mappedBy="groups")
     *
     */
    private $groups;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User",mappedBy="users")
     *
     */
    private $admins;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Event",mappedBy="events")
     *
     */
    private $events;


    //CONSTRUCTOR

    public function __construct()
    {
        $this -> groups = new ArrayCollection();
        $this -> admins = new ArrayCollection();
        $this -> events = new ArrayCollection();
    }

    //METHODS


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param mixed $groups
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;
    }

    public function addGroup(Group $group){
        $this->groups[] = $group;
    }

    public function removeGroup(Group $group){
        $this->groups->removeElement($group);
    }

    /**
     * @return mixed
     */
    public function getAdmins()
    {
        return $this->admins;
    }

    /**
     * @param mixed $admins
     */
    public function setAdmins($admins)
    {
        $this->admins = $admins;
    }

    public function addAdmin(Group $admin){
        $this->admins[] = $admin;
    }

    public function removeAdmin(Group $admin){
        $this->admins->removeElement($admin);
    }

    /**
     * @return mixed
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param mixed $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }

    public function addEvent(Event $event){
        $this->events[] = $event;
    }
}