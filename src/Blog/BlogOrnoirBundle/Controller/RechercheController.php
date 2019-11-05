<?php

namespace Blog\BlogOrnoirBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Blog\BlogOrnoirBundle\Entity\BlogCommentaires;
use Blog\BlogOrnoirBundle\Form\BlogCommentairesType;
use Blog\BlogOrnoirBundle\Form\RechercheType;
/**
 * BlogCommentaires controller.
 *
 */
class RechercheController extends Controller
{
    public function rechercheAction()
    {
        $form = $this->createForm(new RechercheType());
        
        return $this->render('BlogOrnoirBundle:Default:recherche/recherche.html.twig', array('form' => $form->createView()));
    }

    public function recherche2Action()
    {
        $form = $this->createForm(new RechercheType());
        
        return $this->render('BlogOrnoirBundle:Default:recherche/recherche2.html.twig', array('form' => $form->createView()));
    }
    
    public function rechercheTraitementBlogAction() 
    {
        if ($this->get('request')->getMethod() == 'POST')
        {
            $form = $this->createForm(new RechercheType());
            $form->bind($this->get('request'));
            $em = $this->getDoctrine()->getManager();
            $blogsPopulaires = $em->getRepository('BlogOrnoirBundle:Blog')->getArticlesByPopularite();
            $blogs = $em->getRepository('BlogOrnoirBundle:Blog')->recherche($form['recherche']->getData());
        } else {
            throw $this->createNotFoundException('La page n\'exixte pas');
        }
        
        return $this->render('BlogOrnoirBundle:Default:pages/blogRecherche.html.twig', array('blogs' => $blogs, 'blogsPopulaires' => $blogsPopulaires));
    }
    
    public function rechercheTraitementServiceAction() 
    {
        if ($this->get('request')->getMethod() == 'POST')
        {
            $form = $this->createForm(new RechercheType());
            $form->bind($this->get('request'));
            $em = $this->getDoctrine()->getManager();
            $services = $em->getRepository('BlogOrnoirBundle:Services')->recherche($form['recherche']->getData());
        } else {
            throw $this->createNotFoundException('La page n\'exixte pas');
        }
        
        return $this->render('BlogOrnoirBundle:Default:pages/serviceRecherche.html.twig', array('services' => $services));
    }
}