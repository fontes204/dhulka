<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 28/04/18
 * Time: 13:44
 */
class Utilizador_reparticao_model extends CI_Model
{

    public function store($dados=array())
    {
        if($dados!=null)
        {
            if($this->db->insert('utilizador_reparticao',$dados))
            {
                $this->db->set('estado',1);
                $this->db->where('id',$dados['id_reparticao']);
                $this->db->update('reparticao');
                return 1;
            }
            return 0;
        }
    }
}