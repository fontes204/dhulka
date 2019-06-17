<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 14/09/18
 * Time: 11:37
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="bairro")
 */
class Bairro
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
     * @Column(type="integer", name="id_comuna")
     */
    protected $id_comuna;

    /**
     * @Column(type="integer", name="estado")
     */
    protected $estado;

    /**
     * Bairro constructor.
     * @param $nome
     * @param $id_municipio
     * @param $estado
     */
    public function __construct($nome, $id_comuna, $estado)
    {
        $this->nome = $nome;
        $this->id_comuna = $id_comuna;
        $this->estado = $estado;
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
    public function getIdComuna()
    {
        return $this->id_comuna;
    }

    /**
     * @param mixed $id_comuna
     */
    public function setIdComuna($id_comuna)
    {
        $this->id_comuna = $id_comuna;
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


}