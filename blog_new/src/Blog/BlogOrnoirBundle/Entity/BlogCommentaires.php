<?php

namespace Blog\BlogOrnoirBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlogCommentaires
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Blog\BlogOrnoirBundle\Repository\BlogCommentairesRepository")
 */
class BlogCommentaires
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
     * @ORM\ManyToOne(targetEntity="Blog\BlogOrnoirBundle\Entity\Blog", inversedBy="blog_comment", cascade={"persist"})
     * @ORM\JoinColumn(name="blog_id", referencedColumnName="id", nullable=true, onDelete="CASCADE")
     */
    private $blog;
    
    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=255)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string")
     */
    private $email;
    
    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text")
     */
    private $commentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

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
     * Set pseudo
     *
     * @param string $pseudo
     * @return BlogCommentaires
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set email
     *
     * @param integer $email
     * @return BlogCommentaires
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return integer 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return BlogCommentaires
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return BlogCommentaires
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set blog
     *
     * @param \Blog\BlogOrnoirBundle\Entity\Blog $blog
     * @return BlogCommentaires
     */
    public function setBlog(\Blog\BlogOrnoirBundle\Entity\Blog $blog = null)
    {
        $this->blog = $blog;

        return $this;
    }

    /**
     * Get blog
     *
     * @return \Blog\BlogOrnoirBundle\Entity\Blog 
     */
    public function getBlog()
    {
        return $this->blog;
    }
}
