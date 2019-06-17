<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 12/01/19
 * Time: 11:34
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="candidato")
 */
class Candidato
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;


    /**
     * @Column(type="integer", name="id_utente")
     */
    protected $id_utente;

    /**
     * Candidato constructor.
     * @param $id_utente
     */
    public function __construct($id_utente)
    {
        $this->id_utente = $id_utente;
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


}