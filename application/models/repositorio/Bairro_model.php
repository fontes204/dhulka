<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 14/09/18
 * Time: 11:40
 */
class Bairro_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    protected $table='bairro';
    public function store(\Entity\Bairro $bairro)
    {
        if ($bairro->getNome()!=null || $bairro->getNome()!="")
        {
            $this->doctrine->em->persist($bairro);
            $this->doctrine->em->flush();
            return $bairro->getId();
        }
        return 0;
    }

    public function listar_todos()
    {
        return $this->db->get($this->table)->result();
    }
    public function listar()
    {
        return $this->db->query('select * from bairro where estado=1')->result();
    }

    public function listar1()
    {
        return $this->db->query('select * from bairro where estado=0')->result();
    }

    public function listar_comuna($id)
    {
        return $this->db->query('select * from comuna where id_municipio='.$id)->result();
    }

    public function listar_comuna1()
    {
        return $this->db->query('select * from comuna')->result();
    }

    public function get_comuna_by_id($id)
    {
        return $this->db->query('select nome from comuna where id='.$id)->result()[0];
    }

    public function get_by_id_comuna($id)
    {
        return $this->db->query('select *from bairro b where b.id_comuna NOT IN (SELECT c.id from comuna c WHERE b.id_comuna=c.id AND b.estado=0) and b.id_comuna='.$id)->result();
    }
}