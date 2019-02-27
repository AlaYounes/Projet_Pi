<?php
/**
 * Created by PhpStorm.
 * User: Mejri Dorra
 * Date: 11/14/2018
 * Time: 7:40 PM
 */

namespace AmendesBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class amende
 * @ORM\Entity(repositoryClass="AmendesBundle\Entity\AmendeRepositery")
 */
class amende
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="float")
     */
    private $montant;
    /**
     * @ORM\Column(type="date")
     */
    private $date;
    /**
     * @ORM\Column(type="float")
     */
    private $penalite;
    /**
     * @ORM\Column(type="string")
     */
    private $payee;
    /**
     * @ORM\ManyToOne(targetEntity="personne")
     * @ORM\JoinColumn(referencedColumnName="cin")
     */
    private $personne;

    /**
     * @return mixed
     */
    public function getPersonne()
    {
        return $this->personne;
    }

    /**
     * @param mixed $personne
     */
    public function setPersonne($personne)
    {
        $this->personne = $personne;
    }
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
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param mixed $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getPenalite()
    {
        return $this->penalite;
    }

    /**
     * @param mixed $penalite
     */
    public function setPenalite($penalite)
    {
        $this->penalite = $penalite;
    }

    /**
     * @return mixed
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * @param mixed $payee
     */
    public function setPayee($payee)
    {
        $this->payee = $payee;
    }


}