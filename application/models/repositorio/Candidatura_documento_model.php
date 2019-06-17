<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 12/01/19
 * Time: 12:00
 */

class Candidatura_documento_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(\Entity\Candidatura_documento $candidatura)
    {
        if ($candidatura->getCaminho()!=null || $candidatura->getCaminho()!="")
        {
            $this->doctrine->em->persist($candidatura);
            $this->doctrine->em->flush();
            return $candidatura->getId();
        }
        return 0;
    }

    public function getDocumentos($id_candidatua)
    {
        return $this->db->query('select cd.id_documento, cd.caminho from candidatura_documento cd,candidato c, utente u, candidatura c1 where u.id=c.id_utente and c.id=c1.id_candidato and c1.id=cd.id_candidatura and u.id=?',array($id_candidatua))->result();
    }
}