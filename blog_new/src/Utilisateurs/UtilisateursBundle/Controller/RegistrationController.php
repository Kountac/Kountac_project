<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateurs\UtilisateursBundle\Entity\Adresse;
use Utilisateurs\UtilisateursBundle\Form\AdresseType;
use Blog\BlogOrnoirBundle\Form\BlogType;


class RegistrationController extends Controller
{
    public function adresseRegistrationAction()
    {
        $entity  = new Adresse();
        $user = $this->getUser();
        //$entity->setEditeur($user);
        $request = $this->get('request');        
        $form = $this->createForm(new AdresseType(), $entity); 
        
        $user = $this->getUser();
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminCommentaires_show', array('id' => $entity->getId())));
        }
        return $this->render('FOSUserBundle:Registration:registerInfo.html.twig', array('entity' => $entity,
                                                                                        'form'   => $form->createView(),));
    }
    
    public function imagesRegistrationAction()
    {
        $user = $this->getUser();
        $entity = 
        $form = $this->createForm(new AdresseType(), $entity); 

        return $this->render('FOSUserBundle:Registration:registerInfo.html.twig', array('achat' => $achat));
               
    }
}
