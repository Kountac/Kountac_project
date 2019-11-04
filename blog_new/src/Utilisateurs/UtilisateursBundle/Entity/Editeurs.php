<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="editeurs")
 */
class Editeurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    public function __construct()
    {
        parent::__construct();
        //$this->image = new \Doctrine\Common\Collections\ArrayCollection();
        //$this->adresse = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * @ORM\OneToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Adresse", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true, onDelete="CASCADE")
     */
    private $adresse;
    
    /**
     * @ORM\OneToMany(targetEntity="Blog\BlogOrnoirBundle\Entity\Blog", mappedBy="editeur", cascade={"persist"})
     */
    private $blog;
    
    /**
     * @ORM\OneToMany(targetEntity="Blog\BlogOrnoirBundle\Entity\Services", mappedBy="editeur", cascade={"persist"})
     */
    private $service;

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
     * Add blog
     *
     * @param \Blog\BlogOrnoirBundle\Entity\Blog $blog
     * @return Editeurs
     */
    public function addBlog(\Blog\BlogOrnoirBundle\Entity\Blog $blog)
    {
        $this->blog[] = $blog;

        return $this;
    }

    /**
     * Remove blog
     *
     * @param \Blog\BlogOrnoirBundle\Entity\Blog $blog
     */
    public function removeBlog(\Blog\BlogOrnoirBundle\Entity\Blog $blog)
    {
        $this->blog->removeElement($blog);
    }

    /**
     * Get blog
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBlog()
    {
        return $this->blog;
    }

    /**
     * Add service
     *
     * @param \Projet\OrnoirBundle\Entity\Services $service
     * @return Editeurs
     */
    public function addService(\Blog\BlogOrnoirBundle\Entity\Services $service)
    {
        $this->service[] = $service;

        return $this;
    }

    /**
     * Remove service
     *
     * @param \Projet\OrnoirBundle\Entity\Services $service
     */
    public function removeService(\Blog\BlogOrnoirBundle\Entity\Services $service)
    {
        $this->service->removeElement($service);
    }

    /**
     * Get service
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set adresse
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Adresse $adresse
     * @return Editeurs
     */
    public function setAdresse(\Utilisateurs\UtilisateursBundle\Entity\Adresse $adresse = null)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Adresse 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
}
