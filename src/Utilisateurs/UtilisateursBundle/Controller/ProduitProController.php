<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Kountac\KountacBundle\Entity\Produits_1;
use Kountac\KountacBundle\Entity\Produits_2;
use Kountac\KountacBundle\Entity\Produits_3;
use Kountac\KountacBundle\Entity\Libelles_motif;
use Kountac\KountacBundle\Entity\Mannequin;
use Kountac\KountacBundle\Form\Produits_3Type;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Produit controller.
 *
 */
class ProduitProController extends Controller
{
    /**
     * Lists all produit entities.
     *
     */
    public function indexAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $images = $em->getRepository('KountacBundle:Media_motif')->findAll();
        $mannequins = $em->getRepository('KountacBundle:Mannequin')->findAll();
        $listesProduits = $em->getRepository('KountacBundle:Produits_1')->getProduitsByMarque($user);
        
        $produits  = $this->get('knp_paginator')->paginate($listesProduits,$this->get('request')->query->get('page', 1),10);
        return $this->render('FOSUserBundle:Profile:Pro/listeMesProduits.html.twig', array(
            'produits' => $produits,
            'user' => $user,
            'images' => $images,
            'mannequins' => $mannequins,
        ));
    }
    
    /**
     * Creates a new produit entity.
     *
     */
    public function new1Action(Request $request)
    {
        $produit = new Produits_1();
        $user = $this->getUser();
        $form = $this->createForm('Kountac\KountacBundle\Form\Produits_1Type', $produit);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') 
        {
            if ($form->isSubmitted() && $form->isValid()) {
                $produit->setMarque($user);
                $produit->setDateajout(new \DateTime('now'));
                $produit->setDateupdate(new \DateTime('now'));
                $produit->setPopularite(1); 
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($produit);
                $em->flush();
                
                $this->get('session')->getFlashBag()->add('success','Nouveau produit créé avec succès');
                return $this->redirectToRoute('produit_pro_new_2', array('id' => $produit->getId()));
            }
        }
        return $this->render('FOSUserBundle:Profile:Pro/addProduits_1Pro.html.twig', array(
            'produit' => $produit,
            'user' => $user,
            'form' => $form->createView(),
        ));
    }
    
    
    /**
     * Displays a form to edit an existing produit entity.
     *
     */
    public function new_edit1Action(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit_1 = $em->getRepository('KountacBundle:Produits_1')->find($id);
        $user = $this->getUser();
        $editForm = $this->createForm('Kountac\KountacBundle\Form\Produits_1Type', $produit_1);
        $editForm->handleRequest($request);
        
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $produit_1->setDateupdate(new \DateTime('now'));
            $em->persist($produit_1);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('success','les informations de base du produit ont été modifiées avec succès');
            return $this->redirectToRoute('produit_pro_new_2', array('id' => $produit_1->getId()));        
        }

        return $this->render('FOSUserBundle:Profile:Pro/addProduits_1Pro.html.twig', array(
            'produit' => $produit_1,
            'user' => $user,
            'form' => $editForm->createView(),
        ));
    }
    
    /**
     * Creates a new produit entity.
     *
     */
    public function new2Action(Request $request, $id)
    {
        $produit = new Produits_2();
        $em = $this->getDoctrine()->getManager();
        $produit_1 = $em->getRepository('KountacBundle:Produits_1')->find($id);
        $libelles = $em->getRepository('KountacBundle:Libelles_motif')->findAll();
        $user = $this->getUser();
        $mannequins = $em->getRepository('KountacBundle:Mannequin')->findByDisponible($user);
        $form = $this->createForm('Kountac\KountacBundle\Form\Produits_2Type', $produit);
        $form->handleRequest($request);
        $form_motif = $this->createForm('Kountac\KountacBundle\Form\Libelles_motifType');
        $form_mannequin = $this->createForm('Kountac\KountacBundle\Form\MannequinType');
        $location_devise = $em->getRepository('KountacBundle:Pays')->findOneBy(['code' => $user->getPaysEntreprise()]);
        if ($request->getMethod() == 'POST') 
        {
            if ($form->isSubmitted() && $form->isValid()) {
                $produit->setProduit1($produit_1);
                $pays = $em->getRepository('KountacBundle:Pays')->findOneBy(['code' => $user->getPaysEntreprise()]);
                $produit->setDevise($pays->getDevise()->getCode());
                //var_dump($produit->getDevise());die();
                $em->persist($produit);
                $em->flush();
                $this->get('session')->getFlashBag()->add('success','Nouveau motif ajouté avec succès');
                return $this->redirectToRoute('produit_pro_new_2', array('id' => $produit->getProduit1()->getId()));
            }
        }
        return $this->render('FOSUserBundle:Profile:Pro/addProduits_2Pro.html.twig', array(
            'produit' => $produit,
            'libelles' => $libelles,
            'location_devise' => $location_devise,
            'mannequins' => $mannequins,
            'produit_1' => $produit_1,
            'user' => $user,
            'form' => $form->createView(),
            'form_motif' => $form_motif->createView(),
            'form_mannequin' => $form_mannequin->createView()
            
        ));
    }
    
    /**
     * Displays a form to edit an existing produit entity.
     *
     */
    public function new_edit2Action(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit_2 = $em->getRepository('KountacBundle:Produits_2')->find($id);
        $produit_1 = $produit_2->getProduit1();
        $editForm = $this->createForm('Kountac\KountacBundle\Form\Produits_2Type', $produit_2);
        $editForm->handleRequest($request);
        
        $produit_1->setDateupdate(new \DateTime('now'));
        $em->persist($produit_1);
        $em->persist($produit_2);
        $em->flush();

        $this->get('session')->getFlashBag()->add('success','les informations du motif ont été modifiées avec succès');
        return $this->redirectToRoute('produit_pro_new_2', array('id' => $produit_1->getId()));        
        ;
    }
    
    /**
     * Creates a new produit entity.
     *
     */
    public function new3Action($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit_2 = $em->getRepository('KountacBundle:Produits_2')->find($id);
        $produit_1 = $produit_2->getProduit1();
        $user = $this->getUser();
        $mannequins = $em->getRepository('KountacBundle:Mannequin')->findByDisponible($user);
        $images = $em->getRepository('KountacBundle:Media_motif')->findAll();
        $images_produit2 = $em->getRepository('KountacBundle:Media_motif')->findByProduits2($produit_2);
        
        return $this->render('FOSUserBundle:Profile:Pro/addProduits_3Pro.html.twig', array(
            'produit_2' => $produit_2,
            'produit_1' => $produit_1,
            'mannequins' => $mannequins,
            'images' => $images,
            'images_produit2' => $images_produit2,
            'user' => $user,
        ));
    }
    
    /**
     * Displays a form to edit an existing produit entity.
     *
     */
    public function new_edit3Action($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $image = $em->getRepository('KountacBundle:Media_motif')->find($id);
        $produit_2 = $image->getProduit2();
        $produit_1 = $produit_2->getProduit1();
        $mannequins = $em->getRepository('KountacBundle:Mannequin')->findByDisponible($user);
        $images = $em->getRepository('KountacBundle:Media_motif')->findAll();
        $images_produit2 = $em->getRepository('KountacBundle:Media_motif')->findByProduits2($produit_2);
        
        return $this->render('FOSUserBundle:Profile:Pro/Produits/addProduits_images_edit.html.twig', array(
            'produit_2' => $produit_2,
            'produit_1' => $produit_1,
            'mannequins' => $mannequins,
            'image' => $image,
            'images' => $images,
            'images_produit2' => $images_produit2,
            'user' => $user,
        ));
    }
    
    /*
     * Creates a new produit entity.
     */
    
    public function new4Action($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit_2 = $em->getRepository('KountacBundle:Produits_2')->find($id);
        $produits_3 = $em->getRepository('KountacBundle:Produits_3')->findAll();
        $produit1 = $produit_2->getProduit1();
        $user = $this->getUser();
        $produit_1 = $em->getRepository('KountacBundle:Produits_1')->find($produit_2->getProduit1()->getId());
        $mannequins = $em->getRepository('KountacBundle:Mannequin')->findByDisponible($user);
        $images_mannequin = $em->getRepository('KountacBundle:Media_motif')->findByProduits2($produit_2);
        $images = $em->getRepository('KountacBundle:Media_motif')->findAll();
        
        
        if ($this->get('request')->getMethod() == 'POST') 
        {
            
        
        if ($this->getRequest()->request->get('stock_xs') != 0 ){
                $stock = $produit_1->getStock();
                $value = 34;
                
                if ($em->getRepository('KountacBundle:Produits_3')->findOneBy(array('taille' => $value,'produit_2' => $produit_2) ) == NULL){
                    $produit = new Produits_3();
                }else{
                    $produit = $em->getRepository('KountacBundle:Produits_3')->findOneBy(array('taille' => $value,'produit_2' => $produit_2) );
                }
                $stock_xs = $this->getRequest()->request->get('stock_xs') ;
                $produit_1->setStock($stock + $stock_xs);
                $produit_2->setStock($produit_2->getStock() + $stock_xs);
                $produit->setStock($stock_xs);
                $produit->setTaille('34');
                $produit->setProduit2($produit_2);
                $em->persist($produit);
                $em->persist($produit_1);
                $em->persist($produit_2);
                $em->flush();
            }
            
            if ($this->getRequest()->request->get('stock_s') != 0 ){
                $stock = $produit_1->getStock();
                $value = 36;
                
                if ($em->getRepository('KountacBundle:Produits_3')->findOneBy(array('taille' => $value,'produit_2' => $produit_2) ) == NULL){
                    $produit = new Produits_3();
                }else{
                    $produit = $em->getRepository('KountacBundle:Produits_3')->findOneBy(array('taille' => $value,'produit_2' => $produit_2) );
                }
                $stock_s = $this->getRequest()->request->get('stock_s') ;
                $produit_1->setStock($stock + $stock_s);
                $produit_2->setStock($produit_2->getStock() + $stock_s);
                $produit->setStock($stock_s);
                $produit->setTaille('36');
                $produit->setProduit2($produit_2);
                $em->persist($produit);
                $em->persist($produit_1);
                $em->persist($produit_2);
                $em->flush();
            }
            
            if ($this->getRequest()->request->get('stock_l') != 0 ){
                $stock = $produit_1->getStock();
                $value = 38;
                
                if ($em->getRepository('KountacBundle:Produits_3')->findOneBy(array('taille' => $value,'produit_2' => $produit_2) ) == NULL){
                    $produit = new Produits_3();
                }else{
                    $produit = $em->getRepository('KountacBundle:Produits_3')->findOneBy(array('taille' => $value,'produit_2' => $produit_2) );
                }
                $stock_l = $this->getRequest()->request->get('stock_l') ;
                $produit_1->setStock($stock + $stock_l);
                $produit_2->setStock($produit_2->getStock() + $stock_l);
                $produit->setStock($stock_l);
                $produit->setTaille('38');
                $produit->setProduit2($produit_2);
                $em->persist($produit);
                $em->persist($produit_1);
                $em->persist($produit_2);
                $em->flush();
            }
            
            if ($this->getRequest()->request->get('stock_m') != 0 ){
                $stock = $produit_1->getStock();
                $value = 40;
                
                if ($em->getRepository('KountacBundle:Produits_3')->findOneBy(array('taille' => $value,'produit_2' => $produit_2) ) == NULL){
                    $produit = new Produits_3();
                }else{
                    $produit = $em->getRepository('KountacBundle:Produits_3')->findOneBy(array('taille' => $value,'produit_2' => $produit_2) );
                }
                $stock_m = $this->getRequest()->request->get('stock_m') ;
                $produit_1->setStock($stock + $stock_m);
                $produit_2->setStock($produit_2->getStock() + $stock_m);
                $produit->setStock($stock_m);
                $produit->setTaille('40');
                $produit->setProduit2($produit_2);
                $em->persist($produit);
                $em->persist($produit_1);
                $em->persist($produit_2);
                $em->flush();
            }
            
            if ($this->getRequest()->request->get('stock_xl') != 0 ){
                $stock = $produit_1->getStock();
                $value = 42;
                
                if ($em->getRepository('KountacBundle:Produits_3')->findOneBy(array('taille' => $value,'produit_2' => $produit_2) ) == NULL){
                    $produit = new Produits_3();
                }else{
                    $produit = $em->getRepository('KountacBundle:Produits_3')->findOneBy(array('taille' => $value,'produit_2' => $produit_2) );
                }
                $stock_xl = $this->getRequest()->request->get('stock_xl') ;
                $produit_1->setStock($stock + $stock_xl);
                $produit_2->setStock($produit_2->getStock() + $stock_xl);
                $produit->setStock($stock_xl);
                $produit->setTaille('42');
                $produit->setProduit2($produit_2);
                $em->persist($produit);
                $em->persist($produit_1);
                $em->persist($produit_2);
                $em->flush();
            }
            
            if ($this->getRequest()->request->get('stock_2xl') != 0 ){
                $stock = $produit_1->getStock();
                $value = 44;
                
                if ($em->getRepository('KountacBundle:Produits_3')->findOneBy(array('taille' => $value,'produit_2' => $produit_2) ) == NULL){
                    $produit = new Produits_3();
                }else{
                    $produit = $em->getRepository('KountacBundle:Produits_3')->findOneBy(array('taille' => $value,'produit_2' => $produit_2) );
                }
                $stock_2xl = $this->getRequest()->request->get('stock_2xl') ;
                $produit_1->setStock($stock + $stock_2xl);
                $produit_2->setStock($produit_2->getStock() + $stock_2xl);
                $produit->setStock($stock_2xl);
                $produit->setTaille('44');
                $produit->setProduit2($produit_2);
                $em->persist($produit);
                $em->persist($produit_1);
                $em->persist($produit_2);
                $em->flush();
            }
            
            if ($this->getRequest()->request->get('stock_3xl') != 0 ){
                $stock = $produit_1->getStock();
                $value = 46;
                
                if ($em->getRepository('KountacBundle:Produits_3')->findOneBy(array('taille' => $value,'produit_2' => $produit_2) ) == NULL){
                    $produit = new Produits_3();
                }else{
                    $produit = $em->getRepository('KountacBundle:Produits_3')->findOneBy(array('taille' => $value,'produit_2' => $produit_2) );
                }
                $stock_3xl = $this->getRequest()->request->get('stock_3xl') ;
                $produit_1->setStock($stock + $stock_3xl);
                $produit_2->setStock($produit_2->getStock() + $stock_3xl);
                $produit->setStock($stock_3xl);
                $produit->setTaille('46');
                $produit->setProduit2($produit_2);
                $em->persist($produit);
                $em->persist($produit_1);
                $em->persist($produit_2);
                $em->flush();
            }
            
            if ($this->getRequest()->request->get('stock_4xl') != 0 ){
                $stock = $produit_1->getStock();
                $value = 48;
                
                if ($em->getRepository('KountacBundle:Produits_3')->findOneBy(array('taille' => $value,'produit_2' => $produit_2) ) == NULL){
                    $produit = new Produits_3();
                }else{
                    $produit = $em->getRepository('KountacBundle:Produits_3')->findOneBy(array('taille' => $value,'produit_2' => $produit_2) );
                }
                $stock_4xl = $this->getRequest()->request->get('stock_4xl') ;
                $produit_1->setStock($stock + $stock_4xl);
                $produit_2->setStock($produit_2->getStock() + $stock_4xl);
                $produit->setStock($stock_4xl);
                $produit->setTaille('48');
                $produit->setProduit2($produit_2);
                $em->persist($produit);
                $em->persist($produit_1);
                $em->persist($produit_2);
                $em->flush();
            }
            
            if ($this->getRequest()->request->get('stock_5xl') != 0 ){
                $stock = $produit_1->getStock();
                $value = 50;
                
                if ($em->getRepository('KountacBundle:Produits_3')->findOneBy(array('taille' => $value,'produit_2' => $produit_2) ) == NULL){
                    $produit = new Produits_3();
                }else{
                    $produit = $em->getRepository('KountacBundle:Produits_3')->findOneBy(array('taille' => $value,'produit_2' => $produit_2) );
                }
                $stock_5xl = $this->getRequest()->request->get('stock_5xl') ;
                $produit_1->setStock($stock + $stock_5xl);
                $produit_2->setStock($produit_2->getStock() + $stock_5xl);
                $produit->setStock($stock_5xl);
                $produit->setTaille('50');
                $produit->setProduit2($produit_2);
                $em->persist($produit);
                $em->persist($produit_1);
                $em->persist($produit_2);
                $em->flush();
            }
            
            $this->get('session')->getFlashBag()->add('success','Taille(s) et stock(s) ajouté(s) avec succès');
            return $this->redirectToRoute('produit_pro_new_4', array('id' => $produit_2->getId()));
    }
     return $this->render('FOSUserBundle:Profile:Pro/addProduits_4Pro.html.twig', array(
            'produit_2' => $produit_2,
            'produits_3' => $produits_3,
            'produit_1' => $produit1,
            'mannequins' => $mannequins,
            'images_mannequin' => $images_mannequin,
            'images' => $images,
            'user' => $user,
        ));
    }
    
    
    /**
     * Creates a new produit entity.
     *
     */
    public function newResumeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('KountacBundle:Produits_1')->find($id);
        $images = $em->getRepository('KountacBundle:Media_motif')->findAll();
        $mannequins = $em->getRepository('KountacBundle:Mannequin')->findAll();
        $user = $this->getUser();
        
        return $this->render('FOSUserBundle:Profile:Pro/addProduits_ResumePro.html.twig', array(
            'produit' => $produit,
            'user' => $user,
            'images' => $images,
            'mannequins' => $mannequins,
        ));
    }
    
    
    /**
     * Finds and displays a produit entity.
     *
     */
    public function showAction(Request $request, Produits_1 $produit)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $images = $em->getRepository('KountacBundle:Media_motif')->findAll();
        $mannequins = $em->getRepository('KountacBundle:Mannequin')->findAll();
        $form = $this->createForm('Kountac\KountacBundle\Form\ProduitsAddPriceCommandeType');
        $form_stock = $this->createForm('Kountac\KountacBundle\Form\ProduitsAddStockType');
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $prixCommande = $form["prixCommande"]->getData();
                $produit->getEuro()->setPrixCommande($prixCommande);
                $produit->setDateupdate(new \DateTime('now'));
                $em->persist($produit);
                $em->flush();
                
                $this->get('session')->getFlashBag()->add('success','Le prix de la commande sur mesure a été ajouté avec succès');
                return $this->redirectToRoute('produit_pro_show', array('id' => $produit->getId()));
            }
        }
        return $this->render('FOSUserBundle:Profile:Pro/showProduitsPro.html.twig', array(
            'produit' => $produit,
            'user' => $user,
            'images' => $images,
            'mannequins' => $mannequins,
            'form' => $form->createView(),
            'form_stock' => $form_stock->createView(),
        ));
    }
    
    /**
     * Add prix commande cfa of a produit entity.
     *
     */
    public function addprixCommandeCfaAction(Request $request, Produits_1 $produit)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm('Kountac\KountacBundle\Form\ProduitsAddPriceCommandeType');
        $form->handleRequest($request);
        $prixCommande = $form["prixCommande"]->getData();
        $produit->getCfa()->setPrixCommande($prixCommande);
        $produit->setDateupdate(new \DateTime('now'));
        $em->persist($produit);
        $em->flush();
                
        $this->get('session')->getFlashBag()->add('success','Le prix de la commande sur mesure a été ajouté avec succès');
        return $this->redirectToRoute('produit_pro_show', array('id' => $produit->getId()));
    }
    
     /**
     * Add stock of a produit entity.
     *
     */
    public function addStockAction(Request $request, Produits_1 $produit)
    {
        $em = $this->getDoctrine()->getManager();
        $form_stock = $this->createForm('Kountac\KountacBundle\Form\ProduitsAddStockType');
        $form_stock->handleRequest($request);
        $stock = $form_stock["stock"]->getData();
        $produit->setStock($stock);
        $produit->setDateupdate(new \DateTime('now'));
        $em->persist($produit);
        $em->flush();
                
        $this->get('session')->getFlashBag()->add('success','Votre stock a été modifié avec succès');
        return $this->redirectToRoute('produit_pro_show', array('id' => $produit->getId()));
    }
    
   
    /**
     * Add a new motif entity.
     *
     */
    public function addNewMotifAction(Request $request)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $motifs = $em->getRepository('KountacBundle:Libelles_motif')->findByNouveaute();
        $lebelle = new Libelles_motif();
        $form_motif = $this->createForm('Kountac\KountacBundle\Form\Libelles_motifType', $lebelle);
        
        if ($request->getMethod() == 'POST') {
            $form_motif->handleRequest($request);
            if ($form_motif->isSubmitted() && $form_motif->isValid()) {
                $em->persist($lebelle);
                $em->flush();
                
                $this->get('session')->getFlashBag()->add('success','Le nouveau motif a été ajouté avec succès');
                return $this->redirectToRoute('produit_pro_new_motif');
            }
        }
       
        return $this->render('FOSUserBundle:Profile:Pro/addMotifsPro.html.twig', array(
            'user' => $user,
            'motifs' => $motifs,
            'form_motif' => $form_motif->createView(),
        ));
    }
    
    
    /**
     * Add Mannequin of a produit entity.
     *
     */
    public function addMannequinAction(Request $request, $id)
    {
        $mannequin = new Mannequin();
        $em = $this->getDoctrine()->getManager();
        $produit_2 = $em->getRepository('KountacBundle:Produits_2')->find($id);
        $form = $this->createForm('Kountac\KountacBundle\Form\MannequinType', $mannequin);
        $user = $this->getUser();
        $form->handleRequest($request);
        $mannequin->setMarque($user);
        $mannequin->setDateUpdate(new \DateTime('now'));
        $mannequin->setDateAjout(new \DateTime('now'));
        $em->persist($mannequin);
        $em->flush();
        
        $this->get('session')->getFlashBag()->add('success','Nouveau mannequin ajouté avec succès au motif');
        return $this->redirectToRoute('produit_pro_new_3', array('id' => $produit_2->getId()));
    }
    
    /**
     * Add Images to Mannequin of a produit entity.
     *
     */
    public function addImagesMannequinAction(Request $request, $id)
    {
        if ($this->get('request')->getMethod() == 'POST') 
        {
            $image = new \Kountac\KountacBundle\Entity\Media_motif();
            $em = $this->getDoctrine()->getManager();
            $produit_2 = $em->getRepository('KountacBundle:Produits_2')->find($id);
            $form_images = $this->createForm('Kountac\KountacBundle\Form\Media_motifType', $image);
            $form_images->handleRequest($request);
            $top = $form_images['top']->getData();
            
            if ($top == 0) {
                $image_top = $em->getRepository('KountacBundle:Media_motif')->findOneBy(array('top' => '0','produit_2' => $produit_2) );       
                if ($image_top != NULL){
                    $image_top->setTop('1');
                    $image->setTop('0');
                    $em->persist($image_top);
                }
                else{
                    $image->setTop('0');
                }
            }
            
            $image->setProduit2($produit_2);
            $em->persist($produit_2);
            $em->persist($image);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success','Images du mannequin ajoutées avec succès');
            return $this->redirectToRoute('produit_pro_new_3', array('id' => $produit_2->getId()));
        }
    }
    
    /**
     * Add Mannequin of a produit entity.
     *
     */
    public function setTopMannequinNewProduitAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $image = $em->getRepository('KountacBundle:Media_motif')->find($id);
        $produit_2 = $image->getProduit2();
        $image_top = $em->getRepository('KountacBundle:Media_motif')->findOneBy(array('top' => '0','produit_2' => $produit_2) );       
        $image_top->setTop('1');
        $image->setTop('0');
        $image->setProduit2($produit_2);
        $produit_2->getProduit1()->setDateUpdate(new \DateTime('now'));
        $em->persist($image);
        $em->persist($image_top);
        $em->persist($produit_2->getProduit1());
        $em->flush();
        
        $this->get('session')->getFlashBag()->add('success','Choix du top de mannequin effectué avec succès');
        return $this->redirectToRoute('produit_pro_new_3', array('id' => $produit_2->getId()));
    }
    
    
    /**
     * Add Mannequin of a produit entity.
     *
     */
    public function setTopMannequinAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $image = $em->getRepository('KountacBundle:Media_motif')->find($id);
        $produit_2 = $image->getProduit2();
        $image_top = $em->getRepository('KountacBundle:Media_motif')->findOneBy(array('top' => '0','produit_2' => $produit_2) );      
        //echo "<script>console.log( 'Debug Objects: " . $image . "' );</script>"; 
        //var_dump($image);
        $image_top->setTop('1');
        $image->setTop('0');
        $image->setProduit2($produit_2);
        $produit_2->getProduit1()->setDateUpdate(new \DateTime('now'));
        $em->persist($image);
        $em->persist($image_top);
        $em->persist($produit_2->getProduit1());
        $em->flush();
        
        $this->get('session')->getFlashBag()->add('success','Choix du top de mannequin effectué avec succès');
        return $this->redirectToRoute('produit_pro_show', array('id' => $produit_2->getProduit1()->getId()));
        //return NULL;
    }
    
    
    /**
     * Displays a form to edit an existing produit entity.
     *
     */
    public function edit_1Action(Request $request, Produits_1 $produit)
    {
        $user = $this->getUser();
        $editForm = $this->createForm('Kountac\KountacBundle\Form\Produits_1Type', $produit);
        $editForm->handleRequest($request);
        
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $produit->setDateupdate(new \DateTime('now'));
            $this->getDoctrine()->getManager()->flush();
            
            $this->get('session')->getFlashBag()->add('success','les informations de base du produit ont été modifiées avec succès');
            return $this->redirectToRoute('produit_pro_edit_2', array('id' => $produit->getId()));        
        }

        return $this->render('FOSUserBundle:Profile:Pro/editProduits_1Pro.html.twig', array(
            'produit' => $produit,
            'user' => $user,
            'form' => $editForm->createView(),
        ));
    }
    
    
    /**
     * Displays a form to edit an existing produit entity.
     *
     */
    public function edit_2Action(Produits_1 $produit1)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $mannequins = $em->getRepository('KountacBundle:Mannequin')->findAll();
        $images = $em->getRepository('KountacBundle:Media_motif')->findAll();
        
        $produits = $em->getRepository('KountacBundle:Produits_2')->getProduct_2($produit1);
        
        return $this->render('FOSUserBundle:Profile:Pro/editProduits_2Pro.html.twig', array(
            'produit1' => $produit1,
            'produits' => $produits,
            'images' => $images,
            'mannequins' => $mannequins,
            'user' => $user,
        ));
    }

    /**
     * Displays a form to edit an existing produit entity.
     *
     */
    public function edit_21Action(Request $request, Produits_2 $produit2)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $libelles = $em->getRepository('KountacBundle:Libelles_motif')->findAll();
        $images = $em->getRepository('KountacBundle:Media_motif')->findAll();
        
        $editForm = $this->createForm('Kountac\KountacBundle\Form\Produits_2Type', $produit2);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em->persist($produit2);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success','Le motif a été modifié avec succès');
            return $this->redirectToRoute('produit_pro_edit_3', array('id' => $produit2->getId()));
        }
        
        return $this->render('FOSUserBundle:Profile:Pro/editProduits_21Pro.html.twig', array(
            'produit2' => $produit2,
            'libelles' => $libelles,
            'user' => $user,
            'images' => $images,
            'form' => $editForm->createView(),
        ));
    }
    
    
    /**
     * Displays a form to edit an existing produit entity.
     *
     */
    public function edit_3Action(Produits_2 $produit2)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        
        $produits = $em->getRepository('KountacBundle:Produits_3')->getProduct_3($produit2);
        
        return $this->render('FOSUserBundle:Profile:Pro/editProduits_3Pro.html.twig', array(
            'produit2' => $produit2,
            'produits' => $produits,
            'user' => $user,
        ));
    }
    
        /**
     * Displays a form to edit an existing produit entity.
     *
     */
    public function edit_31Action(Request $request, Produits_3 $produit3)
    {
        $user = $this->getUser();
        
        $editForm = $this->createForm(Produits_3Type::class, $produit3);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit3);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success','La taille et le stock associé ont été modifiés avec succès');
            return $this->redirectToRoute('produit_pro_edit_2', array('id' => $produit3->getProduit2()->getProduit1()->getId()));
        }
        
        return $this->render('FOSUserBundle:Profile:Pro/editProduits_31Pro.html.twig', array(
            'produit3' => $produit3,
            'user' => $user,
            'form' => $editForm->createView(),
        ));
    }
    
    /**
     * Deletes a produit entity.
     *
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('KountacBundle:Produits_1')->find($id);
        
        $em->remove($produit);
        $em->flush();
        
        $this->get('session')->getFlashBag()->add('success','Produit supprimé avec succès');
       
        return $this->redirectToRoute('produit_pro_index');
    }
    
    /**
     * Deletes a produit entity.
     *
     */
    public function deleteMotifAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit_2 = $em->getRepository('KountacBundle:Produits_2')->find($id);
        
        $em->remove($produit_2);
        $em->flush();
        
        $this->get('session')->getFlashBag()->add('success','Motif supprimé avec succès');
       
        return $this->redirectToRoute('produit_pro_show', array('id' => $produit_2->getProduit1()->getId()));
    }
    
        /**
     * Deletes a produit entity.
     *
     */
    public function deleteImagesAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $image = $em->getRepository('KountacBundle:Media_motif')->find($id);
        $produit_2 = $image->getProduit2();
        $em->remove($image);
        $em->flush();
        
        $this->get('session')->getFlashBag()->add('success','Images de mannequin supprimé avec succès');
       
        return $this->redirectToRoute('produit_pro_show', array('id' => $produit_2->getProduit1()->getId()));
    }
    
    
    /**
     * Lists all produit out of stocks.
     *
     */
    public function stockAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $listesProduits = $em->getRepository('KountacBundle:Produits_1')->getProduitsByStock($user);
        $produits  = $this->get('knp_paginator')->paginate($listesProduits,$this->get('request')->query->get('page', 1),10);
        return $this->render('FOSUserBundle:Profile:Pro/listeMesProduits.html.twig', array(
            'produits' => $produits,
            'user' => $user
        ));
    }
    
    /**
     * Lists all produits sales.
     *
     */
    public function saleAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $listesProduits = $em->getRepository('KountacBundle:Produits_1')->getProduitsBySales($user);
        $produits  = $this->get('knp_paginator')->paginate($listesProduits,$this->get('request')->query->get('page', 1),10);
        return $this->render('FOSUserBundle:Profile:Pro/listeMesProduits.html.twig', array(
            'produits' => $produits,
            'user' => $user
        ));
    }

    public function imageAction()
    {
        function resizeImage($resourceType, $image_width, $image_heigth){
            $resizeWidth = 1000;
            $resizeHeigth = 1500;
            $imageLayer = imagecreatetruecolor($resizeWidth, $resizeHeigth);
            imagecopyresampled($imageLayer, $resourceType, 0, 0, 0, 0, $resizeWidth, $resizeHeigth, $image_width, $image_heigth);
            return $imageLayer;

        }

        if (isset($_POST["form_submit"])) {
            $imageProcess = 0;
            $file = "";
            if (is_array($_FILES)) {
                $fileName = $_FILES['upload_image']['tmp_name'];
                $sourceProperties = getimagesize($fileName);
                $resizeFileName = time();
                $uploadPath = "./uploads/";
                $fileExt = pathinfo($_FILES['upload_image']['name'], PATHINFO_EXTENSION);
                $uploadImageType = $sourceProperties[2];
                $sourceImageWidth = $sourceProperties[0];
                $sourceImageHeigth = $sourceProperties[1];
                switch ($uploadImageType) {
                    case IMAGETYPE_JPEG:
                        $resourceType = imagecreatefromjpeg($fileName);
                        $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeigth);
                        imagejpeg($imageLayer,$uploadPath."thump_".$resizeFileName.'.'.$fileExt);
                        break;

                    case IMAGETYPE_GIF:
                        $resourceType = imagecreatefromgif($fileName);
                        $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeigth);
                        imagegif($imageLayer, $uploadPath."thump_".$resizeFileName.'.'.$fileExt);
                        break;


                    case IMAGETYPE_PNG:
                        $resourceType = imagecreatefrompng($fileName);
                        $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeigth);
                        imagepng($imageLayer, $uploadPath."thump_".$resizeFileName.'.'.$fileExt);
                        break;

                    default:
                        $imageProcess = 0;
                        break;
                }

                move_uploaded_file($file, $uploadPath.$resizeFileName.".".$fileExt);
                $imageProcess = 1;
            }

        }
    }

}
