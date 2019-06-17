<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 15/10/18
 * Time: 13:49
 */

namespace Entity;


/**
 *
 * @Entity
 * @Table(name="poligono")
 */
class Poligono
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="integer", name="id_zona")
     */
    protected $id_zona;

    /**
     * @Column(type="integer", name="id_terreno")
     */
    protected $id_terreno;

    /**
     * @Column(type="string", name="latitude")
     */
    protected $latitude;

    /**
     * @Column(type="string", name="longitude")
     */
    protected $longitude;

    /**
     * @Column(type="string", name="p_front ")
     */
    protected $p_front;

    /**
     * Poligono constructor.
     * @param $id_zona
     * @param $id_terreno
     * @param $latitude
     * @param $longitude
     * @param $p_front
     */
    public function __construct($id_zona, $id_terreno, $latitude, $longitude, $p_front)
    {
        $this->id_zona = $id_zona;
        $this->id_terreno = $id_terreno;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->p_front = $p_front;
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
    public function getIdZona()
    {
        return $this->id_zona;
    }

    /**
     * @param mixed $id_zona
     */
    public function setIdZona($id_zona)
    {
        $this->id_zona = $id_zona;
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
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getPFront()
    {
        return $this->p_front;
    }

    /**
     * @param mixed $p_front
     */
    public function setPFront($p_front)
    {
        $this->p_front = $p_front;
    }

}