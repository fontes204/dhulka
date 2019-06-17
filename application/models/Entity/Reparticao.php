<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 28/04/18
 * Time: 00:42
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="reparticao")
 */
class Reparticao
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
     * @Column(type="integer", name="id_provincia")
     */
    protected $id_provincia;

    /**
     * @Column(type="integer", name="id_utilizador")
     */
    protected $id_utilizador;

    /**
     * Reparticao constructor.
     * @param $nome
     * @param $estado
     * @param $id_provincia
     * @param $id_utilizador
     */
    public function __construct($nome=null, $estado=null, $id_provincia=null, $id_utilizador=null)
    {
        $this->nome = $nome;
        $this->estado = $estado;
        $this->id_provincia = $id_provincia;
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
    public function getIdProvincia()
    {
        return $this->id_provincia;
    }

    /**
     * @param mixed $id_provincia
     */
    public function setIdProvincia($id_provincia)
    {
        $this->id_provincia = $id_provincia;
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