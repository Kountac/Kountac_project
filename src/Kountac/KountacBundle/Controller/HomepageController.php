<?php

namespace Kountac\KountacBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        
        //$produits = $em->getRepository('KountacBundle:Produits_1')->findAll(); 
        $produits = $em->getRepository('KountacBundle:Produits_1')->findBy([], ['id' => 'DESC']);        
        $images = $em->getRepository('KountacBundle:Media_motif')->findAll();        
        $mannequins = $em->getRepository('KountacBundle:Mannequin')->findAll();        
        $populaires = $em->getRepository('KountacBundle:Produits_1')->getProduitsByPopularite();
        $nouveaux = $em->getRepository('KountacBundle:Produits_1')->getProduitsByNouveaute();
        $reductions = $em->getRepository('KountacBundle:Produits_2')->getProduitsByReduction(); 
        $dernieresVentes = $em->getRepository('KountacBundle:Produits_1')->getProduitsByPopulariteTime();
        $produitsCategorie = $em->getRepository('KountacBundle:Produits_2')->findAll();
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
