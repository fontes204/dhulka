<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 28/04/18
 * Time: 15:47
 */
class Municipio_model extends CI_Model
{

    public function listar_por_id_prov($id_prov=null)
    {
        if($id_prov!=null)
            return $this->db->query('select m.nome, m.id, r.id as id_repart from municipio m, reparticao r  where r.id_provincia=m.id_provincia and m.id_provincia= '.$id_prov)->result();
        return 0;
    }
    public function listar($id_prov=null)
    {
        if($id_prov!=null)
            return $this->db->query('select m.*, ut.nome as criador, p.nome as nome_prv from municipio m, reparticao r,provincia p, utilizador_reparticao ur, user_teste ut  where r.id_provincia=m.id_provincia and p.id=m.id_provincia  and r.id=ur.id_reparticao and ur.id_utilizador=ut.id and m.id_provincia='.$id_prov)->result();
        return 0;
    }

    public function listar_master()
    {

        return $this->db->query('select m.*, ut.nome as criador, p.nome as nome_prv from municipio m, reparticao r, utilizador_reparticao ur,provincia p, user_teste ut  where r.id_provincia=m.id_provincia and p.id=m.id_provincia and r.id=ur.id_reparticao and ur.id_utilizador=ut.id')->result();
    }

    public function listar_todos()
    {
        $this->db->order_by('nome', 'asc');
        return $this->db->get('municipio')->result();
    }

    public function listarById($id_prov=null)
    {
        if($id_prov!=null)
            return $this->db->query('select *from municipio m where m.id_provincia= '.$id_prov)->result();
        return 0;
    }

    public function listarComunaByIdMunicipio($id_municipio)
    {
        if($id_municipio!=null)
            return $this->db->query('select *from comuna c where c.id_municipio= '.$id_municipio)->result();
        return 0;
    }

}