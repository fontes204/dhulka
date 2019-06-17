<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 18/09/18
 * Time: 12:09
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="caracteristica_terreno_projecto")
 */
class Caracteristica_terreno_projecto
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
     * @Column(type="integer", name="id_combinacao")
     */
    protected $id_combinacao;

    /**
     * @Column(type="integer", name="qtde_terreno")
     */
    protected $qtde_terreno;

    /**
     * Caracteristica_terreno_projecto constructor.
     * @param $id_projecto
     * @param $id_combinacao
     * @param $qtde_terreno
     */
    public function __construct($id_projecto, $id_combinacao, $qtde_terreno)
    {
        $this->id_projecto = $id_projecto;
        $this->id_combinacao = $id_combinacao;
        $this->qtde_terreno = $qtde_terreno;
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
    public function getIdCombinacao()
    {
        return $this->id_combinacao;
    }

    /**
     * @param mixed $id_combinacao
     */
    public function setIdCombinacao($id_combinacao)
    {
        $this->id_combinacao = $id_combinacao;
    }

    /**
     * @return mixed
     */
    public function getQtdeTerreno()
    {
        return $this->qtde_terreno;
    }

    /**
     * @param mixed $qtde_terreno
     */
    public function setQtdeTerreno($qtde_terreno)
    {
        $this->qtde_terreno = $qtde_terreno;
    }

}//fim da class