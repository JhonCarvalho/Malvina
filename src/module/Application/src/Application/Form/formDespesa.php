<?php
/**
 * Created by PhpStorm.
 * User: jhon.carvalho
 * Date: 18/08/2017
 * Time: 14:26
 */

namespace Application\Form;


use Zend\Form\Form;

class formDespesa extends Form
{

    public function __construct($name=null)
    {
        parent::__construct('inserirDespesa');
        $this->add(array(
           'options'=>array(
               'label'=>'Descrição'
           ),
            'name'=>'descricao',
            'attributes'=>array(
                'type'=>'textarea',
                'class'=>'form-control'
            )

        ));

        $this->add(array(
            'options'=>array(
                'label'=>'Valor total'
            ),
            'name'=>'vl_total',
            'attributes'=>array(
                'type'=>'text',
                'class'=>'form-control',
            )
        ));
    }
}