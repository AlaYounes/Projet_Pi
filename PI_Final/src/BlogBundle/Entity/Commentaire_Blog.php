<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire_Blog
 *
 * @ORM\Table(name="commentaire__blog")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\Commentaire_BlogRepository")
 */
class Commentaire_Blog
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
     * @ORM\Column(name="auteur_Commentaire", type="string", length=255)
     */
    private $auteurCommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_Commentaire", type="string", length=255)
     */
    private $contenuCommentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_Commentaire", type="datetime")
     */
    private $dateCommentaire;

    /**
     * @ORM\ManyToOne(targetEntity="BlogBundle\Entity\Article", inversedBy="commentaires")
     * @ORM\JoinColumn(name="article_id",referencedColumnName="id")
     */
    private $article;

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
     * Set auteurCommentaire
     *
     * @param string $auteurCommentaire
     *
     * @return Commentaire_Blog
     */
    public function setAuteurCommentaire($auteurCommentaire)
    {
        $this->auteurCommentaire = $auteurCommentaire;

        return $this;
    }

    /**
     * Get auteurCommentaire
     *
     * @return string
     */
    public function getAuteurCommentaire()
    {
        return $this->auteurCommentaire;
    }

    /**
     * Set contenuCommentaire
     *
     * @param string $contenuCommentaire
     *
     * @return Commentaire_Blog
     */
    public function setContenuCommentaire($contenuCommentaire)
    {
        $this->contenuCommentaire = $contenuCommentaire;

        return $this;
    }

    /**
     * Get contenuCommentaire
     *
     * @return string
     */
    public function getContenuCommentaire()
    {
        return $this->contenuCommentaire;
    }

    /**
     * Set dateCommentaire
     *
     * @param \DateTime $dateCommentaire
     *
     * @return Commentaire_Blog
     */
    public function setDateCommentaire($dateCommentaire)
    {
        $this->dateCommentaire = $dateCommentaire;

        return $this;
    }

    /**
     * Get dateCommentaire
     *
     * @return \DateTime
     */
    public function getDateCommentaire()
    {
        return $this->dateCommentaire;
    }

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param mixed $article
     */
    public function setArticle($article)
    {
        $this->article = $article;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->article;
    }


}

