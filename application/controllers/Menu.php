<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Menu extends CI_Controller {

        public $k_menus=array();
        public $controla=false;
        /**
         * Menu constructor.
         */
        public function __construct()
        {
            parent::__construct();
//            $this->load->model(array('repositorio/app/App_model'=>'app'));
//            $this->load->model(array('repositorio/Utilizador_model'=>'utilizador'));
//            $this->load->library('table');
//            if($this->session->userdata('id_role')!=null)
//            {
//                $this->k_menus['menus'] = $this->app->listar_menu_role($this->session->userdata('id_role'));
//                $this->k_menus['dispensado']=array("Actualizar","Eliminar");
//                foreach ($this->app->listar_menu_role($this->session->userdata('id_role')) as $menu)
//                {
//                    $result = $this->app->get_menu($menu->id, $this->session->userdata('id_role'));
//                    $k[$menu->nome] = $result;
//                }
//                $this->k_menus['builder_menu'] = @$k;
//            }
//
//            if ($this->app->control_acesso($this->uri->segment(1),$this->uri->segment(2),$this->session->userdata('id_role'))>0)
//            {
//                $this->controla=true;
//            }else{
//                $this->controla=false;
//            }
        }
        public function store()
        {
            $kt=null;
            $menu = new Entity\Menu();
            $menu->setNome($this->input->post('nome'));
            $menu->setIdUtilizador($this->session->userdata('id'));
            $kt=$this->app->store_menu($menu);

            if ($kt!=0)
                echo callback('success','Operação efectuada com sucesso','Dhulka informa');
            else
                echo callback('error','Erro ao efectuar esta operação','Dhulka informa');
        }

        public function listar()
        {
            $this->k_menus['titulo']="Dhulka | Listar Menu";
            $this->k_menus['menu'] = $this->app->listar_menu();
            $this->load->view('head_foot/header',$this->k_menus);
            if($this->controla==false)
                $this->load->view('errors/autorizacao_negada');
            else
            $this->parser->parse('menu_/listar',$this->k_menus);
            $this->load->view('modals/modals');
            $this->load->view('head_foot/footer');
        }

	}
