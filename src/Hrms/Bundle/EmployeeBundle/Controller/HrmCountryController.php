<?php

namespace Hrms\Bundle\EmployeeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Hrms\Bundle\EmployeeBundle\Entity\HrmCountry;
use Hrms\Bundle\EmployeeBundle\Form\HrmCountryType;

/**
 * HrmCountry controller.
 *
 */
class HrmCountryController extends Controller
{
    /**
     * Lists all HrmCountry entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HrmsEmployeeBundle:HrmCountry')->findAll();

        return $this->render('HrmsEmployeeBundle:HrmCountry:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new HrmCountry entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new HrmCountry();
        $form = $this->createForm(new HrmCountryType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hrmcountry_show', array('id' => $entity->getId())));
        }

        return $this->render('HrmsEmployeeBundle:HrmCountry:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new HrmCountry entity.
     *
     */
    public function newAction()
    {
        $entity = new HrmCountry();
        $form   = $this->createForm(new HrmCountryType(), $entity);

        return $this->render('HrmsEmployeeBundle:HrmCountry:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a HrmCountry entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HrmsEmployeeBundle:HrmCountry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HrmCountry entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HrmsEmployeeBundle:HrmCountry:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing HrmCountry entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HrmsEmployeeBundle:HrmCountry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HrmCountry entity.');
        }

        $editForm = $this->createForm(new HrmCountryType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HrmsEmployeeBundle:HrmCountry:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing HrmCountry entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HrmsEmployeeBundle:HrmCountry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HrmCountry entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new HrmCountryType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hrmcountry_edit', array('id' => $id)));
        }

        return $this->render('HrmsEmployeeBundle:HrmCountry:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a HrmCountry entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HrmsEmployeeBundle:HrmCountry')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find HrmCountry entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hrmcountry'));
    }

    /**
     * Creates a form to delete a HrmCountry entity by id.
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
