<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 19/08/18
 * Time: 20:40
 */
class Comuna_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_nome_by_id($id)
    {
        return $this->db->query('select nome from comuna where id=?',array($id))->result()[0];
    }
}