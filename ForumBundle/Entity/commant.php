<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commant
 *
 * @ORM\Table(name="commant")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\commantRepository")
 */
class commant
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
     * @ORM\ManyToOne(targetEntity="article")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     */
    private $article;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_c", type="datetime")
     */
    private $date_c;

    /**
     * @return \DateTime
     */
    public function getDateC()
    {
        return $this->date_c;
    }

    /**
     * @param \DateTime $date_c
     */
    public function setDateC($date_c)
    {
        $this->date_c = $date_c;
    }



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
 * @return mixed
 */
public function getArticle()
{
    return $this->article;
}/**
 * @param mixed $article
 */
public function setArticle($article)
{
    $this->article = $article;
}/**
 * @return string
 */
public function getCommentaire()
{
    return $this->commentaire;
}/**
 * @param string $commentaire
 */
public function setCommentaire($commentaire)
{
    $this->commentaire = $commentaire;
}
 /**
  * @var string
  *
  * @ORM\Column(name="commentaire", type="string", length=255)
  */
    private $commentaire;

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
     * @ORM\OneToMany(targetEntity="signaler", mappedBy="commant")
     */
    private $signaler;

    /**
     * @return mixed
     */
    public function getSignaler()
    {
        return $this->signaler;
    }

    /**
     * @param mixed $signaler
     */
    public function setSignaler($signaler)
    {
        $this->signaler = $signaler;
    }

}

