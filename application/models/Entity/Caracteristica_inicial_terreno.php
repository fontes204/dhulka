<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 12/10/18
 * Time: 16:53
 */

namespace Entity;


/**
 *
 * @Entity
 * @Table(name="caracteristica_inicial_terreno")
 */
class Caracteristica_inicial_terreno
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="integer", name="id_processo")
     */
    protected $id_processo;

    /**
     * @Column(type="integer", name="id_bairro")
     */
    protected $id_bairro;

    /**
     * @Column(type="string", name="quarteirao")
     */
    protected $quarteirao;

    /**
     * @Column(type="string", name="rua")
     */
    protected $rua;

    /**
     * @Column(type="string", name="dimensao_terreno")
     */
    protected $dimensao_terreno;

    /**
     * Caracteristica_inicial_terreno constructor.
     * @param $id_processo
     * @param $id_bairro
     * @param $quarteirao
     * @param $rua
     * @param $dimensao_terreno
     */
    public function __construct($id_processo, $id_bairro, $quarteirao, $rua, $dimensao_terreno)
    {
        $this->id_processo = $id_processo;
        $this->id_bairro = $id_bairro;
        $this->quarteirao = $quarteirao;
        $this->rua = $rua;
        $this->dimensao_terreno = $dimensao_terreno;
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
    public function getIdProcesso()
    {
        return $this->id_processo;
    }

    /**
     * @param mixed $id_processo
     */
    public function setIdProcesso($id_processo)
    {
        $this->id_processo = $id_processo;
    }

    /**
     * @return mixed
     */
    public function getIdBairro()
    {
        return $this->id_bairro;
    }

    /**
     * @param mixed $id_bairro
     */
    public function setIdBairro($id_bairro)
    {
        $this->id_bairro = $id_bairro;
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
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * @param mixed $rua
     */
    public function setRua($rua)
    {
        $this->rua = $rua;
    }

    /**
     * @return mixed
     */
    public function getDimensaoTerreno()
    {
        return $this->dimensao_terreno;
    }

    /**
     * @param mixed $dimensao_terreno
     */
    public function setDimensaoTerreno($dimensao_terreno)
    {
        $this->dimensao_terreno = $dimensao_terreno;
    }


}