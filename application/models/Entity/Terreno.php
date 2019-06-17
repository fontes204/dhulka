<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 26/09/18
 * Time: 14:26
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="terreno")
 */
class Terreno
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="string", name="codigo")
     */
    protected $codigo ;
    /**
     * @Column(type="float", name="area")
     */
    protected $area;

    /**
     * @Column(type="float", name="largura")
     */
    protected $largura;

    /**
     * @Column(type="float", name="comprimento")
     */
    protected $comprimento;

    /**
     * @Column(type="string", name="bloco")
     */
    protected $bloco;

    /**
     * @Column(type="string", name="quarteirao")
     */
    protected $quarteirao;

    /**
     * @Column(type="integer", name="lote")
     */
    protected $lote;

    /**
     * @Column(type="integer", name="num_vertice")
     */
    protected $num_vertice;

    /**
     * @Column(type="integer", name="zona")
     */
    protected $zona;

    /**
     * @Column(type="integer", name="criador")
     */
    protected $criador;

    /**
     * @Column(type="integer", name="tipo")
     */
    protected $tipo;

    /**
     * @Column(type="string", name="data_criacao")
     */
    protected $data_criacao;

    /**
     * Terreno constructor.
     * @param $codigo
     * @param $area
     * @param $largura
     * @param $comprimento
     * @param $bloco
     * @param $quarteirao
     * @param $lote
     * @param $num_vertice
     * @param $zona
     * @param $criador
     * @param $tipo
     */
    public function __construct($codigo, $area, $largura, $comprimento, $bloco, $quarteirao, $lote, $num_vertice, $zona, $criador, $tipo)
    {
        $this->codigo = $codigo;
        $this->area = $area;
        $this->largura = $largura;
        $this->comprimento = $comprimento;
        $this->bloco = $bloco;
        $this->quarteirao = $quarteirao;
        $this->lote = $lote;
        $this->num_vertice = $num_vertice;
        $this->zona = $zona;
        $this->criador = $criador;
        $this->tipo = $tipo;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return mixed
     */
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * @param mixed $largura
     */
    public function setLargura($largura)
    {
        $this->largura = $largura;
    }

    /**
     * @return mixed
     */
    public function getComprimento()
    {
        return $this->comprimento;
    }

    /**
     * @param mixed $comprimento
     */
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;
    }

    /**
     * @return mixed
     */
    public function getBloco()
    {
        return $this->bloco;
    }

    /**
     * @param mixed $bloco
     */
    public function setBloco($bloco)
    {
        $this->bloco = $bloco;
    }

    /**
     * @return mixed
     */
    public function getQuarteirao()
    {
        return $this->quarteirao;
    }

    /**
     * @param mixed $quarteirao
     */
    public function setQuarteirao($quarteirao)
    {
        $this->quarteirao = $quarteirao;
    }

    /**
     * @return mixed
     */
    public function getLote()
    {
        return $this->lote;
    }

    /**
     * @param mixed $lote
     */
    public function setLote($lote)
    {
        $this->lote = $lote;
    }

    /**
     * @return mixed
     */
    public function getNumVertice()
    {
        return $this->num_vertice;
    }

    /**
     * @param mixed $num_vertice
     */
    public function setNumVertice($num_vertice)
    {
        $this->num_vertice = $num_vertice;
    }

    /**
     * @return mixed
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * @param mixed $zona
     */
    public function setZona($zona)
    {
        $this->zona = $zona;
    }

    /**
     * @return mixed
     */
    public function getCriador()
    {
        return $this->criador;
    }

    /**
     * @param mixed $criador
     */
    public function setCriador($criador)
    {
        $this->criador = $criador;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getDataCriacao()
    {
        return $this->data_criacao;
    }

    /**
     * @param mixed $data_criacao
     */
    public function setDataCriacao($data_criacao)
    {
        $this->data_criacao = $data_criacao;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }


}