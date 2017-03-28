<?php
/**
 * Created by PhpStorm.
 * User: ameur
 * Date: 28/03/17
 * Time: 20:07
 */

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
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
     * @ORM\Column(type="uuid")
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}