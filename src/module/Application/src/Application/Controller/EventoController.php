<?php
/**
 * Created by PhpStorm.
 * User: jhon.carvalho
 * Date: 17/08/2017
 * Time: 11:06
 */

namespace Application\Controller;


use Application\Form\formEvento;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Helper\ViewModel;

class EventoController extends AbstractActionController
{

    public function indexAction()
    {
        $form = new formEvento();
        $resp = array('form' =>$form);
       // var_dump($form);exit;
        return new ViewModel($resp); // TODO: Change the autogenerated stub
    }
    
    public function addAction(){
        
    }
}