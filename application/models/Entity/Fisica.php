<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 20/08/18
 * Time: 12:46
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="fisica")
 */
class Fisica
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
     * @Column(type="string", name="genero")
     */

    protected $genero;
    /**
     * @Column(type="integer", name="fotografia")
     */

    protected $fotografia;
    /**
     * @Column(type="integer", name="estado_civil")
     */
    protected $estado_civil;

    /**
     * Fisica constructor.
     * @param $id_cidadao
     * @param $genero
     * @param $fotografia
     * @param $estado_civil
     */
    public function __construct($id_cidadao, $genero, $fotografia, $estado_civil)
    {
        $this->id_cidadao = $id_cidadao;
        $this->genero = $genero;
        $this->fotografia = $fotografia;
        $this->estado_civil = $estado_civil;
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

    /**
     * @return mixed
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * @param mixed $genero
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    /**
     * @return mixed
     */
    public function getFotografia()
    {
        return $this->fotografia;
    }

    /**
     * @param mixed $fotografia
     */
    public function setFotografia($fotografia)
    {
        $this->fotografia = $fotografia;
    }

    /**
     * @return mixed
     */
    public function getEstadoCivil()
    {
        return $this->estado_civil;
    }

    /**
     * @param mixed $estado_civil
     */
    public function setEstadoCivil($estado_civil)
    {
        $this->estado_civil = $estado_civil;
    }



}