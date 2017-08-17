<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Despesa
 *
 * @ORM\Table(name="despesa", indexes={@ORM\Index(name="id_evento_idx", columns={"id_evento"})})
 * @ORM\Entity
 */
class Despesa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_despesa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDespesa;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=345, nullable=true)
     */
    private $descricao;

    /**
     * @var float
     *
     * @ORM\Column(name="vl_total", type="float", precision=10, scale=0, nullable=true)
     */
    private $vlTotal;

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
     * Get idDespesa
     *
     * @return integer
     */
    public function getIdDespesa()
    {
        return $this->idDespesa;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Despesa
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
     * Set vlTotal
     *
     * @param float $vlTotal
     *
     * @return Despesa
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
     * Set idEvento
     *
     * @param \Application\Entity\Evento $idEvento
     *
     * @return Despesa
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
