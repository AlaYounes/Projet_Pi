<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * like_q
 *
 * @ORM\Table(name="like_q")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\like_qRepository")
 */
class like_q
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
     * @ORM\ManyToOne(targetEntity="question" , inversedBy="likes")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     */
    private $question;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User" , inversedBy="likes")
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set question
     *
     * @param string $question
     *
     * @return like_q
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getquestion()
    {
        return $this->question;
    }
}

