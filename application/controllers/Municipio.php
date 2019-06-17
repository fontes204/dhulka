<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 28/04/18
 * Time: 18:38
 */
class Municipio extends CI_Controller
{

    public $controla=false;
    public $k_menus=array();
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('repositorio/Administracao_model'=>'administracao'));
        $this->load->model(array('repositorio/app/App_model'=>'app'));
        $this->load->model(array('repositorio/Utilizador_model'=>'utilizador'));
        $this->load->model(array('repositorio/Municipio_model'=>'municipio'));
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

    public function listar()
    {
        $this->k_menus['titulo']="Dhulka | Listar Município";
        $role=$this->utilizador->retorna_role($this->session->userdata('id'))->nome;
        if($role==master())
            $this->k_menus['municipio'] = $this->municipio->listar_master();
        else{
            @$id_provincia=$this->utilizador->listar_id_prov($this->session->userdata('id'))->id;
            $this->k_menus['municipio'] = $this->municipio->listar($id_provincia);
        }
        $this->load->view('head_foot/header',$this->k_menus);

        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else
        $this->load->view('municipio/listar',$this->k_menus);
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    public function listById()
    {
        $rs=null;
        foreach ($this->municipio->listarById($_GET['id_prov']) as $item)
        {
            $rs[] = $item;
        }
        if(count($rs)>0)
        echo json_encode($rs);
        else
            echo "[{\"erro\":\"Nenhum municipio foi encontrado\"}]";
    }

    public function listarComunaByIdMunicipio()
    {
        $rs=null;
        foreach ($this->municipio->listarComunaByIdMunicipio($_GET['id_municipio']) as $item)
        {
            $rs[] = $item;
        }
        if(count($rs)>0)
            echo json_encode($rs);
        else
            echo "[{\"erro\":\"Nenhuma comuna foi encontrado\"}]";
    }

    public function listarBairroByIdComuna()
    {
        $rs=null;
        foreach ($this->bairro->get_by_id_comuna($_GET['id_comuna']) as $item)
        {
            $rs[] = $item;
        }
        if(count($rs)>0)
            echo json_encode($rs);
        else
            echo "[{\"erro\":\"Nenhum bairro foi encontrado\"}]";
    }

    public function get_sigla()
    {
        echo $this->provincia->get_sigla($this->input->get('param'))->sigla;
    }
}