<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 21/11/18
 * Time: 19:22
 */

class Data_entrega_doc extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store()
    {
        $data_entrega=new \Entity\Data_entrega_doc($this->input->post('id_doc'),$this->input->post('data_entrega'),$this->input->post('id_processo'));
        if ($this->data_entrega->store($data_entrega)!=0)
            echo callback('success','Data adicionada  com sucesso','Dhulka informa');
        else
            echo callback('error','Erro ao adicionar a data','Dhulka informa');
    }
}