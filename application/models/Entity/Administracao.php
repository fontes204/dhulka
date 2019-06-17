<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 28/04/18
 * Time: 15:28
 */

namespace Entity;

/**
*
* @Entity
* @Table(name="administracao")
*/
class Administracao
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="string", name="nome")
     */
    protected $nome;

    /**
     * @Column(type="integer", name="estado")
     */
    protected $estado;

    /**
     * @Column(type="integer", name="id_reparticao")
     */
    protected $id_reparticao;

    /**
     * @Column(type="integer", name="id_municipio")
     */
    protected $id_municipio;

    /**
     * @Column(type="integer", name="id_utilizador")
     */
    protected $id_utilizador;

    /**
     * Administracao constructor.
     * @param $nome
     * @param $estado
     * @param $id_reparticao
     * @param $id_municipio
     * @param $id_utilizador
     */
    public function __construct($nome=null, $estado=null, $id_reparticao=null, $id_municipio=null, $id_utilizador=null)
    {
        $this->nome = $nome;
        $this->estado = $estado;
        $this->id_reparticao = $id_reparticao;
        $this->id_municipio = $id_municipio;
        $this->id_utilizador = $id_utilizador;
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
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
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
    public function getIdReparticao()
    {
        return $this->id_reparticao;
    }

    /**
     * @param mixed $id_reparticao
     */
    public function setIdReparticao($id_reparticao)
    {
        $this->id_reparticao = $id_reparticao;
    }

    /**
     * @return mixed
     */
    public function getIdMunicipio()
    {
        return $this->id_municipio;
    }

    /**
     * @param mixed $id_municipio
     */
    public function setIdMunicipio($id_municipio)
    {
        $this->id_municipio = $id_municipio;
    }

    /**
     * @return mixed
     */
    public function getIdUtilizador()
    {
        return $this->id_utilizador;
    }

    /**
     * @param mixed $id_utilizador
     */
    public function setIdUtilizador($id_utilizador)
    {
        $this->id_utilizador = $id_utilizador;
    }


}