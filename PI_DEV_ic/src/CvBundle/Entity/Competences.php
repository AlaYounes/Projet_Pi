<?php

namespace CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competences
 *
 * @ORM\Table(name="competences")
 * @ORM\Entity(repositoryClass="CvBundle\Repository\CompetencesRepository")
 */
class Competences
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
     * @ORM\Column(name="nom_competence", type="string", length=255)
     */
    private $nomComp;


    /**
     * @var string
     *
     * @ORM\Column(name="nom_certif", type="string", length=255)
     */
    private $nomCertif;

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
     * @ORM\Column(name="langues", type="string", length=255)
     */
    private $langues;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id",referencedColumnName="id")
     */

    private $user;

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
     * Set nomComp
     *
     * @param string $nomComp
     *
     * @return Competences
     */
    public function setNomComp($nomComp)
    {
        $this->nomComp = $nomComp;

        return $this;
    }

    /**
     * Get nomComp
     *
     * @return string
     */
    public function getNomComp()
    {
        return $this->nomComp;
    }


    /**
     * Set nomCertif
     *
     * @param string $nomCertif
     *
     * @return Competences
     */
    public function setNomCertif($nomCertif)
    {
        $this->nomCertif = $nomCertif;

        return $this;
    }

    /**
     * Get nomCertif
     *
     * @return string
     */
    public function getNomCertif()
    {
        return $this->nomCertif;
    }

    /**
     * Set langues
     *
     * @param string $langues
     *
     * @return Competences
     */
    public function setLangues($langues)
    {
        $this->langues = $langues;

        return $this;
    }

    /**
     * Get langues
     *
     * @return string
     */
    public function getLangues()
    {
        return $this->langues;
    }
}

