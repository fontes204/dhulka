<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 23/04/18
 * Time: 16:37
 */
class Utilizador extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('repositorio/Conta_model'=>'conta','repositorio/Fisica_model'=>'fisica','repositorio/Morada_model'=>'morada','repositorio/Contacto_model'=>'contacto'));
    }

    public function novo($id=null)
    {
        $this->k_menus['id_seccao']=$id;
        $this->k_menus['titulo']="Dhulka | Novo Utilizador";
        $this->load->view('head_foot/header',$this->k_menus);
        $this->k_menus['paises']=$this->app->listar_pais();
        $this->k_menus['provincia']=$this->provincia->listar_();
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else
        $this->parser->parse('utilizador/novo',$this->k_menus);
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    public function store()
    {
        //armazenanndo os dados na table cidadao
        $dados=new  Entity\Cidadao($this->input->post('nome_nome'),date("Y-m-d",strtotime($this->input->post('data_nasc'))),$this->input->post('tipo_doc_utilizador'),$this->input->post('num_doc_utilizador'),date("Y-m-d",strtotime($this->input->post('data_emissao_utilizador'))),$this->input->post('nacionalidade'));
        $id_cidadao=$this->utente->store($dados);

        //armazenando os dados na tabela morada
        $morada= new \Entity\Morada($this->input->post('comuna'),$id_cidadao,$this->input->post('bairro'),$this->input->post('rua'));
        $this->morada->store($morada);

        //armazenando os dados na tabela contacto
        $contacto=new \Entity\Contacto($this->input->post('email'),$this->input->post('telefone1'),$this->input->post('telefone2'),$id_cidadao);
        $this->contacto->store($contacto);

        //armazenando os dados na tabela fisica
        $fisica=new \Entity\Fisica($id_cidadao,$this->input->post('genero'),"padrao.jpg",$this->input->post('estado_civil'));
        $id_fisica=$this->fisica->store($fisica);

        //associando os dados de utilizador a uma conta
        $conta=new \Entity\Conta($id_cidadao,0,$this->session->userdata('id'));
        if($this->conta->store($conta)==!0)
            echo callback('success', 'Operação efectuada com sucesso', 'Dhulka informa');
        else
            echo callback('error','Erro ao efectuar esta operação','Dhulka informa');
    }

    public function perfil()
    {
        $this->k_menus['titulo']="Dhulka | Perfil Utilizador";
        $this->load->view('head_foot/header',$this->k_menus);
        $this->parser->parse('utilizador/perfil',$this->k_menus);
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    public function listar()
    {
        $this->k_menus['titulo']="Dhulka | Listar Utilizador";
        $this->k_menus['utilizadores']=$this->utilizador->listar_utilizadores();
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else
        $this->parser->parse('utilizador/listar',$this->k_menus);
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    public function dados_user()
    {
        foreach ($this->utilizador->dados_user($_GET['id_user']) as $item)
        {
            $rs[]=$item;
        }
        echo json_encode($rs);
    }

    public function add_foto()
    {
        if(isset($_FILES["image_file"]["name"]))
        {
            $config['upload_path'] = './foto_perfil/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('image_file'))
            {
                echo $this->upload->display_errors();
            }
            else
            {
                $data = $this->upload->data();
                $update=array(
                    'fotografia'=>$data["file_name"]
                );
                if($this->utilizador->alterar_foto($this->session->userdata('id'),$update)==1)
                    echo callback('success','Foto adicionada com sucesso','Dhulka informa',base_url().'foto_perfil/'.$data["file_name"]);
                else
                    echo callback('error','Erro ao efectuar esta operação','Dhulka informa');
            }
        }
    }

    public function add_foto_webCam()
    {
        define('UPLOAD_DIR', './foto_perfil/');
        $img = $_POST['foto_capturada'];
        $img = str_replace('data:image/jpeg;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $nome= uniqid().'-'.$this->session->userdata('id').'.jpg';
        $file = UPLOAD_DIR .$nome;
        $success = file_put_contents($file, $data);
       if($success!=0 || $success!=null)
       {
           $update=array(
               'fotografia'=>$nome
           );
           if($this->utilizador->alterar_foto($this->session->userdata('id'),$update)==1)
               echo callback('success','Foto adicionada com sucesso','Dhulka informa',base_url().'foto_perfil/'.$nome);
           else
               echo callback('error','Erro ao efectuar esta operação','Dhulka informa');
       }
    }

    public function sendMail()
    {
        $this->load->library('email');
        $config['mailtype'] = 'html';
        $config['protocol'] = 'mail'; // define o protocolo utilizado
        $config['wordwrap'] = TRUE; // define se haverá quebra de palavra no texto
        $config['validate'] = TRUE; // define se haverá validação dos endereços de email
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $this->email->initialize($config);
        $this->email->from('helviosadoc@hotmail.com','Élvio de Sousa');
        $this->email->to('hackerxp33@gmail.com');
        $this->email->cc('fontes204@gmail.com');
        $this->email->subject(utf8_decode('Suas Credênciais'));
        $this->email->message('Para teres acesso a sua conta no Dhulka, tens informar as seguintes credênciais: <br> Username:Teste <br> Senha: 123456 <br> Acesse o <a href="http://localhost/dhulka/">link</a>');

        if($this->email->send())
            echo "Enviado com sucesso.";
//            echo $this->email->print_debugger();
        else
            echo "Enviado com falha.";

    }
}