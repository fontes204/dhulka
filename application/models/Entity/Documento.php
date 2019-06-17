<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 15/08/18
 * Time: 14:42
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="documento")
 */
class Documento
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
     * @Column(type="string", name="uso")
     */
    protected $uso;

    /**
     * @Column(type="integer", name="prioridade")
     */
    protected $prioridade;

    /**
     * Documento constructor.
     * @param $nome
     * @param $estado
     * @param $uso
     * @param $prioridade
     */
    public function __construct($nome, $estado, $uso, $prioridade)
    {
        $this->nome = $nome;
        $this->estado = $estado;
        $this->uso = $uso;
        $this->prioridade = $prioridade;
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
    public function getUso()
    {
        return $this->uso;
    }

    /**
     * @param mixed $uso
     */
    public function setUso($uso)
    {
        $this->uso = $uso;
    }

    /**
     * @return mixed
     */
    public function getPrioridade()
    {
        return $this->prioridade;
    }

    /**
     * @param mixed $prioridade
     */
    public function setPrioridade($prioridade)
    {
        $this->prioridade = $prioridade;
    }

}