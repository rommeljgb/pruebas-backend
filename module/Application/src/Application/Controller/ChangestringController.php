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
use Parteuno\ChangeString;

class ChangestringController extends AbstractActionController
{
    public function indexAction()
    {
        //$string = new ChangeString();
        
        return new ViewModel(array('data'=>''));
    }

    public function strvalAction()
    {
        $cadena = strtolower($this->getRequest()->getPost('txtcadena'));
        $Change = new ChangeString();
        $response = $Change->build($cadena);     
        
        return new ViewModel(array('str'=>$cadena,'data'=>$response));
    }    
}
