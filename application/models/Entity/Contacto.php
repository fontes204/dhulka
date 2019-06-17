<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 20/08/18
 * Time: 14:31
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="contacto")
 */
class Contacto
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="string", name="email")
     */
    protected $email;

    /**
     * @Column(type="string", name="telefone1")
     */
    protected  $telefone1;
    /**
     * @Column(type="string", name="telefone2")
     */
    protected  $telefone2;
    /**
     * @Column(type="integer", name="id_cidadao")
     */
    protected  $id_cidadao;

    /**
     * Contacto constructor.
     * @param $email
     * @param $telefone1
     * @param $telefone2
     * @param $id_cidadao
     */
    public function __construct($email, $telefone1, $telefone2, $id_cidadao)
    {
        $this->email = $email;
        $this->telefone1 = $telefone1;
        $this->telefone2 = $telefone2;
        $this->id_cidadao = $id_cidadao;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelefone1()
    {
        return $this->telefone1;
    }

    /**
     * @param mixed $telefone1
     */
    public function setTelefone1($telefone1)
    {
        $this->telefone1 = $telefone1;
    }

    /**
     * @return mixed
     */
    public function getTelefone2()
    {
        return $this->telefone2;
    }

    /**
     * @param mixed $telefone2
     */
    public function setTelefone2($telefone2)
    {
        $this->telefone2 = $telefone2;
    }

    /**
     * @return mixed
     */
    public function getIdCidadao()
    {
        return $this->id_cidadao;
    }

    /**
     * @param mixed $id_cidadao
     */
    public function setIdCidadao($id_cidadao)
    {
        $this->id_cidadao = $id_cidadao;
    }


}