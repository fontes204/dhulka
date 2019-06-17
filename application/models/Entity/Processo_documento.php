<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 24/11/18
 * Time: 12:17
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="processo_documento")
 */
class Processo_documento
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
     * @Column(type="integer", name="id_documento")
     */
    protected $id_documento;

    /**
     * @Column(type="string", name="foto")
     */

    protected $foto;

    /**
     * Processo_documento constructor.
     * @param $id_processo
     * @param $id_documento
     * @param $foto
     */
    public function __construct($id_processo, $id_documento, $foto)
    {
        $this->id_processo = $id_processo;
        $this->id_documento = $id_documento;
        $this->foto = $foto;
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
    public function getIdDocumento()
    {
        return $this->id_documento;
    }

    /**
     * @param mixed $id_documento
     */
    public function setIdDocumento($id_documento)
    {
        $this->id_documento = $id_documento;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

}