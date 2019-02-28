<?php

namespace ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity(repositoryClass="ReclamationBundle\Repository\ReponseRepository")
 */
class Reponse
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
     * @var int
     *
     * @ORM\Column(name="idClaim", type="integer")
     */
    private $idClaim;

    /**
     * @var string
     *
     * @ORM\Column(name="reply", type="text", length=255, nullable=false)
     */
    private $reply;


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
     * Set idClaim
     *
     * @param integer $idClaim
     *
     * @return Reponse
     */
    public function setIdClaim($idClaim)
    {
        $this->idClaim = $idClaim;

        return $this;
    }

    /**
     * Get idClaim
     *
     * @return int
     */
    public function getIdClaim()
    {
        return $this->idClaim;
    }

    /**
     * Set reply
     *
     * @param string $reply
     *
     * @return Reponse
     */
    public function setReply($reply)
    {
        $this->reply = $reply;

        return $this;
    }

    /**
     * Get reply
     *
     * @return string
     */
    public function getReply()
    {
        return $this->reply;
    }
}

