<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * signaler
 *
 * @ORM\Table(name="signaler")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\signalerRepository")
 *
 */
class signaler
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_c", type="datetime")
     */
    private $date_c;
    /**
     * @ORM\ManyToOne(targetEntity="commant")
     * @ORM\JoinColumn(name="commant_id", referencedColumnName="id" ,onDelete="CASCADE")
     */
    private $commant;

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return \DateTime
     */
    public function getDateC()
    {
        return $this->date_c;
    }

    /**
     * @param \DateTime $date_c
     */
    public function setDateC($date_c)
    {
        $this->date_c = $date_c;
    }

    /**
     * @return mixed
     */
    public function getCommant()
    {
        return $this->commant;
    }

    /**
     * @param mixed $commant
     */
    public function setCommant($commant)
    {
        $this->commant = $commant;
    }

    /**
     * @return text
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    /**
     * @var text
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

