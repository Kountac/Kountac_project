<?php

namespace Kountac\ChatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ChatMessage")
 */
class Message
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs", inversedBy="auteur_message", cascade={"persist"})
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $channel;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $insertDate;
	
	/**
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs", inversedBy="recepteur_message", cascade={"persist"})
     * @ORM\JoinColumn(name="recepteur_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    private $recepteur;

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }


    /**
     * @param string $content
     */
    public function setMessage($content)
    {
        $this->message = $content;
    }

    /**
     * @param string $channel
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }

    /**
     * @param \DateTime $insertDate
     */
    public function setInsertDate($insertDate)
    {
        $this->insertDate = $insertDate;
    }

    /**
     * @return \DateTime
     */
    public function getInsertDate()
    {
        return $this->insertDate;
    }


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
     * Get channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set author
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $author
     *
     * @return Message
     */
    public function setAuthor(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set recepteur
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $recepteur
     *
     * @return Message
     */
    public function setRecepteur(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $recepteur)
    {
        $this->recepteur = $recepteur;

        return $this;
    }

    /**
     * Get recepteur
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs
     */
    public function getRecepteur()
    {
        return $this->recepteur;
    }
}
