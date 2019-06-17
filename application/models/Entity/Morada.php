<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 20/08/18
 * Time: 13:05
 */

namespace Entity;


/**
 *
 * @Entity
 * @Table(name="morada")
 */
class Morada
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="integer", name="id_comuna")
     */
    protected $id_comuna;
    /**
     * @Column(type="integer", name="id_cidadao")
     */
    protected $id_cidadao;
    /**
     * @Column(type="string", name="bairro")
     */
    protected $bairro;
    /**
     * @Column(type="integer", name="rua")
     */
    protected $rua;

    /**
     * Morada constructor.
     * @param $id_comuna
     * @param $id_cidadao
     * @param $bairro
     * @param $rua
     */
    public function __construct($id_comuna, $id_cidadao, $bairro, $rua)
    {
        $this->id_comuna = $id_comuna;
        $this->id_cidadao = $id_cidadao;
        $this->bairro = $bairro;
        $this->rua = $rua;
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
    public function getIdComuna()
    {
        return $this->id_comuna;
    }

    /**
     * @param mixed $id_comuna
     */
    public function setIdComuna($id_comuna)
    {
        $this->id_comuna = $id_comuna;
    }

    /**
     * @return mixed
     */
    public function getIdCidadao()
    {
        return $this->id_cidadao;
    }

    /**
     * @param mixed $id_cidadao
     */
    public function setIdCidadao($id_cidadao)
    {
        $this->id_cidadao = $id_cidadao;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
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



}