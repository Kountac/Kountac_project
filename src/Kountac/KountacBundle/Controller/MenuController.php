<?php

namespace Kountac\KountacBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Kountac\KountacBundle\Form\NewslettersType;
use Kountac\KountacBundle\Form\Taille_PoidsType;


class MenuController extends Controller
{
  
    public function categorieAction()
    {
        $em = $this->container->get('doctrine');
        $categories = $em->getRepository('KountacBundle:Categories')->getCategoriesByName();
        $looks = $em->getRepository('KountacBundle:Idees_looks')->findAll();
        
        return $this->render('KountacBundle:Menu:categories.html.twig', array('categories' => $categories,'looks' => $looks));
    }
    
    public function categorieAdminAction()
    {
        $em = $this->container->get('doctrine');
        $looks = $em->getRepository('KountacBundle:Idees_looks')->findAll();
        $categories = $em->getRepository('KountacBundle:Categories')->getCategoriesByName();
        
        
        return $this->render('KountacBundle:Menu:categoriesAdmin.html.twig', array('categories' => $categories,'looks' => $looks,));
    }
    
    public function produitsPopulairesMenuAction()
    {
        $em = $this->container->get('doctrine');
        $produitsPopulaires = $em->getRepository('KountacBundle:Produits_2')->getProduitsByPopulariteMenu();
        
        return $this->render('KountacBundle:Menu:populaires.html.twig', array(  'produitsPopulaires' => $produitsPopulaires,
                                                                                'euro' => $this->getRequest()->getSession()->get('euro'),
                                                                                'all' => $this->getRequest()->getSession()->get('all'),                                                                    
                                                                                'livre' => $this->getRequest()->getSession()->get('livre'),
                                                                                'usa' => $this->getRequest()->getSession()->get('usa'),
                                                                                'naira' => $this->getRequest()->getSession()->get('naira'),
                                                                                'cfa' => $this->getRequest()->getSession()->get('cfa')));
    }

    public function categorieMobileAction()
    {
        $em = $this->container->get('doctrine');
        $categories = $em->getRepository('KountacBundle:Categories')->getCategoriesByName();
        $looks = $em->getRepository('KountacBundle:Idees_looks')->findAll();
        
        return $this->render('KountacBundle:Menu:categoriesMobile.html.twig', array('categories' => $categories,'looks' => $looks,));
    }
    
    public function headerLinkAction()
    {
        $session = $this->getRequest()->getSession();
        $em = $this->container->get('doctrine');
        
        if (!$session->has('souhait'))
            $session->set('souhait', array());
        
        $souhaitProduits = $em->getRepository('KountacBundle:Produits_1')->findArray(array_keys($session->get('souhait')));

        return $this->render('KountacBundle:Menu:headerLink.html.twig', array('souhaitProduits' => $souhaitProduits));
    }
    
    public function usersHeadersAction()
    {
        $user = $this->getUser();
        return $this->render('KountacBundle:Menu:usersHeader.html.twig', array('user' => $user));
    }
    
    public function menuPendingAchatAction()
    {
        $session = $this->getRequest()->getSession();
        $user = $this->getUser();        
        $achat = $session->get('achat');        
           
        return $this->render('FOSUserBundle:Profile:Navigation/menuPendingAchat.html.twig', array('achat'=> $achat,
                                                                                   'user' => $user));
    }
    
    public function menuPanierAction()
    {
        $em = $this->getDoctrine()->getManager();
        $images = $em->getRepository('KountacBundle:Media_motif')->findAll();
        $session = $this->getRequest()->getSession();
        
        if (!$session->has('panier'))
            $session->set('panier', array());

        $produits = $em->getRepository('KountacBundle:Produits_1')->findArray(array_keys($session->get('panier')));
   
        return $this->render('FOSUserBundle:Profile:Navigation/menuPanier.html.twig', array('produits'=> $produits,'images'=> $images));
    }
    
