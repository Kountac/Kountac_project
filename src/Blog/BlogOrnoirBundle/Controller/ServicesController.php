<?php

namespace Blog\BlogOrnoirBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Blog\BlogOrnoirBundle\Entity\Services;
use Blog\BlogOrnoirBundle\Form\ServicesType;

/**
 * Services controller.
 *
 */
class ServicesController extends Controller
{
    /**
     * Lists all Services entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BlogOrnoirBundle:Services')->findAll();

        return $this->render('BlogOrnoirBundle:Services:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Services entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Services();
        $user = $this->getUser();
        $entity->setDateAjout(new \DateTime('now'));
        $entity->setDateUpdate(new \DateTime('now'));
        $entity->setEditeur($user);
        $form = $this->createForm(new ServicesType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminServices_show', array('id' => $entity->getId())));
        }

        return $this->render('BlogOrnoirBundle:Services:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Services entity.
     *
     */
    public function newAction()
    {
        $entity = new Services();
        $form   = $this->createForm(new ServicesType(), $entity);

        return $this->render('BlogOrnoirBundle:Services:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Services entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BlogOrnoirBundle:Services')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Services entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BlogOrnoirBundle:Services:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Services entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BlogOrnoirBundle:Services')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Services entity.');
        }

        $editForm = $this->createForm(new ServicesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BlogOrnoirBundle:Services:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Services entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BlogOrnoirBundle:Services')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Services entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ServicesType(), $entity);
        $editForm->bind($request);
        $entity->setDateUpdate(new \DateTime('now'));
        

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminServices_show', array('id' => $id)));
        }

        return $this->render('BlogOrnoirBundle:Services:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Services entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BlogOrnoirBundle:Services')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Services entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('adminServices'));
    }

    /**
     * Creates a form to delete a Services entity by id.
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
