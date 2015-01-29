<?php

namespace Noxlogic\PhpotonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Noxlogic\PhpotonBundle\Entity\QuestionRepository")
 */
class Question
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=200);
     */
    private $question;

    /**
     * @ORM\Column(type="string", length=50);
     */
    private $answer;

    /**
     * @ORM\Column(type="string", length=20);
     */
    private $user;

    /**
     * @ORM\Column(type="datetime");
     */
    private $created_dt;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set question
     *
     * @param string $question
     * @return Question
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
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return Question
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string 
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return Question
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set created_dt
     *
     * @param \DateTime $createdDt
     * @return Question
     */
    public function setCreatedDt($createdDt)
    {
        $this->created_dt = $createdDt;

        return $this;
    }

    /**
     * Get created_dt
     *
     * @return \DateTime 
     */
    public function getCreatedDt()
    {
        return $this->created_dt;
    }
}
