<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 * 
 * @ORM\Table(name="Adresse")
 * @ORM\Entity(repositoryClass="Utilisateurs\UtilisateursBundle\Repository\AdresseRepository")
 */
class Adresse
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255, nullable=true)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="bibliographie", type="text", nullable=true)
     */
    private $bibliographie;

    /**
     * @var float
     *
     * @ORM\Column(name="telephone", type="float", nullable=true)
     */
    private $telephone;


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
     * Set nom
     *
     * @param string $nom
     * @return Adresse
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    
    /**
     * Set bibliographie
     *
     * @param string $bibliographie
     * @return Adresse
     */
    public function setBibliographie($bibliographie)
    {
        $this->bibliographie = $bibliographie;

        return $this;
    }

    /**
     * Get bibliographie
     *
     * @return string 
     */
    public function getBibliographie()
    {
        return $this->bibliographie;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Adresse
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set telephone
     *
     * @param float $telephone
     * @return Adresse
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return float 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set editeur
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Editeurs $editeur
     * @return Adresse
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
     * Set prenom
     *
     * @param string $prenom
     * @return Adresse
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set image
     *
     * @param \Blog\BlogOrnoirBundle\Entity\Media $image
     * @return Adresse
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
}
