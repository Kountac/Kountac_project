<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Utilisateurs\UtilisateursBundle\Entity\Adresse;
use Utilisateurs\UtilisateursBundle\Form\AdresseType;
use Blog\BlogOrnoirBundle\Entity\Media;
use \Blog\BlogOrnoirBundle\Form\MediaType;

class EditeurController extends Controller
{
    public function utilisateurMenuAction()
    {
        $user = $this->getUser();
        return $this->render('editeurs/connecte.html.twig', array('user'=> $user));
        
    }
    
    public function editAdresseAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $this->getUser()->getAdresse()->getId();
        $user = $this->getUser()->getId();
        $adresse = $em->getRepository('UtilisateursBundle:Adresse')->find($id);
        $editeur = $em->getRepository('UtilisateursBundle:Editeurs')->find($user);
        
        
        $form = $this->createForm(new AdresseType(), $adresse);
        $request = $this->get('request');  
        
        if ($request->getMethod() == 'POST') 
        {
            $form->bind($request);        
            if ($form->isValid()) {
                $editeur->setAdresse($adresse);
                $em->persist($adresse);
                $em->persist($editeur);
                $em->flush();

            return $this->redirect($this->generateUrl('fos_user_profile_show'));
            }
        }
        
        return $this->render('FOSUserBundle:Profile:editAdresse.html.twig', array(
                    'form'   => $form->createView(),
        ));
        
    }
    
    public function registrationAdresseAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $this->getUser()->getId();
        $user = $this->getUser();        
        $entity = $em->getRepository('UtilisateursBundle:Editeurs')->find($id);
        $image = new Media();
        $adresse = new Adresse();
        
        $form = $this->createForm(new AdresseType(), $adresse);
        $form_image = $this->createForm(new MediaType(), $image);
        
        $request = $this->get('request');  
        
        if ($request->getMethod() == 'POST') 
        {
            $form->bind($request);        
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $entity->setAdresse($adresse);
                $em->persist($adresse);            
                $em->persist($entity);
                $em->flush();
                return $this->redirect($this->generateUrl('fos_user_profile_show'));
            }
        }
        
        return $this->render('FOSUserBundle:Registration:registerAdresse.html.twig', array(
            'user'=> $user,
            'form'=> $form->createView(),
            'form_image'=> $form_image->createView(),
            ));
        
    }
    
}
