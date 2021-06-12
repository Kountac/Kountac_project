<?php

namespace Kountac\KountacBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * PaysEuro
 *
 * @ORM\Table(name="pays")
 * @ORM\Entity(repositoryClass="Kountac\KountacBundle\Repository\PaysRepository")
 */
class Pays
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=25)
     */
    private $code;
    
    /**
     * @var string
     *
     * @ORM\Column(name="symbole", type="string", length=5, nullable=true)
     */
    private $symbole;
    
    /**
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=5, nullable=true)
     */
    private $langue;

    /**
     * @ORM\ManyToOne(targetEntity="Lexik\Bundle\CurrencyBundle\Entity\Currency", cascade={"persist"})
     * @ORM\JoinColumn(referencedColumnName="id", onDelete="CASCADE", nullable=true)
     */
    private $devise;
    
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
     * @return PaysEuro
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
    
    public function __toString()
    {
        return $this->getNom();
    }
    
    public function __construct() 
    {
        $this->nom = new ArrayCollection();
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Pays
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
     * Set devise
     *
     * @param \Lexik\Bundle\CurrencyBundle\Entity\Currency $devise
     *
     * @return Pays
     */
    public function setDevise(\Lexik\Bundle\CurrencyBundle\Entity\Currency $devise = null)
    {
        $this->devise = $devise;
    
        return $this;
    }

    /**
     * Get devise
     *
     * @return \Lexik\Bundle\CurrencyBundle\Entity\Currency
     */
    public function getDevise()
    {
        return $this->devise;
    }

    /**
     * Set symbole
     *
     * @param string $symbole
     *
     * @return Pays
     */
    public function setSymbole($symbole)
    {
        $this->symbole = $symbole;
    
        return $this;
    }

    /**
     * Get symbole
     *
     * @return string
     */
    public function getSymbole()
    {
        return $this->symbole;
    }

    /**
     * Set langue
     *
     * @param string $langue
     *
     * @return Pays
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;
    
        return $this;
    }

    /**
     * Get langue
     *
     * @return string
     */
    public function getLangue()
    {
        return $this->langue;
    }
}
