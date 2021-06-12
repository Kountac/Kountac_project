<?php

namespace Kountac\KountacBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use DOMDocument;
use Utilisateurs\UtilisateursBundle\Repository\UtilisateursRepository;
use Utilisateurs\UtilisateursBundle\Form\RegistrationpopupType;
use Kountac\KountacBundle\Form\NewsletterType;

class HomepageController extends Controller
{  
     
    /* public function localisationAction()
    {

        $session = $this->getRequest()->getSession();
        // Code for Geolocalisation by ChrisME 
        $pays = "";
        $ip = $_SERVER['REMOTE_ADDR']; // Recuperation de l'IP du visiteur
        $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip)); //connection au serveur de ip-api.com et recuperation des données
        //var_dump($query);
        if($query && $query['status'] == 'success') 
        {
            //code avec les variables
            //echo "Bonjour visiteur de " . $query['country'] . "," . $query['city'];
            $pays = $query['country'];
        }

        if($pays == "France")
        {
            $session->set('euro', '1');
            
            if ($session->has('livre'))
                $session->remove('livre');
        
            if ($session->has('cfa'))
                $session->remove('cfa');
            
            if ($session->has('all'))
                $session->remove('all');
            
            if ($session->has('naira'))
                $session->remove('naira');
            
            if ($session->has('usa'))
                $session->remove('usa');

        } else if($pays == "Germany")
        {
            $session->set('all', '1');
        
            if ($session->has('cfa'))
                $session->remove('cfa');
            
            if ($session->has('livre'))
                $session->remove('livre');
            
            if ($session->has('euro'))
                $session->remove('euro');
            
            if ($session->has('usa'))
                $session->remove('usa');
            
            if ($session->has('naira'))
                $session->remove('naira');

        } else if($pays == "United Kingdom")
        {
            $session->set('livre', '1');
        
            if ($session->has('euro'))
                $session->remove('euro');
            
            if ($session->has('cfa'))
                $session->remove('cfa');
            
            if ($session->has('all'))
                $session->remove('all');
            
            if ($session->has('usa'))
                $session->remove('usa');
            
            if ($session->has('naira'))
                $session->remove('naira');
                
        } else if($pays == "Cameroon")
        {
            $session->set('cfa', '1');
        
            if ($session->has('euro'))
                $session->remove('euro');
            
            if ($session->has('livre'))
                $session->remove('livre');
            
            if ($session->has('all'))
                $session->remove('all');
            
            if ($session->has('usa'))
                $session->remove('usa');
            
            if ($session->has('naira'))
                $session->remove('naira');
                
        } else if($pays == "United states")
        {
            $session->set('usa', '1');
        
            if ($session->has('euro'))
                $session->remove('euro');
            
            if ($session->has('livre'))
                $session->remove('livre');
            
            if ($session->has('all'))
                $session->remove('all');
            
            if ($session->has('cfa'))
                $session->remove('cfa');
            
            if ($session->has('naira'))
                $session->remove('naira');

        } else if($pays == "Nigeria")
        {
            $session->set('naira', '1');
        
            if ($session->has('euro'))
                $session->remove('euro');
            
            if ($session->has('livre'))
                $session->remove('livre');
            
            if ($session->has('all'))
                $session->remove('all');
            
            if ($session->has('usa'))
                $session->remove('usa');
            
            if ($session->has('cfa'))
                $session->remove('cfa');

        } else if($pays == "")
        {
            $session->set('cfa', '1');
        
            if ($session->has('euro'))
                $session->remove('euro');
            
            if ($session->has('livre'))
                $session->remove('livre');
            
            if ($session->has('all'))
                $session->remove('all');
            
            if ($session->has('usa'))
                $session->remove('usa');
            
            if ($session->has('naira'))
                $session->remove('naira');
                
            /*$session->set('euro', '1');
        
            if ($session->has('cfa'))
                $session->remove('cfa');
            
            if ($session->has('livre'))
                $session->remove('livre');
            
            if ($session->has('all'))
                $session->remove('all');
            
            if ($session->has('usa'))
                $session->remove('usa');
            
            if ($session->has('naira'))
                $session->remove('naira');

        }else
        {
            $session->set('euro', '1');
        
            if ($session->has('cfa'))
                $session->remove('cfa');
            
            if ($session->has('livre'))
                $session->remove('livre');
            
            if ($session->has('all'))
                $session->remove('all');
            
            if ($session->has('usa'))
                $session->remove('usa');
            
            if ($session->has('naira'))
                $session->remove('naira');
        }

        return new Response("ok");
    }
*/
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        
        include 'localisation.php';
        
