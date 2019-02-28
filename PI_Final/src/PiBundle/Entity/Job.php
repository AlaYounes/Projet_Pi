<?php

namespace PiBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Job
 *
 * @ORM\Table(name="job")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\JobRepository")
 */
class Job
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
     * @ORM\Column(name="titre", type="string", length=255)
     * @Assert\Length(
     *     min = 2,
     *     max = 20,
     *     minMessage="Titre trop court"
     * )
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="souscategorie", type="string", length=255)
     */
    private $souscategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var float
     *
     *
     * @ORM\Column(name="budget", type="float")
     * @Assert\Length(min=1,
     *     max=20)
     *
     */
    private $budget;

    /**
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param int $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }



    /**
     * @var string
     *
     * @ORM\Column(name="heuresPs", type="string", length=255)
     */
    private $heuresPs;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
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

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Job
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
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
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Job
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set souscategorie
     *
     * @param string $souscategorie
     *
     * @return Job
     */
    public function setSouscategorie($souscategorie)
    {
        $this->souscategorie = $souscategorie;

        return $this;
    }

    /**
     * Get souscategorie
     *
     * @return string
     */
    public function getSouscategorie()
    {
        return $this->souscategorie;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Job
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set budget
     *
     * @param float $budget
     *
     * @return Job
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return float
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set heuresPs
     *
     * @param string $heuresPs
     *
     * @return Job
     */
    public function setHeuresPs($heuresPs)
    {
        $this->heuresPs = $heuresPs;

        return $this;
    }

    /**
     * Get heuresPs
     *
     * @return string
     */
    public function getHeuresPs()
    {
        return $this->heuresPs;
    }

    /**
     * Set experience
     *
     * @param string $experience
     *
     * @return Job
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return string
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Job
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Job
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
}

