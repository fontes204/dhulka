<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 22/08/18
 * Time: 22:29
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="entrada_saida")
 */
class Entrada_saida
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="integer", name="id_saida")
     */
    protected $id_saida;

    /**
     * @Column(type="integer", name="id_entrada")
     */
    protected $id_entrada;

    /**
     * @Column(type="integer", name="id_processo")
     */
    protected $id_processo;

    /**
     * @Column(type="integer", name="estado")
     */
    protected $estado;

    /**
     * @Column(type="string", name="data_actividade")
     */
    protected $data_actividade;

    /**
     * Entrada_saida constructor.
     * @param $id_saida
     * @param $id_entrada
     * @param $id_processo
     * @param $estado
     */
    public function __construct($id_saida, $id_entrada, $id_processo, $estado)
    {
        $this->id_saida = $id_saida;
        $this->id_entrada = $id_entrada;
        $this->id_processo = $id_processo;
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
    public function getIdSaida()
    {
        return $this->id_saida;
    }

    /**
     * @param mixed $id_saida
     */
    public function setIdSaida($id_saida)
    {
        $this->id_saida = $id_saida;
    }

    /**
     * @return mixed
     */
    public function getIdEntrada()
    {
        return $this->id_entrada;
    }

    /**
     * @param mixed $id_entrada
     */
    public function setIdEntrada($id_entrada)
    {
        $this->id_entrada = $id_entrada;
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

    /**
     * @return mixed
     */
    public function getDataActividade()
    {
        return $this->data_actividade;
    }

    /**
     * @param mixed $data_actividade
     */
    public function setDataActividade($data_actividade)
    {
        $this->data_actividade = $data_actividade;
    }

}