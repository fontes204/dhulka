<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 14/08/18
 * Time: 11:34
 */
class Assunto_model extends CI_Model
{

    public function listar()
    {
        return $this->db->get('assunto')->result();
    }
}