    public function newAction($categorie)
    {
        $session = $this->getRequest()->getSession();
        $session->set('categorie', '1');
        $session->remove('collection');
        $session->remove('recherche');
        $em = $this->getDoctrine()->getManager();
        $categorieNom = $em->getRepository('KountacBundle:Categories')->find($categorie)->getNom(); 
        
        $categories = $em->getRepository('KountacBundle:Categories')->findAll();
        $mannequins = $em->getRepository('KountacBundle:Mannequin')->findAll();
        $images = $em->getRepository('KountacBundle:Media_motif')->findAll();
        $marques = $em->getRepository('UtilisateursBundle:Utilisateurs')->getAllMarques();
        $motifs = $em->getRepository('KountacBundle:Libelles_motif')->findAll();
        $form_taillePoids = $this->createForm(new Taille_PoidsType());    
        $europrix = $em->getRepository('KountacBundle:Produits_2')->getPrixEuro();
        $cfaprix = $em->getRepository('KountacBundle:Produits_2')->getPrixCFA();
        $usaprix = $em->getRepository('KountacBundle:Produits_2')->getPrixUSA();
        $livreprix = $em->getRepository('KountacBundle:Produits_2')->getPrixLivre();
        $nairaprix = $em->getRepository('KountacBundle:Produits_2')->getPrixNaira();
        $allprix = $em->getRepository('KountacBundle:Produits_2')->getPrixAll();                   
        
        $categories_enfants = $em->getRepository('KountacBundle:Categories')->find($categorie)->getChildren();
        
        $produitsNews = $em->getRepository('KountacBundle:Produits_2')->byNewCategorie($categorie, $categories_enfants);
        $produits  = $this->get('knp_paginator')->paginate($produitsNews,$this->get('request')->query->get('page', 1),20);

        

        return $this->render('KountacBundle:Default:produits/all_products.html.twig', array('produits' => $produits,
                                                                                            'images' => $images,
                                                                                            'nom' => "Nouveautés ".$categorieNom,
                                                                                            'marques' => $marques, 
                                                                                            'form' => $form_taillePoids->createView(),
                                                                                            'motifs' => $motifs,
                                                                                            'categories' => $categories,
                                                                                            'mannequins' => $mannequins,
                                                                                            'euro' => $this->getRequest()->getSession()->get('euro'),
                                                                                            'all' => $this->getRequest()->getSession()->get('all'),                                                                                
                                                                                            'livre' => $this->getRequest()->getSession()->get('livre'),
                                                                                            'usa' => $this->getRequest()->getSession()->get('usa'),
                                                                                            'naira' => $this->getRequest()->getSession()->get('naira'),
                                                                                            'cfa' => $this->getRequest()->getSession()->get('cfa'),
                                                                                            'cfaprix' => $cfaprix,
                                                                                            'europrix' => $europrix,
                                                                                            'usaprix' => $usaprix,
                                                                                            'livreprix' => $livreprix,
                                                                                            'nairaprix' => $nairaprix,
                                                                                            'allprix' => $allprix,
                                                                                            'categorie' => $session->get('categorie')));
    }
    
