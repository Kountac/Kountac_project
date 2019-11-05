<?php

namespace Blog\BlogOrnoirBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Blog\BlogOrnoirBundle\Entity\Blog;
use Blog\BlogOrnoirBundle\Form\BlogType;

/**
 * Blog controller.
 *
 */
class BlogController extends Controller
{
    /**
     * Lists all Blog entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BlogOrnoirBundle:Blog')->findAll();

        return $this->render('BlogOrnoirBundle:Blog:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Blog entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Blog();
        $user = $this->getUser();
        $entity->setDateAjout(new \DateTime('now'));
        $entity->setDateUpdate(new \DateTime('now'));
        $entity->setEditeur($user);
        $entity->setPopularite(1);
        $form = $this->createForm(new BlogType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminBlog_show', array('id' => $entity->getId())));
        }

        return $this->render('BlogOrnoirBundle:Blog:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Blog entity.
     *
     */
    public function newAction()
    {
        $entity = new Blog();
        $form   = $this->createForm(new BlogType(), $entity);

        return $this->render('BlogOrnoirBundle:Blog:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Blog entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BlogOrnoirBundle:Blog')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Blog entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BlogOrnoirBundle:Blog:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Blog entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BlogOrnoirBundle:Blog')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Blog entity.');
        }

        $editForm = $this->createForm(new BlogType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BlogOrnoirBundle:Blog:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Blog entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BlogOrnoirBundle:Blog')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Blog entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new BlogType(), $entity);
        $editForm->bind($request);
        $entity->setDateUpdate(new \DateTime('now'));
        
        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminBlog_show', array('id' => $id)));
        }

        return $this->render('BlogOrnoirBundle:Blog:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Blog entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BlogOrnoirBundle:Blog')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Blog entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('adminBlog'));
    }

    /**
     * Creates a form to delete a Blog entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
