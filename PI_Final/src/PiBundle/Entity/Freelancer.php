<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Freelancer
 *
 * @ORM\Table(name="Freelancer")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\FreelancerRepository")
 */
class Freelancer
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="rating", type="string", length=255)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="Diplome", type="string", length=255)
     */
    private $diplome;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    private $categorie;

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
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="travailfait", type="integer")
     */
    private $travailfait;

    /**
     * @var float
     *
     * @ORM\Column(name="heurest", type="float")
     */
    private $heurest;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Freelancer
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Freelancer
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set rating
     *
     * @param string $rating
     *
     * @return Freelancer
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set diplome
     *
     * @param string $diplome
     *
     * @return Freelancer
     */
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * Get diplome
     *
     * @return string
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Freelancer
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Freelancer
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
     * Set travailfait
     *
     * @param integer $travailfait
     *
     * @return Freelancer
     */
    public function setTravailfait($travailfait)
    {
        $this->travailfait = $travailfait;

        return $this;
    }

    /**
     * Get travailfait
     *
     * @return int
     */
    public function getTravailfait()
    {
        return $this->travailfait;
    }

    /**
     * Set heurest
     *
     * @param float $heurest
     *
     * @return Freelancer
     */
    public function setHeurest($heurest)
    {
        $this->heurest = $heurest;

        return $this;
    }

    /**
     * Get heurest
     *
     * @return float
     */
    public function getHeurest()
    {
        return $this->heurest;
    }
}

