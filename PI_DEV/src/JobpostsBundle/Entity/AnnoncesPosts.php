<?php

namespace JobpostsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnnoncesPosts
 *
 * @ORM\Table(name="annonces_posts")
 * @ORM\Entity(repositoryClass="JobpostsBundle\Repository\AnnoncesPostsRepository")
 */
class AnnoncesPosts
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
     * @ORM\Column(name="iduserA", type="integer", nullable=true)
     */
    private $iduserA;



    /**
     * @var \string
     *
     * @ORM\Column(name="speciality", type="string", length=255))
     */
    public $speciality;


    /**
     * @var \string
     *
     * @ORM\Column(name="datedebut", type="string", length=255))
     */
    private $datedebut;

    /**
     * @var \string
     *
     * @ORM\Column(name="datefin", type="string", length=255))
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var int
     *
     * @ORM\Column(name="salaire", type="integer",nullable=true)
     */
    private $salaire;

    /**
     * @var int
     *
     * @ORM\Column(name="etatannonce", type="integer", nullable=true)
     */
    private $etatannonce;


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
     * Set iduserA
     *
     * @param integer $iduserA
     *
     * @return AnnoncesPosts
     */
    public function setIduserA($iduserA)
    {
        $this->iduserA = $iduserA;

        return $this;
    }

    /**
     * Get iduserA
     *
     * @return int
     */
    public function getIduserA()
    {
        return $this->iduserA;
    }

    /**
     * Set datedebut
     *
     * @param \string $datedebut
     *
     * @return AnnoncesPosts
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \string
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \string $datefin
     *
     * @return AnnoncesPosts
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \string
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return AnnoncesPosts
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return AnnoncesPosts
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }


    /**
     * Set speciality
     *
     * @param string $speciality
     *
     * @return AnnoncesPosts
     */
    public function setSpeciality($speciality)
    {
        $this->speciality = $speciality;

        return $this;
    }

    /**
     * Get sepciality
     *
     * @return string
     */
    public function getSepciality()
    {
        return $this->speciality;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set salaire
     *
     * @param integer $salaire
     *
     * @return AnnoncesPosts
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get salaire
     *
     * @return int
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set etatannonce
     *
     * @param integer $etatannonce
     *
     * @return AnnoncesPosts
     */
    public function setEtatannonce($etatannonce)
    {
        $this->etatannonce = $etatannonce;

        return $this;
    }

    /**
     * Get etatannonce
     *
     * @return int
     */
    public function getEtatannonce()
    {
        return $this->etatannonce;
    }
}

