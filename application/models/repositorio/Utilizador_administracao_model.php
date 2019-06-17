<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 29/04/18
 * Time: 15:24
 */
class Utilizador_administracao_model extends CI_Model
{
    public function store($dados=array())
    {
        if($dados!=null)
        {
            if($this->db->insert('utilizador_administracao',$dados))
            {
                $this->db->set('estado',1);
                $this->db->where('id',$dados['id_administracao']);
                $this->db->update('administracao');
                return 2;
            }
            return 3;
        }
    }
}