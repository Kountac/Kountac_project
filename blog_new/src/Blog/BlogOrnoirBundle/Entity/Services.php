<?php

namespace Blog\BlogOrnoirBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="Services")
 * @ORM\Entity(repositoryClass="Blog\BlogOrnoirBundle\Repository\ServicesRepository")
 */
class Services
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
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Editeurs", inversedBy="service", cascade={"persist"})
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
     * @return Articles
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
     * @return Articles
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
     * @return Articles
     */
    public function setImage(\Blog\BlogOrnoirBundle\Entity\Media $image = null)
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
     * Set editeur
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Editeurs $editeur
     * @return Services
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

    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     * @return Services
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
     * @return Services
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
}
