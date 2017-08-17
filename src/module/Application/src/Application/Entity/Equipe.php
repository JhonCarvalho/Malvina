<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe", indexes={@ORM\Index(name="id_evento_idx", columns={"id_evento"})})
 * @ORM\Entity
 */
class Equipe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_equipe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipe;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=145, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="funcao", type="string", length=145, nullable=true)
     */
    private $funcao;

    /**
     * @var float
     *
     * @ORM\Column(name="cache", type="float", precision=10, scale=0, nullable=true)
     */
    private $cache;

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
     * Get idEquipe
     *
     * @return integer
     */
    public function getIdEquipe()
    {
        return $this->idEquipe;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Equipe
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set funcao
     *
     * @param string $funcao
     *
     * @return Equipe
     */
    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;

        return $this;
    }

    /**
     * Get funcao
     *
     * @return string
     */
    public function getFuncao()
    {
        return $this->funcao;
    }

    /**
     * Set cache
     *
     * @param float $cache
     *
     * @return Equipe
     */
    public function setCache($cache)
    {
        $this->cache = $cache;

        return $this;
    }

    /**
     * Get cache
     *
     * @return float
     */
    public function getCache()
    {
        return $this->cache;
    }

    /**
     * Set idEvento
     *
     * @param \Application\Entity\Evento $idEvento
     *
     * @return Equipe
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
