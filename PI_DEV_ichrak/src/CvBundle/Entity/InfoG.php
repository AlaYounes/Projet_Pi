<?php

namespace CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoG
 *
 * @ORM\Table(name="info_g")
 * @ORM\Entity(repositoryClass="CvBundle\Repository\InfoGRepository")
 */
class InfoG
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
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_nais", type="date")
     */
    private $dateNais;


    /**
     * @var int
     *
     * @ORM\Column(name="tele", type="integer", unique=true)
     */
    private $tele;

    /**
     * @var string
     *
     * @ORM\Column(name="adrMail", type="string", length=255, unique=true)
     */
    private $adrMail;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;


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
     * @return InfoG
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return InfoG
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNais
     *
     * @param \DateTime $dateNais
     *
     * @return InfoG
     */
    public function setDateNais($dateNais)
    {
        $this->dateNais = $dateNais;

        return $this;
    }

    /**
     * Get dateNais
     *
     * @return \DateTime
     */
    public function getDateNais()
    {
        return $this->dateNais;
    }


    /**
     * Set tele
     *
     * @param integer $tele
     *
     * @return InfoG
     */
    public function setTele($tele)
    {
        $this->tele = $tele;

        return $this;
    }

    /**
     * Get tele
     *
     * @return int
     */
    public function getTele()
    {
        return $this->tele;
    }

    /**
     * Set adrMail
     *
     * @param string $adrMail
     *
     * @return InfoG
     */
    public function setAdrMail($adrMail)
    {
        $this->adrMail = $adrMail;

        return $this;
    }

    /**
     * Get adrMail
     *
     * @return string
     */
    public function getAdrMail()
    {
        return $this->adrMail;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return InfoG
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
}

