<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 23/09/18
 * Time: 18:48
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="processo_tecnico")
 */
class Processo_tecnico
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

    /**
     * @Column(type="integer", name="id_processo")
     */
    protected $id_processo;

    /**
     * @Column(type="integer", name="id_tecnico")
     */
    protected $id_tecnico;

    /**
     * Processo_tecnico constructor.
     * @param $id_processo
     * @param $id_tecnico
     */
    public function __construct($id_processo, $id_tecnico)
    {
        $this->id_processo = $id_processo;
        $this->id_tecnico = $id_tecnico;
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

    /**
     * @return mixed
     */
    public function getIdTecnico()
    {
        return $this->id_tecnico;
    }

    /**
     * @param mixed $id_tecnico
     */
    public function setIdTecnico($id_tecnico)
    {
        $this->id_tecnico = $id_tecnico;
    }


}