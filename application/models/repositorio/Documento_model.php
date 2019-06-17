<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 14/08/18
 * Time: 22:11
 */
class Documento_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(\Entity\Documento $documento)
    {
        if ($documento->getNome()!=null || $documento->getNome()!="")
        {
            $this->doctrine->em->persist($documento);
            $this->doctrine->em->flush();
            return $documento->getId();
        }
        return 0;
    }

    public function listar()
    {
        return $this->db->get('documento')->result();
    }

    public function apresentado($id)
    {
        return $this->db->query('select id, nome from documento where id=?',array($id))->result();
    }

    public function em_falta($id)
    {
        return $this->db->query('select id, nome from documento where id not in ?',array($id))->result();
    }

    public function listar_documento($param1,$param2)
    {
        return $this->db->query('select *from documento where uso=? or uso=?',array($param1,$param2))->result();
    }
}