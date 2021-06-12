<?php
namespace Utilisateurs\UtilisateursBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Utilisateurs\UtilisateursBundle\Repository\UtilisateursRepository")
 * @ORM\Table(name="utilisateurs")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Kountac\KountacBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(onDelete="CASCADE", nullable=true)
     */
    private $image;
    
    /**
     * @ORM\OneToMany(targetEntity="Kountac\KountacBundle\Entity\Achats", mappedBy="utilisateur", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $achats;
    
    /**
     * @ORM\OneToMany(targetEntity="Kountac\KountacBundle\Entity\Commandes", mappedBy="utilisateur", cascade={"persist"})
     */
    private $commande_utilisateur;
    
    /**
     * @ORM\OneToMany(targetEntity="Kountac\KountacBundle\Entity\Commandes", mappedBy="marque", cascade={"persist"})
     */
    private $commande_marque;
    
    /**
     * @ORM\OneToMany(targetEntity="Kountac\KountacBundle\Entity\Produits_1", mappedBy="marque", cascade={"persist"})
     */
    private $produit_1_marque;
    
    /**
     * @ORM\OneToMany(targetEntity="Kountac\KountacBundle\Entity\Mannequin", mappedBy="marque", cascade={"persist"})
     */
    private $mannequin;
    
    /**
     * @ORM\OneToMany(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs", mappedBy="utilisateur", cascade={"persist"})
     */
    private $reservation;
    
    /**
     * @ORM\OneToMany(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs", mappedBy="marque", cascade={"persist"})
     */
    private $reservation_marque;
    
    /**
     * @ORM\OneToOne(targetEntity="Kountac\KountacBundle\Entity\ServiceLivraison", cascade={"persist"})
     */
    private $service_livraison;
    
    /**
     * @ORM\OneToOne(targetEntity="Kountac\KountacBundle\Entity\ServicePaiement", cascade={"persist"})
     */
    private $service_paiement;
    
    /**
     * @ORM\OneToMany(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Mesures", mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $mesures;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;
    
    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $sexe;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pays;
    
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;
    
        
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $rue;
    
        
    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $departement;
    
    
    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $ville;
    
        
    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $cp;
    
    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $digicode;
    
        
    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $telephone;
    
        
    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $telephonefix;
    

    /**
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    private $marque;
    
    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $description_entreprise;
    
    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $pays_entreprise;
    
    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $ville_entreprise;    
        
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $adresse_entreprise;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $rue_entreprise;
    
    /**
     * @ORM\Column(type="integer", length=250, nullable=true)
     */
    private $cp_entreprise;
    
    /**
     * @ORM\Column(type="float", length=150, nullable=true)
     */
    private $telephone_entreprise;
    
    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $telephonefix_entreprise;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $code;
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $newsletter;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $codeparrain;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $points;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $verifier;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateajout", type="datetime", nullable=true)
     */
    private $dateajout;

    
    
    public function __construct()
    {
        parent::__construct();
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Utilisateurs
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Utilisateurs
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
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Utilisateurs
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Utilisateurs
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Utilisateurs
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set rue
     *
     * @param string $rue
     *
     * @return Utilisateurs
     */
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get rue
     *
     * @return string
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Utilisateurs
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set cp
     *
     * @param float $cp
     *
     * @return Utilisateurs
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return float
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set telephone
     *
     * @param float $telephone
     *
     * @return Utilisateurs
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
     * Set telephonefix
     *
     * @param float $telephonefix
     *
     * @return Utilisateurs
     */
    public function setTelephonefix($telephonefix)
    {
        $this->telephonefix = $telephonefix;

        return $this;
    }

    /**
     * Get telephonefix
     *
     * @return float
     */
    public function getTelephonefix()
    {
        return $this->telephonefix;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Utilisateurs
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
     * Set codeparrain
     *
     * @param string $codeparrain
     *
     * @return Utilisateurs
     */
    public function setCodeparrain($codeparrain)
    {
        $this->codeparrain = $codeparrain;

        return $this;
    }

    /**
     * Get codeparrain
     *
     * @return string
     */
    public function getCodeparrain()
    {
        return $this->codeparrain;
    }

    /**
     * Set points
     *
     * @param string $points
     *
     * @return Utilisateurs
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return string
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set verifier
     *
     * @param string $verifier
     *
     * @return Utilisateurs
     */
    public function setVerifier($verifier)
    {
        $this->verifier = $verifier;

        return $this;
    }

    /**
     * Get verifier
     *
     * @return string
     */
    public function getVerifier()
    {
        return $this->verifier;
    }

    /**
     * Set marque
     *
     * @param string $marque
     *
     * @return Utilisateurs
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set paysEntreprise
     *
     * @param string $paysEntreprise
     *
     * @return Utilisateurs
     */
    public function setPaysEntreprise($paysEntreprise)
    {
        $this->pays_entreprise = $paysEntreprise;

        return $this;
    }

    /**
     * Get paysEntreprise
     *
     * @return string
     */
    public function getPaysEntreprise()
    {
        return $this->pays_entreprise;
    }

    /**
     * Set villeEntreprise
     *
     * @param string $villeEntreprise
     *
     * @return Utilisateurs
     */
    public function setVilleEntreprise($villeEntreprise)
    {
        $this->ville_entreprise = $villeEntreprise;

        return $this;
    }

    /**
     * Get villeEntreprise
     *
     * @return string
     */
    public function getVilleEntreprise()
    {
        return $this->ville_entreprise;
    }

    /**
     * Set adresseEntreprise
     *
     * @param string $adresseEntreprise
     *
     * @return Utilisateurs
     */
    public function setAdresseEntreprise($adresseEntreprise)
    {
        $this->adresse_entreprise = $adresseEntreprise;

        return $this;
    }

    /**
     * Get adresseEntreprise
     *
     * @return string
     */
    public function getAdresseEntreprise()
    {
        return $this->adresse_entreprise;
    }

    /**
     * Set rueEntreprise
     *
     * @param string $rueEntreprise
     *
     * @return Utilisateurs
     */
    public function setRueEntreprise($rueEntreprise)
    {
        $this->rue_entreprise = $rueEntreprise;

        return $this;
    }

    /**
     * Get rueEntreprise
     *
     * @return string
     */
    public function getRueEntreprise()
    {
        return $this->rue_entreprise;
    }

    /**
     * Set cpEntreprise
     *
     * @param integer $cpEntreprise
     *
     * @return Utilisateurs
     */
    public function setCpEntreprise($cpEntreprise)
    {
        $this->cp_entreprise = $cpEntreprise;

        return $this;
    }

    /**
     * Get cpEntreprise
     *
     * @return integer
     */
    public function getCpEntreprise()
    {
        return $this->cp_entreprise;
    }

    /**
     * Set telephoneEntreprise
     *
     * @param float $telephoneEntreprise
     *
     * @return Utilisateurs
     */
    public function setTelephoneEntreprise($telephoneEntreprise)
    {
        $this->telephone_entreprise = $telephoneEntreprise;

        return $this;
    }

    /**
     * Get telephoneEntreprise
     *
     * @return float
     */
    public function getTelephoneEntreprise()
    {
        return $this->telephone_entreprise;
    }

    /**
     * Set telephonefixEntreprise
     *
     * @param float $telephonefixEntreprise
     *
     * @return Utilisateurs
     */
    public function setTelephonefixEntreprise($telephonefixEntreprise)
    {
        $this->telephonefix_entreprise = $telephonefixEntreprise;

        return $this;
    }

    /**
     * Get telephonefixEntreprise
     *
     * @return float
     */
    public function getTelephonefixEntreprise()
    {
        return $this->telephonefix_entreprise;
    }

    /**
     * Set image
     *
     * @param \Kountac\KountacBundle\Entity\Media $image
     *
     * @return Utilisateurs
     */
    public function setImage(\Kountac\KountacBundle\Entity\Media $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Kountac\KountacBundle\Entity\Media
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add achat
     *
     * @param \Kountac\KountacBundle\Entity\Achats $achat
     *
     * @return Utilisateurs
     */
    public function addAchat(\Kountac\KountacBundle\Entity\Achats $achat)
    {
        $this->achats[] = $achat;

        return $this;
    }

    /**
     * Remove achat
     *
     * @param \Kountac\KountacBundle\Entity\Achats $achat
     */
    public function removeAchat(\Kountac\KountacBundle\Entity\Achats $achat)
    {
        $this->achats->removeElement($achat);
    }

    /**
     * Get achats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAchats()
    {
        return $this->achats;
    }

    /**
     * Add commandeUtilisateur
     *
     * @param \Kountac\KountacBundle\Entity\Commandes $commandeUtilisateur
     *
     * @return Utilisateurs
     */
    public function addCommandeUtilisateur(\Kountac\KountacBundle\Entity\Commandes $commandeUtilisateur)
    {
        $this->commande_utilisateur[] = $commandeUtilisateur;

        return $this;
    }

    /**
     * Remove commandeUtilisateur
     *
     * @param \Kountac\KountacBundle\Entity\Commandes $commandeUtilisateur
     */
    public function removeCommandeUtilisateur(\Kountac\KountacBundle\Entity\Commandes $commandeUtilisateur)
    {
        $this->commande_utilisateur->removeElement($commandeUtilisateur);
    }

    /**
     * Get commandeUtilisateur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandeUtilisateur()
    {
        return $this->commande_utilisateur;
    }

    /**
     * Add commandeMarque
     *
     * @param \Kountac\KountacBundle\Entity\Commandes $commandeMarque
     *
     * @return Utilisateurs
     */
    public function addCommandeMarque(\Kountac\KountacBundle\Entity\Commandes $commandeMarque)
    {
        $this->commande_marque[] = $commandeMarque;

        return $this;
    }

    /**
     * Remove commandeMarque
     *
     * @param \Kountac\KountacBundle\Entity\Commandes $commandeMarque
     */
    public function removeCommandeMarque(\Kountac\KountacBundle\Entity\Commandes $commandeMarque)
    {
        $this->commande_marque->removeElement($commandeMarque);
    }

    /**
     * Get commandeMarque
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandeMarque()
    {
        return $this->commande_marque;
    }

    /**
     * Set servicePaiement
     *
     * @param \Kountac\KountacBundle\Entity\ServicePaiement $servicePaiement
     *
     * @return Utilisateurs
     */
    public function setServicePaiement(\Kountac\KountacBundle\Entity\ServicePaiement $servicePaiement = null)
    {
        $this->service_paiement = $servicePaiement;

        return $this;
    }

    /**
     * Get servicePaiement
     *
     * @return \Kountac\KountacBundle\Entity\ServicePaiement
     */
    public function getServicePaiement()
    {
        return $this->service_paiement;
    }

    /**
     * Add mesure
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Mesures $mesure
     *
     * @return Utilisateurs
     */
    public function addMesure(\Utilisateurs\UtilisateursBundle\Entity\Mesures $mesure)
    {
        $this->mesures[] = $mesure;

        return $this;
    }

    /**
     * Remove mesure
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Mesures $mesure
     */
    public function removeMesure(\Utilisateurs\UtilisateursBundle\Entity\Mesures $mesure)
    {
        $this->mesures->removeElement($mesure);
    }

    /**
     * Get mesures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMesures()
    {
        return $this->mesures;
    }

    /**
     * Set serviceLivraison
     *
     * @param \Kountac\KountacBundle\Entity\ServiceLivraison $serviceLivraison
     *
     * @return Utilisateurs
     */
    public function setServiceLivraison(\Kountac\KountacBundle\Entity\ServiceLivraison $serviceLivraison = null)
    {
        $this->service_livraison = $serviceLivraison;

        return $this;
    }

    /**
     * Get serviceLivraison
     *
     * @return \Kountac\KountacBundle\Entity\ServiceLivraison
     */
    public function getServiceLivraison()
    {
        return $this->service_livraison;
    }

    /**
     * Add reservation
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $reservation
     *
     * @return Utilisateurs
     */
    public function addReservation(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $reservation)
    {
        $this->reservation[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $reservation
     */
    public function removeReservation(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $reservation)
    {
        $this->reservation->removeElement($reservation);
    }

    /**
     * Get reservation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Add produit1Marque
     *
     * @param \Kountac\KountacBundle\Entity\Produits_1 $produit1Marque
     *
     * @return Utilisateurs
     */
    public function addProduit1Marque(\Kountac\KountacBundle\Entity\Produits_1 $produit1Marque)
    {
        $this->produit_1_marque[] = $produit1Marque;

        return $this;
    }

    /**
     * Remove produit1Marque
     *
     * @param \Kountac\KountacBundle\Entity\Produits_1 $produit1Marque
     */
    public function removeProduit1Marque(\Kountac\KountacBundle\Entity\Produits_1 $produit1Marque)
    {
        $this->produit_1_marque->removeElement($produit1Marque);
    }

    /**
     * Get produit1Marque
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduit1Marque()
    {
        return $this->produit_1_marque;
    }

    /**
     * Add reservationMarque
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $reservationMarque
     *
     * @return Utilisateurs
     */
    public function addReservationMarque(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $reservationMarque)
    {
        $this->reservation_marque[] = $reservationMarque;

        return $this;
    }

    /**
     * Remove reservationMarque
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $reservationMarque
     */
    public function removeReservationMarque(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $reservationMarque)
    {
        $this->reservation_marque->removeElement($reservationMarque);
    }

    /**
     * Get reservationMarque
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservationMarque()
    {
        return $this->reservation_marque;
    }

    /**
     * Set descriptionEntreprise
     *
     * @param string $descriptionEntreprise
     *
     * @return Utilisateurs
     */
    public function setDescriptionEntreprise($descriptionEntreprise)
    {
        $this->description_entreprise = $descriptionEntreprise;

        return $this;
    }

    /**
     * Get descriptionEntreprise
     *
     * @return string
     */
    public function getDescriptionEntreprise()
    {
        return $this->description_entreprise;
    }

    /**
     * Add mannequin
     *
     * @param \Kountac\KountacBundle\Entity\Mannequin $mannequin
     *
     * @return Utilisateurs
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

    /**
     * Set departement
     *
     * @param string $departement
     *
     * @return Utilisateurs
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return string
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set digicode
     *
     * @param float $digicode
     *
     * @return Utilisateurs
     */
    public function setDigicode($digicode)
    {
        $this->digicode = $digicode;

        return $this;
    }

    /**
     * Get digicode
     *
     * @return float
     */
    public function getDigicode()
    {
        return $this->digicode;
    }
    
    /**
     * Set dateajout
     *
     * @param \DateTime $dateajout
     *
     * @return Produits_1
     */
    public function setDateajout($dateajout)
    {
        $this->dateajout = $dateajout;

        return $this;
    }

    /**
     * Get dateajout
     *
     * @return \DateTime
     */
    public function getDateajout()
    {
        return $this->dateajout;
    }
    
    /**
     * Set newsletter
     *
     * @param boolean $newsletter
     *
     * @return Utilisateurs
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return boolean
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }
}