        //$produits = $em->getRepository('KountacBundle:Produits_1')->findAll(); 
        //$produitsCategorie = $em->getRepository('KountacBundle:Produits_1')->findBy(['id' => 'DESC']);  
        //$images = $em->getRepository('KountacBundle:Media_motif')->getImagesWithPath1();
        $images = $em->getRepository('KountacBundle:Media_motif')->findAll();
                
        $mannequins = $em->getRepository('KountacBundle:Mannequin')->findAll();        
        $populaires = $em->getRepository('KountacBundle:Produits_1')->getProduitsByPopularite();
        $nouveaux = $em->getRepository('KountacBundle:Produits_1')->getProduitsByNouveaute();
        $reductions = $em->getRepository('KountacBundle:Produits_2')->getProduitsByReduction(); 
        $dernieresVentes = $em->getRepository('KountacBundle:Produits_1')->getProduitsByPopulariteTime();
        
        $number = $em->getRepository('KountacBundle:Produits_2')->countProduct(); // le nombre de produit niveau 2
        
        $val = random_int(1, $number);
        //var_dump($val);die();
        if ($val >=1000)
            $produitsCategorie = $em->getRepository('KountacBundle:Produits_2')->getAllSup($val);
        else
            $produitsCategorie = $em->getRepository('KountacBundle:Produits_2')->getAllInf($val);
                //var_dump($val);die();
        
        //$managedCurrencies = $this->container->getParameter('lexik_currency.currencies.managed');
        //var_dump($managedCurrencies);die();
        //shuffle($produitsCategorie);
        
        // Tentative de copie des prix de prodiut /* Damien */
        $all_produits = $em->getRepository('KountacBundle:Produits_2')->getAllProductPriceNull();  // Tous les produits de L'entité Produits_2
        //var_dump($all_produits);die();
        foreach ($all_produits as $produit) {
            $pays_marque = $produit->getProduit1()->getMarque()->getPaysEntreprise();
            $pays_currency = $em->getRepository('KountacBundle:Pays')->findOneByCode($pays_marque);
            $device_produit = $pays_currency->getDevise()->getCode();
            if ($device_produit == "EUR"){
                if($pays_currency->getCode() == "DE" ){
                    $prix = $produit->getAllprix();
                    $prix_commande = $produit->getAllprixCommande();
                    $precommande = $produit->getAllprecommande();

                    $produit->setPrix($prix);
                    $produit->setPrixCommande($prix_commande);
                    $produit->setPrecommande($precommande);
                    $produit->setDevise($device_produit);
                    //var_dump("Origine Allemande donc all");
                }elseif($pays_currency->getCode() == "US" ){
                    $prix = $produit->getUsaprix();
                    $prix_commande = $produit->getUsaprixCommande();
                    $precommande = $produit->getUsaprecommande();

                    $produit->setPrix($prix);
                    $produit->setPrixCommande($prix_commande);
                    $produit->setPrecommande($precommande);
                    $produit->setDevise($device_produit);
                   // var_dump("Origine Américaine donc usa");
                }elseif($pays_currency->getCode() == "GB" ){
                    $prix = $produit->getLivreprix();
                    $prix_commande = $produit->getLivreprixCommande();
                    $precommande = $produit->getLivreprecommande();

                    $produit->setPrix($prix);
                    $produit->setPrixCommande($prix_commande);
                    $produit->setPrecommande($precommande);
                    $produit->setDevise($device_produit);
                    //var_dump("Origine Anglaise donc livre");
                }elseif($pays_currency->getCode() == "NG" ){
                    $prix = $produit->getNairaprix();
                    $prix_commande = $produit->getNairaprixCommande();
                    $precommande = $produit->getNairaprecommande();

                    $produit->setPrix($prix);
                    $produit->setPrixCommande($prix_commande);
                    $produit->setPrecommande($precommande);
                    $produit->setDevise($device_produit);
                    //var_dump("Origine Nigériane donc naira");
                }else{
                    $prix = $produit->getEuroprix();
                    $prix_commande = $produit->getEuroprixCommande();
                    $precommande = $produit->getEuroprecommande();

                    $produit->setPrix($prix);
                    $produit->setPrixCommande($prix_commande);
                    $produit->setPrecommande($precommande);
                    $produit->setDevise($device_produit);
                    //var_dump($produit->getPrix() . "(" . $produit->getDevise() . ")");
                }
                
            }elseif ($device_produit == "XAF" || $device_produit == "XOF"){
                $prix = $produit->getCfaprix();
                $prix_commande = $produit->getCfaprixCommande();
                $precommande = $produit->getCfaprecommande();
                
                $produit->setPrix($prix);
                $produit->setPrixCommande($prix_commande);
                $produit->setDevise($device_produit);
                //var_dump($produit->getPrix() . "(" . $produit->getDevise() . ")");
            }
            //var_dump($pays_currency->getDevise()->getCode());
       
        $em->persist($produit);
        $em->flush();    
        }
       
