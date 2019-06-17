<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 22/09/18
 * Time: 13:46
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="parecer")
 */
class Parecer
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="string", name="descricao")
     */
    protected $descricao;

    /**
     * @Column(type="string", name="data_criacao")
     */
    protected $data_criacao;

    /**
     * @Column(type="integer", name="id_utilizador")
     */
    protected $id_utilizador;

    /**
     * @Column(type="integer", name="id_processo")
     */
    protected $id_processo;

    /**
     * Parecer constructor.
     * @param $descricao
     * @param $id_utilizador
     * @param $id_processo
     */
    public function __construct($descricao, $id_utilizador, $id_processo)
    {
        $this->descricao = $descricao;
        $this->id_utilizador = $id_utilizador;
        $this->id_processo = $id_processo;
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
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getDataCriacao()
    {
        return $this->data_criacao;
    }

    /**
     * @param mixed $data_criacao
     */
    public function setDataCriacao($data_criacao)
    {
        $this->data_criacao = $data_criacao;
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

    /**
     * @return mixed
     */
    public function getIdProcesso()
    {
        return $this->id_processo;
    }

    /**
     * @param mixed $id_processo
     */
    public function setIdProcesso($id_processo)
    {
        $this->id_processo = $id_processo;
    }



}