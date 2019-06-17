<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 28/04/18
 * Time: 15:13
 */
class Administracao extends CI_Controller
{

    public $k_menus=array();
    public $controla=false;
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('repositorio/Administracao_model'=>'administracao'));
        $this->load->model(array('repositorio/app/App_model'=>'app'));
        $this->load->model(array('repositorio/Utilizador_model'=>'utilizador'));
        $this->load->library('table');

        if ($this->app->control_acesso($this->uri->segment(1),$this->uri->segment(2),$this->session->userdata('id_role'))>0)
        {
            $this->controla=true;
        }else{
            $this->controla=false;
        }

        if($this->session->userdata('id_role')!=null)
        {
            $this->k_menus['menus'] = $this->app->listar_menu_role($this->session->userdata('id_role'));
            foreach ($this->app->listar_menu_role($this->session->userdata('id_role')) as $menu)
            {
                $result = $this->app->get_menu($menu->id, $this->session->userdata('id_role'));
                $k[$menu->nome] = $result;
            }
            $this->k_menus['builder_menu'] = @$k;
        }
    }

    public function store()
    {
        $administracao=new Entity\Administracao($this->input->post('nome'),0,$this->input->post('id_reparticao'),$this->input->post('id_municipio'),$this->input->post('id_utilizador'));
        $fx=$this->administracao->store($administracao);
         if ($fx>0)
            echo callback('success','Operaão efectuada com sucesso','Dhulka informa');
         else
            echo callback('error','Erro ao efectuar esta operção','Dhulka informa');
    }

    public function listar()
    {
        $this->k_menus['titulo']="Dhulka | Listar Administração";
        $role=$this->utilizador->retorna_role($this->session->userdata('id'))->nome;
        if($role==master())
            $this->k_menus['administracao'] = $this->administracao->listar_master();
        else
            $this->k_menus['administracao'] = $this->administracao->listar($this->session->userdata('id'));
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else
        $this->load->view('administracao/listar',$this->k_menus);
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }
}