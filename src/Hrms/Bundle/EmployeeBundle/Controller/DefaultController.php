<?php

namespace Hrms\Bundle\EmployeeBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Hrms\Bundle\EmployeeBundle\Entity\HrmEmployee;
use Hrms\Bundle\EmployeeBundle\Form\HrmEmployeeType;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
           
           /*
              //object of employeee class  
              $task = new HrmEmployee();
              
              
 $form = $this->createForm(new HrmEmployeeType(), $task);   
 if ($request->isMethod('POST')) {
        $form->bind($request);

        if ($form->isValid()) {
            // perform some action, such as saving the task to the database

//            return $this->redirect($this->generateUrl('task_success'));
        }
    }
          
       return  $this->render('HrmsEmployeeBundle:Default:index.html.php', array('form' => $form->createView()));
            * 
            * /
            */
          return  $this->render('HrmsEmployeeBundle:Default:index.html.php');
    }
}
