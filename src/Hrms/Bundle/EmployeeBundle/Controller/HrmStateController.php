<?php

namespace Hrms\Bundle\EmployeeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Hrms\Bundle\EmployeeBundle\Entity\HrmState;
use Hrms\Bundle\EmployeeBundle\Form\HrmStateType;

/**
 * HrmState controller.
 *
 * @Route("/hrmstate")
 */
class HrmStateController extends Controller
{
    /**
     * Lists all HrmState entities.
     *
     * @Route("/", name="hrmstate")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HrmsEmployeeBundle:HrmState')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new HrmState entity.
     *
     * @Route("/", name="hrmstate_create")
     * @Method("POST")
     * @Template("HrmsEmployeeBundle:HrmState:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new HrmState();
        $form = $this->createForm(new HrmStateType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hrmstate_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new HrmState entity.
     *
     * @Route("/new", name="hrmstate_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new HrmState();
        $form   = $this->createForm(new HrmStateType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a HrmState entity.
     *
     * @Route("/{id}", name="hrmstate_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HrmsEmployeeBundle:HrmState')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HrmState entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing HrmState entity.
     *
     * @Route("/{id}/edit", name="hrmstate_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HrmsEmployeeBundle:HrmState')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HrmState entity.');
        }

        $editForm = $this->createForm(new HrmStateType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing HrmState entity.
     *
     * @Route("/{id}", name="hrmstate_update")
     * @Method("PUT")
     * @Template("HrmsEmployeeBundle:HrmState:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HrmsEmployeeBundle:HrmState')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HrmState entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new HrmStateType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hrmstate_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a HrmState entity.
     *
     * @Route("/{id}", name="hrmstate_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HrmsEmployeeBundle:HrmState')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find HrmState entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hrmstate'));
    }

    /**
     * Creates a form to delete a HrmState entity by id.
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
