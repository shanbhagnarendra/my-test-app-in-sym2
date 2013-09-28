<?php

namespace Hrms\Bundle\EmployeeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Hrms\Bundle\EmployeeBundle\Entity\HrmRoles;
use Hrms\Bundle\EmployeeBundle\Form\HrmRolesType;

/**
 * HrmRoles controller.
 *
 * @Route("/hrmroles")
 */
class HrmRolesController extends Controller
{
    /**
     * Lists all HrmRoles entities.
     *
     * @Route("/", name="hrmroles")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HrmsEmployeeBundle:HrmRoles')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new HrmRoles entity.
     *
     * @Route("/", name="hrmroles_create")
     * @Method("POST")
     * @Template("HrmsEmployeeBundle:HrmRoles:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new HrmRoles();
        $form = $this->createForm(new HrmRolesType(), $entity);
        $form->bind($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hrmroles_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new HrmRoles entity.
     *
     * @Route("/new", name="hrmroles_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new HrmRoles();
        $form   = $this->createForm(new HrmRolesType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a HrmRoles entity.
     *
     * @Route("/{id}", name="hrmroles_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HrmsEmployeeBundle:HrmRoles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HrmRoles entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing HrmRoles entity.
     *
     * @Route("/{id}/edit", name="hrmroles_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HrmsEmployeeBundle:HrmRoles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HrmRoles entity.');
        }

        $editForm = $this->createForm(new HrmRolesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing HrmRoles entity.
     *
     * @Route("/{id}", name="hrmroles_update")
     * @Method("PUT")
     * @Template("HrmsEmployeeBundle:HrmRoles:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HrmsEmployeeBundle:HrmRoles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HrmRoles entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new HrmRolesType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hrmroles_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a HrmRoles entity.
     *
     * @Route("/{id}", name="hrmroles_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HrmsEmployeeBundle:HrmRoles')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find HrmRoles entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hrmroles'));
    }

    /**
     * Creates a form to delete a HrmRoles entity by id.
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
