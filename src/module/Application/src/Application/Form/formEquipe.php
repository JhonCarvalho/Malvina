<?php
/**
 * Created by PhpStorm.
 * User: jhon.carvalho
 * Date: 23/08/2017
 * Time: 09:19
 */

namespace Application\Form;


use Zend\Form\Form;

class formEquipe extends Form
{
    public function __construct($name=null)
    {
        parent::__construct('inserirEquipe');

        $this->add(array(
            'options' => array(
                'label' => 'Nome'
            ),
            'name' => 'nome',
            'attributes' => array(
                'type' => 'text',
                'placeholder' => 'Nome do profissional',
                'class' => 'form-control',
            ),
        ));
        $this->add(array(
            'options' => array(
                'label' => 'Função'
            ),
            'name' => 'funcao',
            'attributes' => array(
                'type' => 'text',
                'placeholder' => 'função',
                'class' => 'form-control',
            ),
        ));
        $this->add(array(
            'options' => array(
                'label' => 'Valor do Cache'
            ),
            'name' => 'cache',
            'attributes' => array(
                'type' => 'text',
                'placeholder' => 'Valor do cache',
                'class' => 'form-control',
            ),
        ));

    }

}