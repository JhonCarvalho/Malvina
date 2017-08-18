<?php
/**
 * Created by PhpStorm.
 * User: jhon.carvalho
 * Date: 17/08/2017
 * Time: 11:06
 */

namespace Application\Controller;


use Application\Entity\Evento;
use Application\Form\formEvento;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class EventoController extends AbstractActionController
{

    public function indexAction()
    {

       // var_dump($form);exit;
        return new ViewModel(); // TODO: Change the autogenerated stub
    }
    
    public function addAction(){
        $data = $this->getRequest();

        if($data->isPost()){
            $eventoService = $this->getServiceLocator()->get('EventoService');
            $evento = new Evento();
            try{
                $evento->setContratante($data->getPost('contratante'));
                $evento->setLocal($data->getPost('local'));
                $evento->setDescricao($data->getPost('descricao'));
                $evento->setVendedor($data->getPost('vendedor'));
                $evento->setVlTotal($data->getPost('vl_total'));
                $evento->setCacheIntegrante($data->getPost('cache_integrante'));
                $evento->setVlLiquido($data->getPost('vl_liquido'));
                $evento->setVlCaixa($data->getPost('vl_caixa'));
                $evento->setDtEvento(new \DateTime($data->getPost('dt_evento')));
                $evento->setNomeEvento($data->getPost('nome_evento'));
                $evento->setOperacao($data->getPost('operacao'));
                $eventoService->inserir($evento);
                //var_dump($evento);exit;

            }catch(\Exception $e){

            }
        }else{
            $form = new formEvento();
            $resp = array('form' =>$form);
            // var_dump($form);exit;
            return new ViewModel($resp);
        }
        
    }
    public function menuDespesaAction(){
        
        return new ViewModel();
    }
}