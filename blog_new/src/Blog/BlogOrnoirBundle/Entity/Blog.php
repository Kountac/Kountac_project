<?php

namespace Blog\BlogOrnoirBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blog
 *
 * @ORM\Table(name="Blog")
 * @ORM\Entity(repositoryClass="Blog\BlogOrnoirBundle\Repository\BlogRepository")
 */
class Blog
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
     * @ORM\OneToOne(targetEntity="Blog\BlogOrnoirBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true, onDelete="CASCADE")
     */
    private $image;
    
    /**
     * @ORM\OneToMany(targetEntity="Blog\BlogOrnoirBundle\Entity\BlogCommentaires", mappedBy="blog", cascade={"persist"})
     */
    private $blog_commentaire;
    
    /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Editeurs", inversedBy="blog", cascade={"persist"})
     * @ORM\JoinColumn(name="editeur_id", referencedColumnName="id", nullable=true, onDelete="CASCADE")
     */
    private $editeur;
    
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="date", nullable=true)
     */
    private $dateAjout;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateUpdate", type="date", nullable=true)
     */
    private $dateUpdate;
    
    /**
     * @var float
     *
     * @ORM\Column(name="popularite", type="float", nullable=true)
     */
    private $popularite;
    
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
     * Set titre
     *
     * @param string $titre
     * @return Blog
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
     * Set description
     *
     * @param string $description
     * @return Blog
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param \Blog\BlogOrnoirBundle\Entity\Media $image
     * @return Blog
     */
    public function setImage(\Blog\BlogOrnoirBundle\Entity\Media $image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return \Blog\BlogOrnoirBundle\Entity\Media 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     * @return Blog
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;
    
        return $this;
    }

    /**
     * Get dateAjout
     *
     * @return \DateTime 
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * Set dateUpdate
     *
     * @param \DateTime $dateUpdate
     * @return Blog
     */
    public function setDateUpdate($dateUpdate)
    {
        $this->dateUpdate = $dateUpdate;
    
        return $this;
    }

    /**
     * Get dateUpdate
     *
     * @return \DateTime 
     */
    public function getDateUpdate()
    {
        return $this->dateUpdate;
    }
    /**
     * Constructor
     */
    
    /**
     * Add blog_commentaire
     *
     * @param \Blog\BlogOrnoirBundle\Entity\BlogCommentaires $blogCommentaire
     * @return Blog
     */
    public function addBlogCommentaire(\Blog\BlogOrnoirBundle\Entity\BlogCommentaires $blogCommentaire)
    {
        $this->blog_commentaire[] = $blogCommentaire;

        return $this;
    }

    /**
     * Remove blog_commentaire
     *
     * @param \Blog\BlogOrnoirBundle\Entity\BlogCommentaires $blogCommentaire
     */
    public function removeBlogCommentaire(\Blog\BlogOrnoirBundle\Entity\BlogCommentaires $blogCommentaire)
    {
        $this->blog_commentaire->removeElement($blogCommentaire);
    }

    /**
     * Get blog_commentaire
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBlogCommentaire()
    {
        return $this->blog_commentaire;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->blog_commentaire = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set editeur
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Editeurs $editeur
     * @return Blog
     */
    public function setEditeur(\Utilisateurs\UtilisateursBundle\Entity\Editeurs $editeur = null)
    {
        $this->editeur = $editeur;

        return $this;
    }

    /**
     * Get editeur
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Editeurs 
     */
    public function getEditeur()
    {
        return $this->editeur;
    }
    
    public function __toString()
    {
        return $this->getTitre();
    }


    /**
     * Set popularite
     *
     * @param float $popularite
     * @return Blog
     */
    public function setPopularite($popularite)
    {
        $this->popularite = $popularite;

        return $this;
    }

    /**
     * Get popularite
     *
     * @return float 
     */
    public function getPopularite()
    {
        return $this->popularite;
    }
}
