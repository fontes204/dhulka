<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 24/11/18
 * Time: 12:21
 */

class Processo_documento_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(\Entity\Processo_documento $processo_documento)
    {
        if ($processo_documento->getIdDocumento()!=null || $processo_documento->getIdDocumento()!="")
        {
            $this->doctrine->em->persist($processo_documento);
            $this->doctrine->em->flush();
            return $processo_documento->getId();
        }
        return 0;
    }

    public function apresentado($id_processo)
    {
        return $this->db->query('select d.nome, pd.foto from processo_documento pd,documento d  where d.id=pd.id_documento and pd.id_processo=?',array($id_processo))->result();
    }

    public function em_falta($id_processo)
    {
        return $this->db->query('select d.nome, de.data_entrega from documento d, data_entrega_doc de where de.id_doc=d.id and de.id_processo=?',array($id_processo))->result();
    }
}