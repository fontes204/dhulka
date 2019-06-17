<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 12/01/19
 * Time: 11:42
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="candidatura")
 */
class Candidatura
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="integer", name="id_candidato")
     */
    protected $id_candidato;

    /**
     * @Column(type="integer", name="id_projecto")
     */
    protected $id_projecto;

    /**
     * @Column(type="integer", name="id_combinacao_terreno")
     */
    protected $id_combinacao_terreno;

    /**
     * @Column(type="string", name="data")
     */
    protected $data;

    /**
     * @Column(type="integer", name="estado")
     */
    protected $estado;

    /**
     * @Column(type="integer", name="numero")
     */
    protected $numero;

    /**
     * Candidatura constructor.
     * @param $id_candidato
     * @param $id_projecto
     * @param $id_combinacao_terreno
     * @param $estado
     * @param $numero
     */
    public function __construct($id_candidato, $id_projecto, $id_combinacao_terreno, $estado, $numero)
    {
        $this->id_candidato = $id_candidato;
        $this->id_projecto = $id_projecto;
        $this->id_combinacao_terreno = $id_combinacao_terreno;
        $this->estado = $estado;
        $this->numero = $numero;
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
    public function getIdCandidato()
    {
        return $this->id_candidato;
    }

    /**
     * @param mixed $id_candidato
     */
    public function setIdCandidato($id_candidato)
    {
        $this->id_candidato = $id_candidato;
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
    public function getIdCombinacaoTerreno()
    {
        return $this->id_combinacao_terreno;
    }

    /**
     * @param mixed $id_combinacao_terreno
     */
    public function setIdCombinacaoTerreno($id_combinacao_terreno)
    {
        $this->id_combinacao_terreno = $id_combinacao_terreno;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
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
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

}