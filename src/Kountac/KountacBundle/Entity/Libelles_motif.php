<?php

namespace Kountac\KountacBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Libelles_motif
 *
 * @ORM\Table(name="libelles_motif")
 * @ORM\Entity(repositoryClass="Kountac\KountacBundle\Repository\Libelles_motifRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Libelles_motif
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
     * @ORM\OneToMany(targetEntity="Kountac\KountacBundle\Entity\Mannequin", mappedBy="motif", cascade={"persist"})
     */
    private $mannequin;

    /**
    * @ORM\PostLoad()
    */
    public function postLoad()
    {
        $this->modifieLe = new \DateTime();
    }
    
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=100)
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;
    
    public $file;
    
    public function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/Motifs';
    }
    
    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }
    
    public function getAssetPath()
    {
        return 'Motifs/'.$this->path;
    }
    
    /**
     * @ORM\Prepersist()
     * @ORM\Preupdate()
     */
    public function preUpload()
    {
        $this->tempFile = $this->getAbsolutePath();
        $this->oldFile = $this->getPath();
        $this->modifieLe = new \DateTime();
       
        if (null !== $this->file){
            $this->path = sha1(uniqid (mt_rand (),TRUE)).'.'.$this->file->guessExtension();
        }       
    }

    
    /**
     * @ORM\Postpersist()
     * @ORM\Postupdate()
     */
    public function upload()
    {
         if (null !== $this->file) 
         {
             $this->file->move($this->getUploadRootDir(),$this->path);
             unset($this->file);
             
             if ($this->oldFile != null){
                 unlink ($this->tempFile);
             }
         }
    }
    
    
    /**
     * @ORM\PreRemove()
     */
    public function preRemoveUpload()
    {
        $this->tempFile = $this->getAbsolutePath();        
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Libelles_motif
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Libelles_motif
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
    
    public function __toString()
    {
        return $this->getLibelle();
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mannequin = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add mannequin
     *
     * @param \Kountac\KountacBundle\Entity\Mannequin $mannequin
     *
     * @return Libelles_motif
     */
    public function addMannequin(\Kountac\KountacBundle\Entity\Mannequin $mannequin)
    {
        $this->mannequin[] = $mannequin;

        return $this;
    }

    /**
     * Remove mannequin
     *
     * @param \Kountac\KountacBundle\Entity\Mannequin $mannequin
     */
    public function removeMannequin(\Kountac\KountacBundle\Entity\Mannequin $mannequin)
    {
        $this->mannequin->removeElement($mannequin);
    }

    /**
     * Get mannequin
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMannequin()
    {
        return $this->mannequin;
    }
}
