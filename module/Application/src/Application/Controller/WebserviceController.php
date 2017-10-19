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
use Employeweb\WebserviceEmploye;
use Zend\XmlRpc\Generator\XmlWriter;
use Zend\Dom\Query;

class WebserviceController extends AbstractActionController
{   
    public function indexAction()
    {   
        $Emp = new WebserviceEmploye();
        $Emp->toxml();
        $xml = $Emp->getxml();
        
        return new ViewModel(array('data'=>$xml));
    }
    
     public function queryAction(){   
        $salarymin = $this->getRequest()->getPost('salarios1');
        $salarymax = $this->getRequest()->getPost('salarios2');  
         
        $Emp = new WebserviceEmploye();      
        $employees =  $Emp->getqueryxml($salarymin, $salarymax);   
        
        return new ViewModel(array('data'=>$employees, 'salarymin'=>$salarymin, 'salarymax'=>$salarymax));
    }
    
    
    
   
}
