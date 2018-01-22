<?php

namespace AE\FollowMusclesBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Muscle
 * Doc : http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/basic-mapping.html 
 */

/**
 * @ORM\Entity(repositoryClass="AE\FollowMusclesBundle\Entity\MuscleRepository")
 */
class Muscle
{
    /**
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @ORM\Column(name="photoLarge", type="string", length=255)
     */
    private $photoLarge;

    /**
     * @ORM\Column(name="photoSmall", type="string", length=255)
     */
    private $photoSmall;


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
     * Set name
     *
     * @param string $name
     *
     * @return Muscle
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set photoLarge
     *
     * @param string $photoLarge
     *
     * @return Muscle
     */
    public function setPhotoLarge($photoLarge)
    {
        $this->photoLarge = $photoLarge;

        return $this;
    }

    /**
     * Get photoLarge
     *
     * @return string
     */
    public function getPhotoLarge()
    {
        return $this->photoLarge;
    }

    /**
     * Set photoSmall
     *
     * @param string $photoSmall
     *
     * @return Muscle
     */
    public function setPhotoSmall($photoSmall)
    {
        $this->photoSmall = $photoSmall;

        return $this;
    }

    /**
     * Get photoSmall
     *
     * @return string
     */
    public function getPhotoSmall()
    {
        return $this->photoSmall;
    }
}

