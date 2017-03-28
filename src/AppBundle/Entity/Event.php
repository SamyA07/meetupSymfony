<?php
/**
 * Created by PhpStorm.
 * User: ameur
 * Date: 28/03/17
 * Time: 20:16
 */

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
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
     * @ORM\Column(type="euid")
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
     * @var string The event beginning
     *
     * @ORM\Column(type="datetime")
     */
    private $date_start;

    /**
     * @var string The event ending
     *
     * @ORM\Column(type="datetime")
     */
    private $date_end;

    /**
     * @var string The event group
     *
     * @ORM\OneToMany(targetEntity="Group", mappedBy="group")
     * @ORM\JoinColumn(name="group_id, referencedColumnName="guid")
     */
    private $group;

    /**
     * @var string The event users
     *
     * @ORM\ManyToMany(targetEntity="User", mappedBy="users")
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
     * @return string
     */
    public function getDateStart()
    {
        return $this->date_start;
    }

    /**
     * @param string $date_start
     */
    public function setDateStart($date_start)
    {
        $this->date_start = $date_start;
    }

    /**
     * @return string
     */
    public function getDateEnd()
    {
        return $this->date_end;
    }

    /**
     * @param string $date_end
     */
    public function setDateEnd($date_end)
    {
        $this->date_end = $date_end;
    }

    /**
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param string $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }

    /**
     * @return string
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @param string $participants
     */
    public function setParticipants($participants)
    {
        $this->participants = $participants;
    }
}