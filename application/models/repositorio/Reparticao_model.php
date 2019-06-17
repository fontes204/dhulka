<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 28/04/18
 * Time: 01:50
 */
class Reparticao_model extends CI_Model
{
    public function store(\Entity\Reparticao $reparticao)
    {
        if ($reparticao->getNome()!=null || $reparticao->getNome()!="") {
            $this->doctrine->em->persist($reparticao);
            $this->doctrine->em->flush();
            return $reparticao->getId();
        }
            return 0;
    }

    public function listar()
    {
        return $this->db->query('select p.*, r.nome as nome_repart, r.data_criacao as data_cr,r.estado, ut.nome as uzer, r.id as id_repart from provincia p, reparticao r, user_teste ut where p.id=r.id_provincia and r.id_utilizador=ut.id order by p.nome')->result();
    }
}