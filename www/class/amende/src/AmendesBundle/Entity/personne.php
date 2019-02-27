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
 * Class personne
 * @ORM\Entity()
 */

class personne
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="string")
     */
    private $cin;
    /**
     * @ORM\Column(type="string")
     */
    private  $nom;
    /**
     * @ORM\Column(type="string")
     */
    private $prenom;
    /**
     * @ORM\Column(type="string")
     */
    private $adresse ;
        /**
         * @return mixed
         */
        public function getCin()
        {
            return $this->cin;
        }/**
         * @param mixed $cin
         */
        public function setCin($cin)
        {
            $this->cin = $cin;
        }/**
         * @return mixed
         */
        public function getNom()
        {
            return $this->nom;
        }/**
         * @param mixed $nom
         */
        public function setNom($nom)
        {
            $this->nom = $nom;
        }/**
         * @return mixed
         */
        public function getPrenom()
        {
            return $this->prenom;
        }/**
         * @param mixed $prenom
         */
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }/**
         * @return mixed
         */
        public function getAdresse()
        {
            return $this->adresse;
        }/**
         * @param mixed $adresse
         */
        public function setAdresse($adresse)
        {
            $this->adresse = $adresse;
        }


}