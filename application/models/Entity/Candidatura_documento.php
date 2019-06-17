<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 12/01/19
 * Time: 11:56
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="candidatura_documento")
 */
class Candidatura_documento
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="integer", name="id_candidatura")
     */
    protected $id_candidatura;

    /**
     * @Column(type="integer", name="id_documento")
     */
    protected $id_documento;

    /**
     * @Column(type="string", name="caminho")
     */
    protected $caminho;

    /**
     * Candidatura_documento constructor.
     * @param $id_candidatura
     * @param $id_documento
     * @param $caminho
     */
    public function __construct($id_candidatura, $id_documento, $caminho)
    {
        $this->id_candidatura = $id_candidatura;
        $this->id_documento = $id_documento;
        $this->caminho = $caminho;
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
    public function getIdCandidatura()
    {
        return $this->id_candidatura;
    }

    /**
     * @param mixed $id_candidatura
     */
    public function setIdCandidatura($id_candidatura)
    {
        $this->id_candidatura = $id_candidatura;
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
    public function getCaminho()
    {
        return $this->caminho;
    }

    /**
     * @param mixed $caminho
     */
    public function setCaminho($caminho)
    {
        $this->caminho = $caminho;
    }

}
