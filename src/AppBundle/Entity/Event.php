<?php
/**
 * Created by PhpStorm.
 * User: ameur
 * Date: 28/03/17
 * Time: 20:16
 */

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A meetup event.
 *
 * @ORM\Entity
 * @ORM\Table(name="meetup_event")
 * @ApiResource
 */
class Event {


    //ATTRIBUTES


    /**
     * @var string The event identifier
     *
     * @ORM\Column(type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string The event name
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @var string The event description
     *
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @var The event beginning date
     *
     * @ORM\Column(type="datetime")
     */
    private $date_start;

    /**
     * @var The event ending date
     *
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank
     */
    private $date_end;

    /**
     * @var Group The event group
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Group")
     */
    private $group;

    /**
     * @var User[] The event users
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", mappedBy="events")
     */
    private $participants;


    //METHODS


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
     * @return The
     */
    public function getDateStart()
    {
        return $this->date_start;
    }

    /**
     * @param The $date_start
     */
    public function setDateStart($date_start)
    {
        $this->date_start = $date_start;
    }

    /**
     * @return The
     */
    public function getDateEnd()
    {
        return $this->date_end;
    }

    /**
     * @param The $date_end
     */
    public function setDateEnd($date_end)
    {
        $this->date_end = $date_end;
    }

    /**
     * @return Group
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param Group $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }

    /**
     * @return User[]
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @param User[] $participants
     */
    public function setParticipants($participants)
    {
        $this->participants = $participants;
    }

    public function addParticipant(User $user) {
        $this->participants[] = $user;
        $user->addEvent($this);
    }
}