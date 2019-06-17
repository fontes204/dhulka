<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 14/09/18
 * Time: 15:48
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="projecto")
 */
class Projecto
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="integer", name="id_bairro")
     */
    protected $id_bairro;

    /**
     * @Column(type="integer", name="coordenador")
     */
    protected $coordenador;

    /**
     * @Column(type="string", name="data_criacao")
     */
    protected $data_criacao;

    /**
     * @Column(type="integer", name="estado")
     */
    protected $estado;

    /**
     * Projecto constructor.
     * @param $id_bairro
     * @param $coordenador
     * @param $data_criacao
     * @param $estado
     */
    public function __construct($id_bairro, $coordenador, $estado)
    {
        $this->id_bairro = $id_bairro;
        $this->coordenador = $coordenador;
        $this->estado = $estado;
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
    public function getCoordenador()
    {
        return $this->coordenador;
    }

    /**
     * @param mixed $coordenador
     */
    public function setCoordenador($coordenador)
    {
        $this->coordenador = $coordenador;
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
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }


}