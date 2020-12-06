<?php

namespace Kountac\KountacBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotions
 *
 * @ORM\Table(name="promotions")
 * @ORM\Entity(repositoryClass="Kountac\KountacBundle\Repository\PromotionsRepository")
 */
class Promotions
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
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var float
     *
     * @ORM\Column(name="taux_reduction", type="float", nullable=true)
     */
    private $tauxReduction;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=true)
     */
    private $dateCreation;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_expiration", type="date", nullable=true)
     */
    private $dateExpiration;
    
    /**
     * @ORM\Column(name="validite", type="integer", length=250, nullable=true)
     */
    private $validite;


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
     * Set code
     *
     * @param string $code
     *
     * @return Promotions
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set tauxReduction
     *
     * @param string $tauxReduction
     *
     * @return Promotions
     */
    public function setTauxReduction($tauxReduction)
    {
        $this->tauxReduction = $tauxReduction;
    
        return $this;
    }

    /**
     * Get tauxReduction
     *
     * @return string
     */
    public function getTauxReduction()
    {
        return $this->tauxReduction;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Promotions
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    
        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateExpiration
     *
     * @param \DateTime $dateExpiration
     *
     * @return Promotions
     */
    public function setDateExpiration($dateExpiration)
    {
        $this->dateExpiration = $dateExpiration;
    
        return $this;
    }

    /**
     * Get dateExpiration
     *
     * @return \DateTime
     */
    public function getDateExpiration()
    {
        return $this->dateExpiration;
    }

    /**
     * Set validite
     *
     * @param integer $validite
     *
     * @return Promotions
     */
    public function setValidite($validite)
    {
        $this->validite = $validite;
    
        return $this;
    }

    /**
     * Get validite
     *
     * @return integer
     */
    public function getValidite()
    {
        return $this->validite;
    }
}
