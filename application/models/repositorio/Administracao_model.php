<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 28/04/18
 * Time: 15:36
 */
class Administracao_model extends CI_Model
{

    public function store(\Entity\Administracao $administracao)
    {
        if ($administracao->getNome()!=null || $administracao->getNome()!="")
        {
            $this->doctrine->em->persist($administracao);
            $this->doctrine->em->flush();
            return $administracao->getId();
        }
            return 0;
    }

    public function listar($id_user)
    {
        return $this->db->query('SELECT a.*, ut.nome as criador from administracao a, reparticao r, utilizador_reparticao ur, user_teste ut WHERE r.id=a.id_reparticao and ur.id_reparticao=r.id and ur.id_utilizador_func=ut.id and ur.id_utilizador_func= '.$id_user)->result();
    }

    public function listar_master()
    {
        return $this->db->query('SELECT a.*, ut.nome as criador from administracao a, reparticao r, utilizador_reparticao ur, user_teste ut WHERE r.id=a.id_reparticao and ur.id_reparticao=r.id and ur.id_utilizador_func=ut.id')->result();
    }
}