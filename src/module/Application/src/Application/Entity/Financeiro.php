<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Financeiro
 *
 * @ORM\Table(name="financeiro", indexes={@ORM\Index(name="id_evento_idx", columns={"id_evento"})})
 * @ORM\Entity
 */
class Financeiro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_financeiro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFinanceiro;

    /**
     * @var float
     *
     * @ORM\Column(name="total_caixa", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalCaixa;

    /**
     * @var string
     *
     * @ORM\Column(name="operacao", type="string", length=1, nullable=true)
     */
    private $operacao;

    /**
     * @var \Application\Entity\Evento
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Evento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_evento", referencedColumnName="id_evento")
     * })
     */
    private $idEvento;



    /**
     * Get idFinanceiro
     *
     * @return integer
     */
    public function getIdFinanceiro()
    {
        return $this->idFinanceiro;
    }

    /**
     * Set totalCaixa
     *
     * @param float $totalCaixa
     *
     * @return Financeiro
     */
    public function setTotalCaixa($totalCaixa)
    {
        $this->totalCaixa = $totalCaixa;

        return $this;
    }

    /**
     * Get totalCaixa
     *
     * @return float
     */
    public function getTotalCaixa()
    {
        return $this->totalCaixa;
    }

    /**
     * Set operacao
     *
     * @param string $operacao
     *
     * @return Financeiro
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

    /**
     * Set idEvento
     *
     * @param \Application\Entity\Evento $idEvento
     *
     * @return Financeiro
     */
    public function setIdEvento(\Application\Entity\Evento $idEvento = null)
    {
        $this->idEvento = $idEvento;

        return $this;
    }

    /**
     * Get idEvento
     *
     * @return \Application\Entity\Evento
     */
    public function getIdEvento()
    {
        return $this->idEvento;
    }
}
