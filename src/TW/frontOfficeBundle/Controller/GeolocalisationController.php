<?php

namespace TW\frontOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TW\frontOfficeBundle\Entity\Geolocalisation;
use TW\frontOfficeBundle\Form\GeolocalisationType;

/**
 * Geolocalisation controller.
 *
 */
class GeolocalisationController extends Controller
{

    /**
     * Lists all Geolocalisation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TWfrontOfficeBundle:Geolocalisation')->findAll();

        return $this->render('TWfrontOfficeBundle:Geolocalisation:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Geolocalisation entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Geolocalisation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('geolocalisation_show', array('id' => $entity->getId())));
        }

        return $this->render('TWfrontOfficeBundle:Geolocalisation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Geolocalisation entity.
    *
    * @param Geolocalisation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Geolocalisation $entity)
    {
        $form = $this->createForm(new GeolocalisationType(), $entity, array(
            'action' => $this->generateUrl('geolocalisation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Geolocalisation entity.
     *
     */
    public function newAction()
    {
        $entity = new Geolocalisation();
        $form   = $this->createCreateForm($entity);

        return $this->render('TWfrontOfficeBundle:Geolocalisation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Geolocalisation entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TWfrontOfficeBundle:Geolocalisation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Geolocalisation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TWfrontOfficeBundle:Geolocalisation:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Geolocalisation entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TWfrontOfficeBundle:Geolocalisation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Geolocalisation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TWfrontOfficeBundle:Geolocalisation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Geolocalisation entity.
    *
    * @param Geolocalisation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Geolocalisation $entity)
    {
        $form = $this->createForm(new GeolocalisationType(), $entity, array(
            'action' => $this->generateUrl('geolocalisation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Geolocalisation entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TWfrontOfficeBundle:Geolocalisation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Geolocalisation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('geolocalisation_edit', array('id' => $id)));
        }

        return $this->render('TWfrontOfficeBundle:Geolocalisation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Geolocalisation entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TWfrontOfficeBundle:Geolocalisation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Geolocalisation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('geolocalisation'));
    }

    /**
     * Creates a form to delete a Geolocalisation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('geolocalisation_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