        //die();
        
        // FIN code Proposé par Damien
        
        if ($session->has('panier'))
            $panier = $session->get('panier');        
        else
        {
            $panier = false;
            $session->remove('panier');
        }


        /*$paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $produitsCategorie, 
            $this->get('request')->query->getInt('page', 1),
            24
        );*/

        $newPopulaires = array();
        $newReductions = array();
        $newNouveaux = array();
        $newDernieresVentes = array();
        $newAll = array();

        foreach ($populaires as $produit1) {
            foreach ($produit1->getProduit2() as $produit) {
                $tab = array(
                    "id" => $produit->getId(),
                    "id_quick" => $produit->getId().'pop',
                    "prix" => $produit->getPrix(),
                    "prixCommande" => $produit->getPrixCommande(),
                    "devise" => $produit->getDevise(),
                    "matiere" => $produit->getProduit1()->getMatiere(),
                    "description" => $produit->getProduit1()->getDescription(),
                    "reduction" => $produit->getReduction(),
                    "libelle" => $produit->getLibelle(),
                    "produit1Nom" => $produit->getProduit1()->getNom(),
                    "prod" => $produit,
                    "produit1MarqueM" => $produit->getProduit1()->getMarque()->getMarque(),
                    "produit1ImageAssetM" => $produit->getProduit1()->getMarque()->getImage()->getAssetPath()
                );
                array_push($newPopulaires, $tab);
            }
        }

        foreach ($reductions as $produit) {
            $tab = array(
                "id" => $produit->getId(),
                "id_quick" => $produit->getId().'red',
                "prix" => $produit->getPrix(),
                "prixCommande" => $produit->getPrixCommande(),
                "devise" => $produit->getDevise(),
                "reduction" => $produit->getReduction(),
                "matiere" => $produit->getProduit1()->getMatiere(),
                "description" => $produit->getProduit1()->getDescription(),
                "libelle" => $produit->getLibelle(),
                "produit1Nom" => $produit->getProduit1()->getNom(),
                "prod" => $produit,
                "produit1MarqueM" => $produit->getProduit1()->getMarque()->getMarque(),
                "produit1ImageAssetM" => $produit->getProduit1()->getMarque()->getImage()->getAssetPath()
            );
            array_push($newReductions, $tab);
        }

        foreach ($nouveaux as $produit1) {
            foreach ($produit1->getProduit2() as $produit) {
                $tab = array(
                    "id" => $produit->getId(),
                    "id_quick" => $produit->getId().'nov',
                    "prix" => $produit->getPrix(),
                    "prixCommande" => $produit->getPrixCommande(),
                    "devise" => $produit->getDevise(),
                    "reduction" => $produit->getReduction(),
                    "matiere" => $produit->getProduit1()->getMatiere(),
                    "description" => $produit->getProduit1()->getDescription(),
                    "libelle" => $produit->getLibelle(),
                    "produit1Nom" => $produit->getProduit1()->getNom(),
                    "prod" => $produit,
                    "produit1MarqueM" => $produit->getProduit1()->getMarque()->getMarque(),
                    "produit1ImageAssetM" => $produit->getProduit1()->getMarque()->getImage()->getAssetPath()
                );
                array_push($newNouveaux, $tab);
            }
        }

