<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Parteuno\ClearPar;
use Zend\View\Model\JsonModel;
use Zend\Json\Json;
use Employeweb\Employees;


class EmployeesController extends AbstractActionController
{   
    public function indexAction()
    {   
        $Emp = new Employees();
        $newemploye = $Emp->lista($this->getRequest()->getPost('emails'));        
        
        return new ViewModel(array('data'=>$newemploye));
    }
    
    public function detailAction()
    {
        $id=$this->params()->fromRoute("id",null);
        
        $Emp = new Employees();
        $array = $Emp->query($id);
        
        return new ViewModel(array('data'=>$array));
    }  
}
