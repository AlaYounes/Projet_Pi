<?php

namespace ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity(repositoryClass="ReclamationBundle\Repository\ReclamationRepository")
 */
class Reclamation
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
     * @var integer
     *
     * @ORM\Column(name="claimerId", type="integer", nullable=false)
     */

    private $claimerId;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255)
     */
    private $text;

    /**
     * @var boolean
     *
     * @ORM\Column(name="treated", type="boolean", nullable=true)
     */
    private $treated;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id",referencedColumnName="id")
     */

    private $user;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

   /**
     * Set claimerId
     *
     * @param integer $claimerId
     *
     * @return Reclamation
     */

    public function setClaimerId($claimerId)
    {
        $this->claimerId = $claimerId;

        return $this;
    }

    /**
     * Get claimerId
     *
     * @return int
     */

    public function getClaimerId()
    {
        return $this->claimerId;
    }


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Reclamation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Reclamation
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Reclamation
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set treated
     *
     * @param boolean $treated
     *
     * @return Reclamation
     */
    public function setTreated($treated)
    {
        $this->treated = $treated;

        return $this;
    }

    /**
     * Get treated
     *
     * @return bool
     */
    public function getTreated()
    {
        return $this->treated;
    }
}

