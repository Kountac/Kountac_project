<?php

namespace Blog\BlogOrnoirBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

use Blog\BlogOrnoirBundle\Entity\Blog;
use Blog\BlogOrnoirBundle\Entity\Services;
use Blog\BlogOrnoirBundle\Entity\BlogCommentaires;
use Blog\BlogOrnoirBundle\Form\BlogCommentairesType;
use Blog\BlogOrnoirBundle\Form\ContactType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $blogs = $em->getRepository('BlogOrnoirBundle:Blog')->getArticlesByNouveaute();
        $services = $em->getRepository('BlogOrnoirBundle:Services')->getServicesByNouveaute();
        $commentaires = $em->getRepository('BlogOrnoirBundle:BlogCommentaires')->getCommentairesByNouveaute();
        


        return $this->render('BlogOrnoirBundle:Default:index.html.twig', array( 'blogs' => $blogs,
                                                                                'services' => $services,
                                                                                'commentaires' => $commentaires));
    }
    
    public function aboutUsAction()
    {
        return $this->render('BlogOrnoirBundle:Default:pages/about.html.twig');
    }
        
    public function contactUsAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $objet = $email = $nom = $comment = NULL;
        
        $form = $this->createForm(new ContactType());
                
        $commentaires = $em->getRepository('BlogOrnoirBundle:BlogCommentaires')->getCommentairesByNouveaute();
        
        $request = $this->get('request');  
        
        if ($request->getMethod() == 'POST') 
        {
            $form->bind($request);        
            if ($form->isValid()) {
                $objet = $form["objet"]->getData();
                $nom = $form["nom"]->getData();
                $email = $form["email"]->getData();
                $comment = $form["comment"]->getData();
                $comment = \Swift_Message::newInstance()
                    ->setSubject($objet) 
                    ->setFrom(array($email))
                    ->setTo('ornoirets@gmail.com')
                    ->setCharset('utf-8')
                    ->setContentType('text/html')
                    ->setBody($this->renderView('UtilisateursBundle:Default:SwiftLayout/messageContact.html.twig',array(
                        'objet' => $objet,
                        'nom' => $nom,
                        'email' => $email,
                        'comment' => $comment)));
        
                    ;
                $this->get('mailer')->send($comment);
        
                $this->get('session')->getFlashBag()->add('success','Votre message a été envoyé avec succès');
                return $this->redirect($this->generateUrl('blog_ornoir_homepage'));
            }
        }
        return $this->render('BlogOrnoirBundle:Default:pages/contact.html.twig', array( 'commentaires' => $commentaires,
                                                                                        'form' => $form->createView()));
    }
    
    public function blogAllAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $blogs = $em->getRepository('BlogOrnoirBundle:Blog')->findAll();
        $blogsPopulaires = $em->getRepository('BlogOrnoirBundle:Blog')->getArticlesByPopularite();

        return $this->render('BlogOrnoirBundle:Default:pages/blogAll.html.twig', array( 'blogs' => $blogs,
                                                                                        'blogsPopulaires' =>$blogsPopulaires));
    }
    
    public function blogSingleAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository('BlogOrnoirBundle:Blog')->find($id);
        
        $commentaires_blog = $em->getRepository('BlogOrnoirBundle:BlogCommentaires')->findAll();
        $commentaire = new BlogCommentaires();
        $commentaire->setDate(new \DateTime('now'));
        $commentaire->setBlog($blog);
        
        $request = $this->get('request');        
        $form_commentaire = $this->createForm(new BlogCommentairesType(), $commentaire);
            
        if ($request->getMethod() == 'POST') 
        {
            $form_commentaire->bind($request);        
            if ($form_commentaire->isValid()) 
            {
                $em = $this->getDoctrine()->getManager();
                $blog->setPopularite($blog->getPopularite() + 1);
                $em->persist($commentaire);
                $em->persist($blog);
                $em->flush();

                    return $this->redirect($this->generateUrl('blog_ornoir_blog_single', array('id' => $blog->getId())));
        
            }
        }
        
        
        return $this->render('BlogOrnoirBundle:Default:pages/blogSingle.html.twig', array(
            'blog' => $blog,
            'form_commentaire' => $form_commentaire->createView()));
    }
    
    public function serviceAllAction()
    {
        $em = $this->getDoctrine()->getManager();

        $services = $em->getRepository('BlogOrnoirBundle:Services')->findAll();

        return $this->render('BlogOrnoirBundle:Default:pages/serviceAll.html.twig', array('services' => $services));
    }
    
    public function serviceSingleAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $service = $em->getRepository('BlogOrnoirBundle:Services')->find($id);
        
        return $this->render('BlogOrnoirBundle:Default:pages/serviceSingle.html.twig', array('service' => $service));
    }
}