        foreach ($dernieresVentes as $produit1) {
            foreach ($produit1->getProduit2() as $produit) {
                $tab = array(
                    "id" => $produit->getId(),
                    "id_quick" => $produit->getId().'ven',
                    "prix" => $produit->getPrix(),
                    "prixCommande" => $produit->getPrixCommande(),
                    "devise" => $produit->getDevise(),
                    "reduction" => $produit->getReduction(),
                    "matiere" => $produit->getProduit1()->getMatiere(),
                    "description" => $produit->getProduit1()->getDescription(),
                    "libelle" => $produit->getLibelle(),
                    "produit1Nom" => $produit->getProduit1()->getNom(),
                    "prod" => $produit,
                    "produit1MarqueM" => $produit->getProduit1()->getMarque()->getMarque(),
                    "produit1ImageAssetM" => $produit->getProduit1()->getMarque()->getImage()->getAssetPath()
                );
                array_push($newDernieresVentes, $tab);
            }
        }
        
        foreach ($produitsCategorie as $produit) {
            /*
            foreach($images as $image){
                if (($image->getTop() == '0') && ($image->getProduit2()->getId() == $produit->getId())){
                    $imageTop=$image;
                }
                    
                //image.produit2 == produit.prod && image.top == '0';
            }
            */
            //var_dump($imageTop);die();
            $tab = array(
                //"image" => $imageTop,
                "id" => $produit->getId(),
                "id_quick" => $produit->getId().'all',
                "prix" => $produit->getPrix(),
                "prixCommande" => $produit->getPrixCommande(),
                "devise" => $produit->getDevise(),
                "reduction" => $produit->getReduction(),
                "matiere" => $produit->getProduit1()->getMatiere(),
                "description" => $produit->getProduit1()->getDescription(),
                "libelle" => $produit->getLibelle(),
                "produit1Nom" => $produit->getProduit1()->getNom(),
                "prod" => $produit,
                "produit1MarqueM" => $produit->getProduit1()->getMarque()->getMarque(),
                "produit1ImageAssetM" => $produit->getProduit1()->getMarque()->getImage()->getAssetPath()
            );
            array_push($newAll, $tab);
        }
        
        // form for pop up enrolment 
        $form_popup = $this->createForm(new NewsletterType());
        $activate = 1; //TO ACTIVATE THE POP UP FURTHERMORE BY AN ADMINISTRATOR
        shuffle($newPopulaires);
        shuffle($newReductions);
        shuffle($newNouveaux);
        shuffle($newDernieresVentes);
        shuffle($newAll);
        //var_dump($session->has('popup')); die();
        
        $pagination  = $this->get('knp_paginator')->paginate($newAll, $this->get('request')->query->get('page', 1),24);
        
        return $this->render('KountacBundle:Default:index2.html.twig', array('user' => $this->getUser(),
                                                                            'populaires' => $newPopulaires,
                                                                            'nouveaux' => $newNouveaux,
                                                                            'images' => $images,
                                                                            'device_cible' => $target_country,
                                                                            'mannequins' => $mannequins,
                                                                            'reductions' => $newReductions,
                                                                            //'produits2' => $produits2,
                                                                            'activate' => $activate,
                                                                            'dernieresVentes' => $newDernieresVentes,
                                                                            'form' => $form_popup->createView(),
                                                                            'popup' => $session->get('popup'),  
                                                                            'panier' => $panier,
                                                                            'pagination' => $pagination,
                                                                            ));
    }
    
    public function index_pays_selectionAction()
    {

        include 'localisation.php';

        $session = $this->getRequest()->getSession();
        //$session->set('euro', '1');
        
        $produits = $this->getDoctrine()->getManager()->getRepository('KountacBundle:Produits_1')->findAll();        
        $user = $this->getUser();
        
        if ($user != NULL)
            return $this->redirectToRoute('kountac_homepage');
        
        if (!$produits) 
            throw $this->createNotFoundException ('La page ou le produit n\'existe pas');
        
        return $this->render('KountacBundle:Default:index.html.twig', array('euro' => $session->get('euro'),
                                                                            'all' => $session->get('all'),
                                                                            'usa' => $session->get('usa'),
                                                                            'livre' => $session->get('livre'),
                                                                            'naira' => $session->get('naira'),
                                                                            'cfa' => $session->get('cfa')));
    }



    /* Function add by ChrisME */

    public function productsListAction(Request $request)
    {
        $session = $this->getRequest()->getSession();
        include 'localisation.php';

        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT a FROM AcmeMainBundle:Article a";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        // parameters to template
        return $this->render('KountacBundle:Default:index2.html.twig', array('pagination' => $pagination));
    }

}
