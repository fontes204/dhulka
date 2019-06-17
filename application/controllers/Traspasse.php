<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 24/09/18
 * Time: 14:12
 */
class Traspasse extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function novo($para=null)
    {
        $this->k_menus['titulo']="Dhulka | Novo Traspasse";
        $this->k_menus['provincia']=$this->provincia->listar_();
        $this->k_menus['cidadaos']=$this->utente->listar();
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else{
            $this->parser->parse('traspasse/novo',$this->k_menus);
        }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }
    
    public function listar()
    {
        $this->k_menus['titulo']="Dhulka | Listar Traspasse";
        $this->k_menus['provincia']=$this->provincia->listar_();
        $this->k_menus['cidadaos']=$this->utente->listar();
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else{
            $this->parser->parse('traspasse/listar',$this->k_menus);
        }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    public function get_traspasse()
    {
        echo json_encode($this->utente->listar());
    }
}//fim da class