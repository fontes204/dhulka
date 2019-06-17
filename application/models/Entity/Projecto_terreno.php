<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 22/02/19
 * Time: 16:56
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="projecto_terreno")
 */
class Projecto_terreno
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
     * @Column(type="integer", name="id_terreno")
     */
    protected $id_terreno;

    /**
     * Projecto_terreno constructor.
     * @param $id_projecto
     * @param $id_terreno
     */
    public function __construct($id_projecto, $id_terreno)
    {
        $this->id_projecto = $id_projecto;
        $this->id_terreno = $id_terreno;
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


}