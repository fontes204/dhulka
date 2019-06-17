<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 18/09/18
 * Time: 14:36
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="galeria_projecto")
 */
class Galeria_projecto
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="integer", name="id_projecto")
     */
    protected $id_projecto;

    /**
     * @Column(type="string", name="foto")
     */
    protected $foto;

    /**
     * @Column(type="integer", name="ordem")
     */
    protected $ordem;

    /**
     * Galeria_projecto constructor.
     * @param $id_projecto
     * @param $foto
     * @param $ordem
     */
    public function __construct($id_projecto, $foto, $ordem)
    {
        $this->id_projecto = $id_projecto;
        $this->foto = $foto;
        $this->ordem = $ordem;
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
    public function getIdProjecto()
    {
        return $this->id_projecto;
    }

    /**
     * @param mixed $id_projecto
     */
    public function setIdProjecto($id_projecto)
    {
        $this->id_projecto = $id_projecto;
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

    /**
     * @return mixed
     */
    public function getOrdem()
    {
        return $this->ordem;
    }

    /**
     * @param mixed $ordem
     */
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;
    }


}