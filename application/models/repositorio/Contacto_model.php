<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 20/08/18
 * Time: 12:45
 */
class Contacto_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function store(\Entity\Contacto $contacto)
    {
        if ($contacto->getIdCidadao()!=null || $contacto->getIdCidadao()!=0)
        {
            $this->doctrine->em->persist($contacto);
            $this->doctrine->em->flush();
            return $contacto->getId();
        }
        return 0;
    }

    public function getEmail($id_cidadao=null)
    {
        return $this->db->query('select email from contacto where id_cidadao=?',array($id_cidadao))->result()[0];
    }
}