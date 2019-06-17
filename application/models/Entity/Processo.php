<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 22/08/18
 * Time: 20:58
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="processo")
 */
class Processo
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="integer", name="id_assunto")
     */
    protected $id_assunto;

    /**
     * @Column(type="string", name="data_criacao")
     */
    protected $data_criacao;

    /**
     * @Column(type="string", name="codigo")
     */
    protected $codigo;

    /**
     * @Column(type="integer", name="id_utilizador")
     */
    protected $id_utilizador;

    /**
     * @Column(type="integer", name="id_utente")
     */
    protected $id_utente;

    /**
     * @Column(type="integer", name="estado")
     */
    protected $estado;

    /**
     * Processo constructor.
     * @param $id_assunto
     * @param $data_criacao
     * @param $codigo
     * @param $id_utilizador
     * @param $id_utente
     * @param $estado
     */
    public function __construct($id_assunto, $data_criacao, $codigo, $id_utilizador, $id_utente, $estado)
    {
        $this->id_assunto = $id_assunto;
        $this->data_criacao = $data_criacao;
        $this->codigo = $codigo;
        $this->id_utilizador = $id_utilizador;
        $this->id_utente = $id_utente;
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
    public function getIdAssunto()
    {
        return $this->id_assunto;
    }

    /**
     * @param mixed $id_assunto
     */
    public function setIdAssunto($id_assunto)
    {
        $this->id_assunto = $id_assunto;
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
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
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
    public function getIdUtente()
    {
        return $this->id_utente;
    }

    /**
     * @param mixed $id_utente
     */
    public function setIdUtente($id_utente)
    {
        $this->id_utente = $id_utente;
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