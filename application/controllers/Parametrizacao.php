<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 14/09/18
 * Time: 11:42
 */
class Parametrizacao extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function store_bairro()
    {
        $bairro=new \Entity\Bairro($this->input->post('nome_bairro'),$this->input->post('id_comuna'),1);
        if($this->bairro->store($bairro)!=0)
            echo callback('success','Bairro adicionado com sucesso','Dhulka informa');
        else
            echo callback('error','Erro ao efectuar esta operação','Dhulka informa');
    }

    public function documento_apresentado()
    {
        $res=array();
        for ($i=0;$i<count($this->input->get('param'));$i++)
        {
            foreach ($this->documento->apresentado($this->input->get('param')[$i]) as $value)
            {
                array_push($res,$value);
            }

        }
        echo json_encode($res);
    }

    public function documento_em_falta()
    {
        $res=array();
            foreach ($this->documento->em_falta($this->input->get('param')) as $value)
            {
                array_push($res,$value);
            }
        echo json_encode($res);
    }
}