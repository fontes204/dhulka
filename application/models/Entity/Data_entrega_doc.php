<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 21/11/18
 * Time: 19:18
 */

namespace Entity;


/**
 *
 * @Entity
 * @Table(name="data_entrega_doc")
 */
class Data_entrega_doc
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="integer", name="id_doc")
     */
    protected $id_doc;

    /**
     * @Column(type="string", name="data_entrega")
     */
    protected $data_entrega;

    /**
     * @Column(type="integer", name="id_processo")
     */
    protected $id_processo;

    /**
     * Data_entrega_doc constructor.
     * @param $id_doc
     * @param $data_entrega
     * @param $id_processo
     */
    public function __construct($id_doc, $data_entrega, $id_processo)
    {
        $this->id_doc = $id_doc;
        $this->data_entrega = $data_entrega;
        $this->id_processo = $id_processo;
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
    public function getIdDoc()
    {
        return $this->id_doc;
    }

    /**
     * @param mixed $id_doc
     */
    public function setIdDoc($id_doc)
    {
        $this->id_doc = $id_doc;
    }

    /**
     * @return mixed
     */
    public function getDataEntrega()
    {
        return $this->data_entrega;
    }

    /**
     * @param mixed $data_entrega
     */
    public function setDataEntrega($data_entrega)
    {
        $this->data_entrega = $data_entrega;
    }

}