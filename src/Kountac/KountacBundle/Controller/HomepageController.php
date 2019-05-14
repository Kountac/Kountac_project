<?php

namespace Kountac\KountacBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DOMDocument;

class HomepageController extends Controller
{

    public function localisationAction()
    {
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


        return $this->render('KountacBundle:Default:localisation.html.twig', 
            array('serveurOK' => $serveurOK,
                  'pbx_site' => $pbx_site,
                  'pbx_rang' => $pbx_rang,
                  'pbx_identifiant' => $pbx_identifiant,
                  'pbx_total' => $pbx_total,
                  'pbx_cmd' => $pbx_cmd,
                  'pbx_porteur' => $pbx_porteur,
                  'pbx_repondre_a' => $pbx_repondre_a,
                  'pbx_retour' => $pbx_retour,
                  'pbx_effectue' => $pbx_effectue,
                  'pbx_annule' => $pbx_annule,
                  'pbx_refuse' => $pbx_refuse,
                  'dateTime' => $dateTime,
                  'hmac' => $hmac));
    }

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        
        //$produits = $em->getRepository('KountacBundle:Produits_1')->findAll(); 
        $produits = $em->getRepository('KountacBundle:Produits_1')->findBy([], ['id' => 'DESC']); 
        //$produits = $em->getRepository('KountacBundle:Produits_1')->findByRand();        
        $images = $em->getRepository('KountacBundle:Media_motif')->findAll();        
        $mannequins = $em->getRepository('KountacBundle:Mannequin')->findAll();        
        $populaires = $em->getRepository('KountacBundle:Produits_1')->getProduitsByPopularite();
        $nouveaux = $em->getRepository('KountacBundle:Produits_1')->getProduitsByNouveaute();
        $reductions = $em->getRepository('KountacBundle:Produits_2')->getProduitsByReduction(); 
        $dernieresVentes = $em->getRepository('KountacBundle:Produits_1')->getProduitsByPopulariteTime();
        $produitsCategorie = $em->getRepository('KountacBundle:Produits_2')->findByRand();
        $produits2  = $this->get('knp_paginator')->paginate($produitsCategorie, $this->get('request')->query->get('page', 1),32);
        
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




        //var_dump($produits2);die();
        return $this->render('KountacBundle:Default:index2.html.twig', array('produits' => $produits,'user' => $this->getUser(),
                                                                            'populaires' => $populaires,
                                                                            'nouveaux' => $nouveaux,
                                                                            'images' => $images,
                                                                            'mannequins' => $mannequins,
                                                                            'reductions' => $reductions,
                                                                            'produits2' => $produits2,
                                                                            'dernieresVentes' => $dernieresVentes,
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
