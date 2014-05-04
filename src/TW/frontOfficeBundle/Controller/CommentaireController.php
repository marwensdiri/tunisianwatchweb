<?php

namespace TW\frontOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TW\frontOfficeBundle\Entity\Commentaire;
use TW\frontOfficeBundle\Form\CommentaireType;

/**
 * Commentaire controller.
 *
 */
class CommentaireController extends Controller {

    /**
     * Lists all Commentaire entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TWfrontOfficeBundle:Commentaire')->findAll();

        return $this->render('TWfrontOfficeBundle:Commentaire:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Commentaire entity.
     *
     */
    public function createAction(Request $request,$reclamation_id) {
        
        $entity = new Commentaire();
        $reclamation = $this->getReclamation($reclamation_id);
        $entity->setIdreclamation($reclamation);
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Commentaire_show', array('id' => $entity->getId())));
        }

        return $this->render('TWfrontOfficeBundle:Commentaire:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Commentaire entity.
     *
     * @param Commentaire $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Commentaire $entity) {
        $form = $this->createForm(new CommentaireType(), $entity);

        $form->add('submit', 'submit', array('label' => 'Commenter', 'attr' => array(
                'class' => 'btn')));

        return $form;
    }

    /**
     * Displays a form to create a new Commentaire entity.
     *
     */
    public function newAction($reclamation_id){
        $entity = new Commentaire();
        $reclamation = $this->getReclamation($reclamation_id);
        $entity->setIdreclamation($reclamation);
        $form = $this->createCreateForm($entity);

        return $this->render('TWfrontOfficeBundle:Commentaire:new.html.twig', array(
                    'commentaire' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Commentaire entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TWfrontOfficeBundle:Commentaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentaire entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TWfrontOfficeBundle:Commentaire:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Commentaire entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TWfrontOfficeBundle:Commentaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentaire entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TWfrontOfficeBundle:Commentaire:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Commentaire entity.
     *
     * @param Commentaire $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Commentaire $entity) {
        $form = $this->createForm(new CommentaireType(), $entity, array(
            'action' => $this->generateUrl('Commentaire_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Commentaire entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TWfrontOfficeBundle:Commentaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentaire entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('Commentaire_edit', array('id' => $id)));
        }

        return $this->render('TWfrontOfficeBundle:Commentaire:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Commentaire entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TWfrontOfficeBundle:Commentaire')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Commentaire entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Commentaire'));
    }

    /**
     * Creates a form to delete a Commentaire entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('Commentaire_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    protected function getReclamation($reclamation_id) {
        $em = $this->getDoctrine()
                ->getEntityManager();

        $reclamation = $em->getRepository('TWfrontOfficeBundle:Reclamation')->find($reclamation_id);

        if (!$reclamation) {
            throw $this->createNotFoundException('Unable to find Reclamation post.');
        }
        return $reclamation;
    }

}