    public function destockageAction($categorie)
    {
        $session = $this->getRequest()->getSession();
        $session->set('categorie', '1');
        $session->remove('collection');
        $session->remove('recherche');
        $em = $this->getDoctrine()->getManager();
        $categorieNom = $em->getRepository('KountacBundle:Categories')->find($categorie)->getNom(); 
        
        $categories = $em->getRepository('KountacBundle:Categories')->findAll();
        $mannequins = $em->getRepository('KountacBundle:Mannequin')->findAll();
        $marques = $em->getRepository('UtilisateursBundle:Utilisateurs')->getAllMarques();
        $motifs = $em->getRepository('KountacBundle:Libelles_motif')->findAll();
        $form_taillePoids = $this->createForm(new Taille_PoidsType());                       
        
        $categories_enfants = $em->getRepository('KountacBundle:Categories')->find($categorie)->getChildren();
        
        $produitsNews = $em->getRepository('KountacBundle:Produits_2')->byBestCategorie($categorie, $categories_enfants);
        $produits  = $this->get('knp_paginator')->paginate($produitsNews,$this->get('request')->query->get('page', 1),20);

        return $this->render('KountacBundle:Default:produits/all_products.html.twig', array('produits' => $produits,
                                                                                            'nom' => "Meilleurs soldes des produits -".$categorieNom,
                                                                                            'marques' => $marques, 
                                                                                            'form' => $form_taillePoids->createView(),
                                                                                            'motifs' => $motifs,
                                                                                            'categories' => $categories,
                                                                                            'mannequins' => $mannequins,
                                                                                            'euro' => $this->getRequest()->getSession()->get('euro'),
                                                                                            'all' => $this->getRequest()->getSession()->get('all'),                                                                                
                                                                                            'livre' => $this->getRequest()->getSession()->get('livre'),
                                                                                            'usa' => $this->getRequest()->getSession()->get('usa'),
                                                                                            'naira' => $this->getRequest()->getSession()->get('naira'),
                                                                                            'cfa' => $this->getRequest()->getSession()->get('cfa'),
                                                                                            'categorie' => $session->get('categorie')));
    }
    
    public function newsletterFooterAction(Request $request)
    {
        $newsletter = new \Kountac\KountacBundle\Entity\Newsletters();
        
        $form = $this->createForm(new NewslettersType(), $newsletter);
        $form->handleRequest($request);

        if ($request->getMethod() == 'POST') 
        {
            $email = $form["email"]->getData();
            $comment = \Swift_Message::newInstance()
                ->setSubject('Abonnement newsletter') 
                ->setFrom(array($email))
                ->setTo('contact@kountac.fr')
                ->setCharset('utf-8')
                ->setContentType('text/html')
                ->setBody($this->renderView('UtilisateursBundle:Default:SwiftLayout/newsletter.html.twig',array(
                    'email' => $email,)));
                ;
            $this->get('mailer')->send($comment);
            $newsletter->setDate(new \DateTime('now'));
            $this->getDoctrine()->getManager()->persist($newsletter);
            $this->getDoctrine()->getManager()->flush();
            $this->get('session')->getFlashBag()->add('success','Votre demande d\'abonnement à la newsletter OrNoir de Kountac a été envoyée avec succès');
           
            return $this->redirect($this->generateUrl('kountac_homepage'));
           
        }
        
        return $this->render('KountacBundle:Menu:newsletterFooter.html.twig', array('form' => $form->createView()));
    }
    
    public function contactUsFooterAction()
    {
        
        return $this->render('KountacBundle:Menu:contactUsFooter.html.twig');
    }
    
    public function insiderFooterAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        
        $listePages = $em->getRepository('KountacBundle:Pages')->getAide();
        $pages  = $this->get('knp_paginator')->paginate($listePages,$this->get('request')->query->get('page', 1),10);
        
        return $this->render('KountacBundle:Menu:insiderFooter.html.twig', array(
            'pages' => $pages,
            'user' => $user,
        ));
    }
    
    public function informationFooterAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        
        $listePages = $em->getRepository('KountacBundle:Pages')->getInfos();
        $pages  = $this->get('knp_paginator')->paginate($listePages,$this->get('request')->query->get('page', 1),10);
        
        return $this->render('KountacBundle:Menu:informationFooter.html.twig', array(
            'pages' => $pages,
            'user' => $user,
        ));
    }
    
    public function menuCollectionFooterAction()
    {
        $em = $this->getDoctrine()->getManager();
        $collections = $em->getRepository('KountacBundle:Collections')->findAll();
        
        return $this->render('KountacBundle:Menu:collectionFooter.html.twig', array('collections' => $collections));
    }
    
}
