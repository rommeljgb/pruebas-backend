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

class ClearparController extends AbstractActionController
{
    public function indexAction()
    {
        //$cadena = new CompleteRange();
        
        return new ViewModel(array('data'=>''));
    }

    public function paresvalAction()
    {
        $cadenarango = $this->getRequest()->getPost('txtcadena');
        $Change = new ClearPar();
        $response = $Change->build($cadenarango);     
        
        return new ViewModel(array('str'=>$cadenarango, 'data'=>$response));
    }    
}
