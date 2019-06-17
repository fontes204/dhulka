<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 16/09/18
 * Time: 11:21
 */
use  Entity\Cidadao;
use \Entity\Fisica;
use \Entity\Morada;
use  \Entity\Contacto;
use \Entity\Utente;
use  \Entity\Candidato;
use \Entity\Candidatura;
use \Entity\Candidatura_documento;
class Portal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->k_menus['titulo']="Dhulka | Portal";
        $this->k_menus['projectos']=$this->projecto->listar_projecto();
        $this->k_menus['documentos']=$this->documento->listar_documento('c','t');
        $this->load->view('portal/head_foot1/header',$this->k_menus);
            $this->parser->parse('portal/index',$this->k_menus);
        $this->load->view('portal/head_foot1/footer');
    }

    public function mais_detalhes($param=null)
    {
        $this->k_menus['titulo']="Dhulka | Detalhe Projecto";
        $this->k_menus['projecto']=$this->projecto->listar_projecto_detalhe($param);
        $this->k_menus['galeria']=$this->projecto->galeria($param);
        $this->k_menus['data_expo']=$this->projecto->verifica_data_limite_proj($param);
        $this->k_menus['caracteristicas']=$this->projecto->caracteristica_terreno_projecto($param);
        $this->load->view('portal/head_foot1/header',$this->k_menus);
        $this->load->view('portal/detalhe_projecto',$this->k_menus);
        $this->load->view('portal/head_foot1/footer');
    }

    public function candidatura($param=null)
    {
        $this->k_menus['titulo']="Dhulka | Candidatar-se";
        $this->k_menus['provincias']=$this->provincia->listar_();
        $this->k_menus['param']=$param;
        $this->k_menus['data_expo']=$this->projecto->verifica_data_limite_proj($param);
        $this->k_menus['paises']=$this->app->listar_pais();
        $this->k_menus['projecto']=$this->projecto->listar_projecto_detalhe($param);
        $this->k_menus['documentos']=$this->documento->listar_documento('c','t');
        $this->k_menus['galeria']=$this->projecto->galeria($param);
        $this->k_menus['caracteristicas']=$this->projecto->caracteristica_terreno_projecto($param);
        $this->load->view('portal/head_foot1/header',$this->k_menus);
        $this->load->view('portal/candidatura',$this->k_menus);
        $this->load->view('portal/head_foot1/footer');
    }

    public function projectos()
    {
        $this->k_menus['titulo']="Dhulka | Projectos";
        $this->k_menus['documentos']=$this->documento->listar_documento('c','t');
        $this->k_menus['projectos']=$this->projecto->listar_projecto();
        $this->load->view('portal/head_foot1/header',$this->k_menus);
        $this->load->view('portal/listar_projecto',$this->k_menus);
//        $this->load->view('portal/head_foot1/footer');
    }

    public function upload1($name)
    {
        $path="./uploaded_docs/";
        foreach ($_FILES[$name]['name'] as $key=>$error)
        {
            $nome = 'dhulka-candidatura-'.md5(uniqid(rand(), true)) .'.jpg';
            $tmp=$_FILES[$name]['tmp_name'][$key];
            $j[]=array('nomes'=>$nome);
            upload($tmp, $nome, 1024, 683, $path);
        }
        return $j;
    }

    public function candidatura_store()
    {
        $opcao = isset($_POST['opcao']) ? $_POST['opcao'] : 'upload_docs';
        switch ($opcao) {
            case 'upload_docs':
                echo json_encode($this->upload1('ficheiro'), JSON_PRETTY_PRINT);
                break;
            case 'armazenar_dados':
                //armazenanndo os dados na table cidadao
                $dados=new  Cidadao($this->input->post('nome_utente'),date("Y-m-d",strtotime($this->input->post('data_nasc'))),$this->input->post('tipo_doc'),$this->input->post('num_doc'),date("Y-m-d",strtotime($this->input->post('data_emissao'))),$this->input->post('nacionalidade'));
                $id_cidadao=$this->utente->store($dados);
                if ($id_cidadao!=0)
                {
                    //armazenando os dados na tabela fisica
                    $fisica=new Fisica($id_cidadao,$this->input->post('genero'),'padrao.jpg',$this->input->post('estado_civil'));
                    $this->fisica->store($fisica);

                    //armazenando os dados na tabela morada
                    $morada= new Morada($this->input->post('comuna'),$id_cidadao,$this->input->post('bairro'),$this->input->post('rua'));
                    $this->morada->store($morada);

                    //armazenando os dados na tabela contacto
                    $contacto=new Contacto($this->input->post('email'),$this->input->post('telefone1'),$this->input->post('telefone2'),$id_cidadao);
                    $this->contacto->store($contacto);

                    $utente=new Utente($id_cidadao,codigo_utente($this->utente->num_ordem()+1,"CAND"));
                    $id_utente=$this->utente->store_utente($utente);

                    $candidato=new Candidato($id_utente);
                    $id_candidato=$this->candidato->store($candidato);

                    $candidatura=new Candidatura($id_candidato,$this->input->post('id_projecto'),$this->input->post('dim_terreno'),1,001);
                    $id_candidatura=$this->candidatura->store($candidatura);

                    for ($i=0;$i<count($_POST['id_doc']);$i++)
                    {
                        $proc_doc=new Candidatura_documento($id_candidatura,$_POST['id_doc'][$i],site_url('uploaded_docs/'.$_POST['docs'][$i]));
                        $this->candidatura_documento->store($proc_doc);
                    }
                    echo callback('success','A sua candidatura foi efectuada com sucesso','Dhulka informa');
                }
                else
                    echo callback('error','Erro ao efectuar esta operação','Dhulka informa');
                break;
        }
    }
}