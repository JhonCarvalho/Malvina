<?php
namespace Application\Form;

use Zend\Form\Form;

/**
 * Created by PhpStorm.
 * User: jhon.carvalho
 * Date: 17/08/2017
 * Time: 14:05
 */
class formEvento extends Form
{

    public function __construct($name, array $options)
    {
        parent::__construct('inserirEvento');

        $this->add(array(
            'options' => array(
                'label' => 'Nome do Evento'
            ),
            'name' => 'nome_evento',
            'attributes' => array(
                'type' => 'text',
                'placeholder' => 'Nome do Evento',
                'class' => 'form-control',
            ),
        ));

        $this->add(array(
            'options' => array(
                'label' => 'Local'
            ),
            'name' => 'local',
            'attributes' => array(
                'type' => 'text',
                'placeholder' => 'Local do Evento',
                'class' => 'form-control',
            ),
        ));

        $this->add(array(
            'options' => array(
                'label' => 'Data do Evento'
            ),
            'name' => 'dt_evento',
            'attributes' => array(
                'type' => 'date',
                'placeholder' => 'Data do Evento',
                'class' => 'form-control',
            ),
        ));
        $this->add(array(
            'options' => array(
                'label' => 'Valor do contrato'
            ),
            'name' => 'vl_total',
            'attributes' => array(
                'type' => 'text',
                'placeholder' => 'Valor total do contrato',
                'class' => 'form-control',
            ),
        ));
        $this->add(array(
            'options' => array(
                'label' => 'Contratante'
            ),
            'name' => 'contratante',
            'attributes' => array(
                'type' => 'text',
                'placeholder' => 'Nome do contratante do show',
                'class' => 'form-control',
            ),
        ));
        $this->add(array(
            'options' => array(
                'label' => 'Vendedor'
            ),
            'name' => 'vendedor',
            'attributes' => array(
                'type' => 'text',
                'placeholder' => 'Nome de quem vendeu o show',
                'class' => 'form-control',
            ),
        ));
        $this->add(array(
            'options' => array(
                'label' => 'Valor líquido'
            ),
            'name' => 'vl_liquido',
            'attributes' => array(
                'type' => 'text',
                'placeholder' => 'Valor restante após os desconto de todas as despesas',
                'class' => 'form-control',
                'desabled'=> 'desabled',
            ),
        ));
        $this->add(array(
            'options' => array(
                'label' => 'Descrição do Evento'
            ),
            'name' => 'descricao',
            'attributes' => array(
                'type' => 'text',
                'placeholder' => 'Descrição do que foi feito no evento ',
                'class' => 'form-control',
            ),
        ));
        $this->add(array(
            'options' => array(
                'label' => 'Valor Caixa'
            ),
            'name' => 'vl_caixa',
            'attributes' => array(
                'type' => 'text',
                'placeholder' => 'Valor destinado ao caixa',
                'class' => 'form-control',
            ),
        ));
        $this->add(array(
            'options' => array(
                'label' => 'Cache por Integrante'
            ),
            'name' => 'cache_integrante',
            'attributes' => array(
                'type' => 'text',
                'placeholder' => 'Divisão de valores entre os integrantes da banda',
                'class' => 'form-control',
            ),
        ));
        $this->add(array(
            'type' => 'select',
            'options' => array(
                'label' => 'Operação',
                'valeu_options'=>array(
                    'D'=>'Investimento',
                    'C'=>'Show'
                )
            ),
            'name' => 'operacao',
            'attributes' => array(
                'placeholder' => 'Operação ...',
                'class' => 'form-control',
            ),
        ));
        /*$this->add(array(
            ''
        ))*/

    }
}