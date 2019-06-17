<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 27/08/18
 * Time: 18:30
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="utente")
 */
class Utente
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="integer", name="id_cidadao")
     */
    protected $id_cidadao;

    /**
     * @Column(type="string", name="codigo")
     */
    protected $codigo;

    /**
     * Utente constructor.
     * @param $id_cidadao
     * @param $codigo
     */
    public function __construct($id_cidadao, $codigo)
    {
        $this->id_cidadao = $id_cidadao;
        $this->codigo = $codigo;
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


}