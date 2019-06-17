<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 26/04/18
 * Time: 07:50
 */
class Utente extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
//        $this->load->model(array('repositorio/Fisica_model'=>'fisica','repositorio/Morada_model'=>'morada','repositorio/Contacto_model'=>'contacto'));
    }

    public function fisica($param=null)
    {
        $this->k_menus['titulo']="Dhulka | Novo Utente";
        $this->k_menus['provincia']=$this->provincia->listar_();
        $this->k_menus['paises']=$this->app->listar_pais();
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else
            {
                if($param==null||$param=="")
                    $this->parser->parse('utente/fisica',$this->k_menus);
                else
                    $this->parser->parse('utente/fisica_aquisicao',$this->k_menus);
            }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    public function juridica($param=null)
    {
        $this->k_menus['titulo']="Dhulka | Adicionar Utente";
        $this->k_menus['provincia']=$this->provincia->listar_();
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else{
            if($param==null)
                $this->parser->parse('utente/juridica',$this->k_menus);
            else
                $this->parser->parse('utente/juridica_aquisicao',$this->k_menus);
        }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }



    public function store()
    {

        switch ($_POST['opcao'])
        {
            case "enviar_foto":
                define('UPLOAD_DIR', './foto_utente/');
                $img = $_POST['foto_capturada'];
                $img = str_replace('data:image/jpeg;base64,', '', $img);
                $img = str_replace(' ', '+', $img);
                $data = base64_decode($img);
                $nome= uniqid().'-dhulka'.'.jpg';
                $file = UPLOAD_DIR .$nome;
                $success = file_put_contents($file, $data);
                echo $nome;
                break;
            case "cadastrar_utente":
                //armazenanndo os dados na table cidadao
                $dados=new  Entity\Cidadao($this->input->post('nome_nome'),date("Y-m-d",strtotime($this->input->post('data_nasc'))),$this->input->post('tipo_doc_utente'),$this->input->post('num_doc_utente'),date("Y-m-d",strtotime($this->input->post('data_emissao_utente'))),$this->input->post('nacionalidade'));
                $id_cidadao=$this->utente->store($dados);
                if ($id_cidadao!=0)
                {
                    //armazenando os dados na tabela fisica
                    $fisica=new \Entity\Fisica($id_cidadao,$this->input->post('genero'),$this->input->post('foto'),$this->input->post('estado_civil'));
                    $id_fisica=$this->fisica->store($fisica);

                    //armazenando os dados na tabela morada
                    $morada= new \Entity\Morada($this->input->post('comuna'),$id_cidadao,$this->input->post('bairro'),$this->input->post('rua'));
                    $id_morada=$this->morada->store($morada);

                    //armazenando os dados na tabela contacto
                    $contacto=new \Entity\Contacto($this->input->post('email'),$this->input->post('telefone1'),$this->input->post('telefone2'),$id_cidadao);
                    $id_contacto=$this->contacto->store($contacto);
                    $utente=new \Entity\Utente($id_cidadao,codigo_utente($this->utente->num_ordem()+1,"FSC"));
                    $id_utente=$this->utente->store_utente($utente);
                    echo callback('success','Operação efectuada com sucesso','Dhulka informa',$id_utente);
                }
                else
                    echo callback('error','Erro ao efectuar esta operação','Dhulka informa');
                break;
        }
    }


    public function listar()
    {
        $this->k_menus['titulo']="Dhulka | Listar Utentes";
        $this->k_menus['provincia']=$this->provincia->listar_();
        $this->k_menus['cidadaos']=$this->utente->listar();
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else{
            $this->parser->parse('utente/listar',$this->k_menus);
        }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    public function detalhe()
    {
        foreach ($this->utente->detalhe($_GET['id_cidadao']) as $item)
        {
            $rs[] = $item;
        }
        echo json_encode($rs);
    }

    public function detalhe1()
    {
        foreach ($this->utente->detalhe1($_GET['id_cidadao']) as $item)
        {
            $rs[] = $item;
        }
        echo json_encode($rs);
    }

    public function upload()
    {
        return;
    }

    public function buscar_utente()
    {
        echo json_encode($this->utente->buscar_utente($this->input->get('param')));
    }
    public function get_utente()
    {
        echo @$this->utente->detalhe4($this->input->get('param'))->id;
    }

    public function servico($param=null)
    {
        $this->k_menus['titulo']="Dhulka | Serviços";
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else{
            $this->parser->parse('utente/servico',$this->k_menus);
        }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }
}