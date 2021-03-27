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
     
    public function localisationAction()
    {

        $session = $this->getRequest()->getSession();
        /* Code for Geolocalisation by ChrisME */
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
                $session->remove('naira');*/

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

    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();

        include 'localisation.php';
        
        //$produits = $em->getRepository('KountacBundle:Produits_1')->findAll(); 
        $produits = $em->getRepository('KountacBundle:Produits_1')->findBy([], ['id' => 'DESC']);  
        $images = $em->getRepository('KountacBundle:Media_motif')->findAll();        
        $mannequins = $em->getRepository('KountacBundle:Mannequin')->findAll();        
        $populaires = $em->getRepository('KountacBundle:Produits_1')->getProduitsByPopularite();
        $nouveaux = $em->getRepository('KountacBundle:Produits_1')->getProduitsByNouveaute();
        $reductions = $em->getRepository('KountacBundle:Produits_2')->getProduitsByReduction(); 
        $dernieresVentes = $em->getRepository('KountacBundle:Produits_1')->getProduitsByPopulariteTime();
        $produitsCategorie = $em->getRepository('KountacBundle:Produits_2')->getAll();
        
        //shuffle($produitsCategorie);
        $produits2  = $this->get('knp_paginator')->paginate($produitsCategorie, $this->get('request')->query->get('page', 1),24);
        
        if ($session->has('panier'))
            $panier = $session->get('panier');        
        else
        {
            $panier = false;
            $session->remove('panier');
        }


        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $produitsCategorie, /* query NOT result */
            $this->get('request')->query->getInt('page', 1)/*page number*/,
            24/*limit per page*/
        );

        $newPopulaires = array();
        $newReductions = array();
        $newNouveaux = array();
        $newDernieresVentes = array();

        foreach ($populaires as $produit1) {
            foreach ($produit1->getProduit2() as $produit) {
                $tab = array(
                    "id" => $produit->getId(),
                    "cfaprix" => $produit->getCfaprix(),
                    "europrix" => $produit->getEuroprix(),
                    "allprix" => $produit->getAllprix(),
                    "livreprix" => $produit->getLivreprix(),
                    "nairaprix" => $produit->getNairaprix(),
                    "usaprix" => $produit->getUsaprix(),
                    "reduction" => $produit->getReduction(),
                    "cfaprixCommande" => $produit->getCfaprixCommande(),
                    "europrixCommande" => $produit->getEuroprixCommande(),
                    "allprixCommande" => $produit->getAllprixCommande(),
                    "livreprixCommande" => $produit->getLivreprixCommande(),
                    "nairaprixCommande" => $produit->getNairaprixCommande(),
                    "usaprixCommande" => $produit->getUsaprixCommande(),
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
                "cfaprix" => $produit->getCfaprix(),
                    "europrix" => $produit->getEuroprix(),
                    "allprix" => $produit->getAllprix(),
                    "livreprix" => $produit->getLivreprix(),
                    "nairaprix" => $produit->getNairaprix(),
                    "usaprix" => $produit->getUsaprix(),
                "reduction" => $produit->getReduction(),
                "cfaprixCommande" => $produit->getCfaprixCommande(),
                    "europrixCommande" => $produit->getEuroprixCommande(),
                    "allprixCommande" => $produit->getAllprixCommande(),
                    "livreprixCommande" => $produit->getLivreprixCommande(),
                    "nairaprixCommande" => $produit->getNairaprixCommande(),
                    "usaprixCommande" => $produit->getUsaprixCommande(),
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
                    "cfaprix" => $produit->getCfaprix(),
                    "europrix" => $produit->getEuroprix(),
                    "allprix" => $produit->getAllprix(),
                    "livreprix" => $produit->getLivreprix(),
                    "nairaprix" => $produit->getNairaprix(),
                    "usaprix" => $produit->getUsaprix(),
                    "reduction" => $produit->getReduction(),
                    "cfaprixCommande" => $produit->getCfaprixCommande(),
                    "europrixCommande" => $produit->getEuroprixCommande(),
                    "allprixCommande" => $produit->getAllprixCommande(),
                    "livreprixCommande" => $produit->getLivreprixCommande(),
                    "nairaprixCommande" => $produit->getNairaprixCommande(),
                    "usaprixCommande" => $produit->getUsaprixCommande(),
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
                    "cfaprix" => $produit->getCfaprix(),
                    "europrix" => $produit->getEuroprix(),
                    "allprix" => $produit->getAllprix(),
                    "livreprix" => $produit->getLivreprix(),
                    "nairaprix" => $produit->getNairaprix(),
                    "usaprix" => $produit->getUsaprix(),
                    "reduction" => $produit->getReduction(),
                    "cfaprixCommande" => $produit->getCfaprixCommande(),
                    "europrixCommande" => $produit->getEuroprixCommande(),
                    "allprixCommande" => $produit->getAllprixCommande(),
                    "livreprixCommande" => $produit->getLivreprixCommande(),
                    "nairaprixCommande" => $produit->getNairaprixCommande(),
                    "usaprixCommande" => $produit->getUsaprixCommande(),
                    "libelle" => $produit->getLibelle(),
                    "produit1Nom" => $produit->getProduit1()->getNom(),
                    "prod" => $produit,
                    "produit1MarqueM" => $produit->getProduit1()->getMarque()->getMarque(),
                    "produit1ImageAssetM" => $produit->getProduit1()->getMarque()->getImage()->getAssetPath()
                );
                array_push($newDernieresVentes, $tab);
            }
        }
        
        // form for pop up enrolment 
        $form_popup = $this->createForm(new NewsletterType());
        $activate = 1; //TO ACTIVATE THE POP UP FURTHERMORE BY A ADMINISTRATOR
        shuffle($newPopulaires);
        shuffle($newReductions);
        shuffle($newNouveaux);
        shuffle($newDernieresVentes);

        return $this->render('KountacBundle:Default:index2.html.twig', array('produits' => $produits,'user' => $this->getUser(),
                                                                            'populaires' => $newPopulaires,
                                                                            'nouveaux' => $newNouveaux,
                                                                            'images' => $images,
                                                                            'mannequins' => $mannequins,
                                                                            'reductions' => $newReductions,
                                                                            'produits2' => $produits2,
                                                                            'activate' => '0',
                                                                            'dernieresVentes' => $newDernieresVentes,
                                                                            'form' => $form_popup->createView(),
                                                                            'popup' => $session->get('popup'),  
                                                                            'panier' => $panier,
                                                                            'euro' => $session->get('euro'),
                                                                            'all' => $session->get('all'),
                                                                            'usa' => $session->get('usa'),
                                                                            'livre' => $session->get('livre'),
                                                                            'naira' => $session->get('naira'),
                                                                            'pagination' => $pagination,
                                                                            'cfa' => $session->get('cfa')));
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
