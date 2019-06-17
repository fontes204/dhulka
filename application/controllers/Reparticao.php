<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 28/04/18
 * Time: 00:41
 */
class Reparticao extends CI_Controller
{

    public $k_menus=array();
    public $controla=false;
    /**
     * Reparticao constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('repositorio/Reparticao_model'=>'reparticao'));
        $this->load->model(array('repositorio/app/App_model'=>'app'));
        $this->load->model(array('repositorio/Utilizador_model'=>'utilizador'));
        $this->load->library('table');

        if ($this->app->control_acesso($this->uri->segment(1),$this->uri->segment(2),$this->session->userdata('id_role'))>0)
        {
            $this->controla=true;
        }else{
            $this->controla=false;
        }

        $kj[0]="Povíncias";
        foreach ($this->provincia->listar() as $provincia)
        {
            $kj[$provincia->id]=$provincia->nome;
        }
        $this->k_menus['provincias']=$kj;

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

    public function listar()
    {
        $this->k_menus['titulo']="Dhulka | Listar Repartição";
        $this->k_menus['reparticao'] = $this->reparticao->listar();
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else
        $this->load->view('reparticao/listar',$this->k_menus);
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    public function store()
    {
        $k= new Entity\Reparticao($this->input->post()['nome'],$this->input->post()['estado'],$this->input->post()['id_provincia'],$this->input->post()['id_utilizador']);
        if($this->reparticao->store($k)!=0)
            echo callback('success','Operação efectuada com sucesso','Dhulka informa');
        else
            echo callback('error','Erro ao efectuar esta operação','Dhulka informa');
    }
}