<?php

namespace Blog\BlogOrnoirBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Blog\BlogOrnoirBundle\Entity\BlogCommentaires;
use Blog\BlogOrnoirBundle\Form\BlogCommentairesType;

/**
 * BlogCommentaires controller.
 *
 */
class BlogCommentairesController extends Controller
{
    /**
     * Lists all BlogCommentaires entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BlogOrnoirBundle:BlogCommentaires')->findAll();

        return $this->render('BlogOrnoirBundle:BlogCommentaires:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new BlogCommentaires entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new BlogCommentaires();
        $entity->setPseudo($this->getUser()->getUsername());
        $entity->setDate(new \DateTime('now'));
        //$entity->setBlog($blog);
        
        $form = $this->createForm(new BlogCommentairesType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminCommentaires_show', array('id' => $entity->getId())));
        }

        return $this->render('BlogOrnoirBundle:BlogCommentaires:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new BlogCommentaires entity.
     *
     */
    public function newAction()
    {
        $entity = new BlogCommentaires();
        $form   = $this->createForm(new BlogCommentairesType(), $entity);

        return $this->render('BlogOrnoirBundle:BlogCommentaires:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a BlogCommentaires entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BlogOrnoirBundle:BlogCommentaires')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BlogCommentaires entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BlogOrnoirBundle:BlogCommentaires:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing BlogCommentaires entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BlogOrnoirBundle:BlogCommentaires')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BlogCommentaires entity.');
        }

        $editForm = $this->createForm(new BlogCommentairesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BlogOrnoirBundle:BlogCommentaires:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing BlogCommentaires entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BlogOrnoirBundle:BlogCommentaires')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BlogCommentaires entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new BlogCommentairesType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminCommentaires_edit', array('id' => $id)));
        }

        return $this->render('BlogOrnoirBundle:BlogCommentaires:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a BlogCommentaires entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BlogOrnoirBundle:BlogCommentaires')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find BlogCommentaires entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('adminCommentaires'));
    }

    /**
     * Creates a form to delete a BlogCommentaires entity by id.
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
