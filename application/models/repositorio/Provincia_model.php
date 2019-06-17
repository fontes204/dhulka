<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 28/04/18
 * Time: 01:09
 */
class Provincia_model extends CI_Model
{
    public function listar()
    {
        $this->db->order_by('nome');
        return $this->db->query('select p.* from provincia p where p.id not in (select r.id_provincia from reparticao r) order by p.nome')->result();
    }

    public function listar_()
    {
        $this->db->order_by('nome');
        return $this->db->get('provincia')->result();
    }

    public function get_sigla($id)
    {
        return $this->db->query('select sigla from provincia where id='.$id)->result()[0];
    }
}