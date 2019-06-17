<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 19/08/18
 * Time: 22:48
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="cidadao")
 */
class Cidadao
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
     * @Column(type="string", name="data_nascimento")
     */
    protected $data_nascimento;

    /**
     * @Column(type="string", name="tipo_doc")
     */
    protected $tipo_doc;
    /**
     * @Column(type="string", name="numero_doc")
     */
    protected $numero_doc;
    /**
     * @Column(type="string", name="data_emissao_doc")
     */
    protected $data_emissao_doc;
    /**
     * @Column(type="integer", name="id_pais")
     */
    protected $id_pais;

    /**
     * Utente constructor.
     * @param $nome
     * @param $data_nascimento
     * @param $tipo_doc
     * @param $numero_doc
     * @param $data_emissao_doc
     * @param $id_pais
     */
    public function __construct($nome=null, $data_nascimento=null, $tipo_doc=null, $numero_doc=null, $data_emissao_doc=null, $id_pais=null)
    {
        $this->nome = $nome;
        $this->data_nascimento = $data_nascimento;
        $this->tipo_doc = $tipo_doc;
        $this->numero_doc = $numero_doc;
        $this->data_emissao_doc = $data_emissao_doc;
        $this->id_pais = $id_pais;
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
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * @param mixed $data_nascimento
     */
    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
    }

    /**
     * @return mixed
     */
    public function getTipoDoc()
    {
        return $this->tipo_doc;
    }

    /**
     * @param mixed $tipo_doc
     */
    public function setTipoDoc($tipo_doc)
    {
        $this->tipo_doc = $tipo_doc;
    }

    /**
     * @return mixed
     */
    public function getNumeroDoc()
    {
        return $this->numero_doc;
    }

    /**
     * @param mixed $numero_doc
     */
    public function setNumeroDoc($numero_doc)
    {
        $this->numero_doc = $numero_doc;
    }

    /**
     * @return mixed
     */
    public function getDataEmissaoDoc()
    {
        return $this->data_emissao_doc;
    }

    /**
     * @param mixed $data_emissao_doc
     */
    public function setDataEmissaoDoc($data_emissao_doc)
    {
        $this->data_emissao_doc = $data_emissao_doc;
    }

    /**
     * @return mixed
     */
    public function getIdPais()
    {
        return $this->id_pais;
    }

    /**
     * @param mixed $id_pais
     */
    public function setIdPais($id_pais)
    {
        $this->id_pais = $id_pais;
    }



}