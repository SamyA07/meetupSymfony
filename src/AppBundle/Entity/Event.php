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
     * @ORM\Column(type="uuid")
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

    private $date_start;

    private $date_end;

    private $group;

    private $participants;


    //METHODS


}