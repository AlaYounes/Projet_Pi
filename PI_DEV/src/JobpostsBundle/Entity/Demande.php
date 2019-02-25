<?php

namespace JobpostsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table(name="demande")
 * @ORM\Entity(repositoryClass="JobpostsBundle\Repository\DemandeRepository")
 */
class Demande
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
     * @ORM\Column(name="ida", type="integer")
     */
    private $ida;

    /**
     * @var int
     *
     * @ORM\Column(name="iduserD", type="integer")
     */
    private $iduserD;

    /**
     * @var int
     *
     * @ORM\Column(name="iduserA", type="integer")
     */
    private $iduserA;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Motivation", type="string", length=255)
     */
    private $motivation;

    /**
     * @var int
     *
     * @ORM\Column(name="etatd", type="integer")
     */
    private $etatd;

    /**
     * @var \string
     *
     * @ORM\Column(name="datedebutD", type="string")
     */
    private $datedebutD;

    /**
     * @var \string
     *
     * @ORM\Column(name="datefinD", type="string")
     */
    private $datefinD;


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
     * Set ida
     *
     * @param integer $ida
     *
     * @return Demande
     */
    public function setIda($ida)
    {
        $this->ida = $ida;

        return $this;
    }

    /**
     * Get ida
     *
     * @return int
     */
    public function getIda()
    {
        return $this->ida;
    }

    /**
     * Set iduserD
     *
     * @param integer $iduserD
     *
     * @return Demande
     */
    public function setIduserD($iduserD)
    {
        $this->iduserD = $iduserD;

        return $this;
    }

    /**
     * Get iduserD
     *
     * @return int
     */
    public function getIduserD()
    {
        return $this->iduserD;
    }

    /**
     * Set iduserA
     *
     * @param integer $iduserA
     *
     * @return Demande
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Demande
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
     * Set motivation
     *
     * @param string $motivation
     *
     * @return Demande
     */
    public function setMotivation($motivation)
    {
        $this->motivation = $motivation;

        return $this;
    }

    /**
     * Get motivation
     *
     * @return string
     */
    public function getMotivation()
    {
        return $this->motivation;
    }

    /**
     * Set etatd
     *
     * @param integer $etatd
     *
     * @return Demande
     */
    public function setEtatd($etatd)
    {
        $this->etatd = $etatd;

        return $this;
    }

    /**
     * Get etatd
     *
     * @return int
     */
    public function getEtatd()
    {
        return $this->etatd;
    }

    /**
     * Set datedebutD
     *
     * @param \string $datedebutD
     *
     * @return Demande
     */
    public function setDatedebutD($datedebutD)
    {
        $this->datedebutD = $datedebutD;

        return $this;
    }

    /**
     * Get datedebutD
     *
     * @return \string
     */
    public function getDatedebutD()
    {
        return $this->datedebutD;
    }

    /**
     * Set datefinD
     *
     * @param \string $datefinD
     *
     * @return Demande
     */
    public function setDatefinD($datefinD)
    {
        $this->datefinD = $datefinD;

        return $this;
    }

    /**
     * Get datefinD
     *
     * @return \string
     */
    public function getDatefinD()
    {
        return $this->datefinD;
    }
}

