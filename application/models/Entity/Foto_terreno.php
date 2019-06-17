<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 19/02/19
 * Time: 20:30
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="foto_terreno")
 */
class Foto_terreno
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="integer", name="id_terreno")
     */
    protected $id_terreno;

    /**
     * @Column(type="string", name="foto")
     */
    protected $foto;

    /**
     * @Column(type="integer", name="ordem")
     */
    protected $ordem;

    /**
     * Foto_terreno constructor.
     * @param $id_terreno
     * @param $foto
     * @param $ordem
     */
    public function __construct($id_terreno, $foto, $ordem)
    {
        $this->id_terreno = $id_terreno;
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
    public function getIdTerreno()
    {
        return $this->id_terreno;
    }

    /**
     * @param mixed $id_terreno
     */
    public function setIdTerreno($id_terreno)
    {
        $this->id_terreno = $id_terreno;
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