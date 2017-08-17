<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evento
 *
 * @ORM\Table(name="evento")
 * @ORM\Entity
 */
class Evento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_evento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvento;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_evento", type="string", length=145, nullable=true)
     */
    private $nomeEvento;

    /**
     * @var string
     *
     * @ORM\Column(name="local", type="string", length=145, nullable=true)
     */
    private $local;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_evento", type="date", nullable=true)
     */
    private $dtEvento;

    /**
     * @var float
     *
     * @ORM\Column(name="vl_total", type="float", precision=10, scale=0, nullable=true)
     */
    private $vlTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="contratante", type="string", length=145, nullable=true)
     */
    private $contratante;

    /**
     * @var string
     *
     * @ORM\Column(name="vendedor", type="string", length=145, nullable=true)
     */
    private $vendedor;

    /**
     * @var string
     *
     * @ORM\Column(name="vl_liquido", type="string", length=145, nullable=true)
     */
    private $vlLiquido;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=450, nullable=true)
     */
    private $descricao;

    /**
     * @var float
     *
     * @ORM\Column(name="vl_caixa", type="float", precision=10, scale=0, nullable=true)
     */
    private $vlCaixa;

    /**
     * @var float
     *
     * @ORM\Column(name="cache_integrante", type="float", precision=10, scale=0, nullable=true)
     */
    private $cacheIntegrante;

    /**
     * @var string
     *
     * @ORM\Column(name="operacao", type="string", length=1, nullable=true)
     */
    private $operacao;



    /**
     * Get idEvento
     *
     * @return integer
     */
    public function getIdEvento()
    {
        return $this->idEvento;
    }

    /**
     * Set nomeEvento
     *
     * @param string $nomeEvento
     *
     * @return Evento
     */
    public function setNomeEvento($nomeEvento)
    {
        $this->nomeEvento = $nomeEvento;

        return $this;
    }

    /**
     * Get nomeEvento
     *
     * @return string
     */
    public function getNomeEvento()
    {
        return $this->nomeEvento;
    }

    /**
     * Set local
     *
     * @param string $local
     *
     * @return Evento
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return string
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set dtEvento
     *
     * @param \DateTime $dtEvento
     *
     * @return Evento
     */
    public function setDtEvento($dtEvento)
    {
        $this->dtEvento = $dtEvento;

        return $this;
    }

    /**
     * Get dtEvento
     *
     * @return \DateTime
     */
    public function getDtEvento()
    {
        return $this->dtEvento;
    }

    /**
     * Set vlTotal
     *
     * @param float $vlTotal
     *
     * @return Evento
     */
    public function setVlTotal($vlTotal)
    {
        $this->vlTotal = $vlTotal;

        return $this;
    }

    /**
     * Get vlTotal
     *
     * @return float
     */
    public function getVlTotal()
    {
        return $this->vlTotal;
    }

    /**
     * Set contratante
     *
     * @param string $contratante
     *
     * @return Evento
     */
    public function setContratante($contratante)
    {
        $this->contratante = $contratante;

        return $this;
    }

    /**
     * Get contratante
     *
     * @return string
     */
    public function getContratante()
    {
        return $this->contratante;
    }

    /**
     * Set vendedor
     *
     * @param string $vendedor
     *
     * @return Evento
     */
    public function setVendedor($vendedor)
    {
        $this->vendedor = $vendedor;

        return $this;
    }

    /**
     * Get vendedor
     *
     * @return string
     */
    public function getVendedor()
    {
        return $this->vendedor;
    }

    /**
     * Set vlLiquido
     *
     * @param string $vlLiquido
     *
     * @return Evento
     */
    public function setVlLiquido($vlLiquido)
    {
        $this->vlLiquido = $vlLiquido;

        return $this;
    }

    /**
     * Get vlLiquido
     *
     * @return string
     */
    public function getVlLiquido()
    {
        return $this->vlLiquido;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Evento
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set vlCaixa
     *
     * @param float $vlCaixa
     *
     * @return Evento
     */
    public function setVlCaixa($vlCaixa)
    {
        $this->vlCaixa = $vlCaixa;

        return $this;
    }

    /**
     * Get vlCaixa
     *
     * @return float
     */
    public function getVlCaixa()
    {
        return $this->vlCaixa;
    }

    /**
     * Set cacheIntegrante
     *
     * @param float $cacheIntegrante
     *
     * @return Evento
     */
    public function setCacheIntegrante($cacheIntegrante)
    {
        $this->cacheIntegrante = $cacheIntegrante;

        return $this;
    }

    /**
     * Get cacheIntegrante
     *
     * @return float
     */
    public function getCacheIntegrante()
    {
        return $this->cacheIntegrante;
    }

    /**
     * Set operacao
     *
     * @param string $operacao
     *
     * @return Evento
     */
    public function setOperacao($operacao)
    {
        $this->operacao = $operacao;

        return $this;
    }

    /**
     * Get operacao
     *
     * @return string
     */
    public function getOperacao()
    {
        return $this->operacao;
    }
}
