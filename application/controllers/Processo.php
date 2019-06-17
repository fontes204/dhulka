<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 13/08/18
 * Time: 00:07
 */
class Processo extends CI_Controller
{
    public $k_menus=array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('repositorio/Documento_model'=>'documento','repositorio/Processo_model'=>'processo','repositorio/Entrada_saida_model'=>'entrada_saida','repositorio/Caracteristica_inicial_terreno_model'=>'caracter_terreno','repositorio/Terreno_model'=>'terreno','repositorio/Processo_documento_model'=>'processo_documento'));
    }

    public function upload1($name)
    {
        $path="./uploaded_docs/";
        foreach ($_FILES[$name]['name'] as $key=>$error)
        {
            $nome = 'dhulka-'.md5(uniqid(rand(), true)) .'.jpg';
            $tmp=$_FILES[$name]['tmp_name'][$key];
            $j[]=array('nomes'=>$nome);
            upload($tmp, $nome, 1024, 683, $path);
        }
        return $j;
    }

    public function novo($param=null)
    {
        $this->k_menus['titulo']="Dhulka | Novo Processo";
        $this->k_menus['provincia']=$this->provincia->listar_();
        $this->k_menus['comunas']=$this->municipio->listarComunaByIdMunicipio(MUNICIPIO);
        $this->k_menus['utentes']=$this->utente->listar();
        $this->k_menus['documentos']=$this->documento->listar();
        $this->k_menus['paises']=$this->app->listar_pais();
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else
            {
                switch ($param)
                {
                    case "aquisicao":
                        $this->k_menus['assunto']=1;
                        $this->k_menus['param']=$this->uri->segment(4);
                        $this->parser->parse('processo/aquisicao',$this->k_menus);
                        break;
                    case "legalizacao":
                        $this->k_menus['assunto']=2;
                        $this->parser->parse('processo/legalizacao1',$this->k_menus);
                        break;
                }

            }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    public function aquisicao($param=null)
    {
        $this->k_menus['titulo']="Dhulka | Novo Processo - Aquisição";
        $this->k_menus['provincia']=$this->provincia->listar_();
        $this->k_menus['comunas']=$this->municipio->listarComunaByIdMunicipio(MUNICIPIO);
        $this->k_menus['utentes']=$this->utente->listar();
        $this->k_menus['documentos']=$this->documento->listar();
        $this->k_menus['paises']=$this->app->listar_pais();
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else
            {
                switch ($param)
                {
                    case "online":
                        $this->k_menus['assunto']=1;
                        $this->k_menus['param']=$this->uri->segment(5);
                        $this->load->view('processo/online',$this->k_menus);
                        break;
                    case "presencial":
                        $this->k_menus['assunto']=2;
                        $this->k_menus['param']=$this->uri->segment(5);
                        $this->k_menus['projectos']=$this->projecto->listar_projecto();
                        $this->load->view('processo/presencial',$this->k_menus);
                        break;
                }
            }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    //armazenar os dados do processo no banco de dados
    public function store()
    {

        $opcao = isset($_POST['opcao']) ? $_POST['opcao'] : 'upload_docs';
        switch ($opcao) {
            case 'upload_docs':
                echo json_encode($this->upload1('images'), JSON_PRETTY_PRINT);
                break;
            case 'armazenar_dados':
                $processo=new \Entity\Processo($this->input->post('id_assunto'),date('Y-m-d h:m:s'),gerarNumeroProcesso($this->processo->num_ordem()+1,"LT"),$this->session->userdata('id'),$this->input->post('id_utente'),1);
                $id_processo=$this->processo->store($processo);
                for ($i=0;$i<count($_POST['id_doc']);$i++)
                {
                    $proc_doc=new \Entity\Processo_documento($id_processo,$_POST['id_doc'][$i],$_POST['docs'][$i]);
                    $this->processo_documento->store($proc_doc);
                }
                if ($id_processo!=0)
                {
                    $entrada_saida=new \Entity\Entrada_saida($this->session->userdata('id'),"",$id_processo,1);
                    $e_s=$this->entrada_saida->store($entrada_saida);
                    $caracteristica_terreno=new \Entity\Caracteristica_inicial_terreno($id_processo,$this->input->post('id_bairro'),$this->input->post('quarteirao'),$this->input->post('rua'),$this->input->post('dimensao'));
                    $this->caracter_terreno->store($caracteristica_terreno);
                    echo callback('success','Operação efectuada com sucesso','Dhulka informa');
                }else
                    echo callback('error','Erro ao efectuar esta operação','Dhulka informa');
                break;
            case 'candidatura':
                $processo=new \Entity\Processo($this->input->post('id_assunto'),date('Y-m-d h:m:s'),gerarNumeroProcesso($this->processo->num_ordem()+1,"AQ"),$this->session->userdata('id'),$this->input->post('id_utente'),1);
                $id_processo=$this->processo->store($processo);

                $doc_cand=$this->candidatura_documento->getDocumentos($this->input->post('id_utente'));

                    foreach ($doc_cand as $item)
                    {
                        $caminho=explode("/",$item->caminho);
                        $proc_doc=new \Entity\Processo_documento($id_processo,$item->id_documento,$caminho[count($caminho)-1]);
                        $this->processo_documento->store($proc_doc);
                    }
                if ($id_processo!=0)
                {
                    $entrada_saida=new \Entity\Entrada_saida($this->session->userdata('id'),"",$id_processo,1);
                    $e_s=$this->entrada_saida->store($entrada_saida);
                    echo callback('success','Operação efectuada com sucesso','Dhulka informa');
                }else
                    {
                        echo callback('error','Erro ao efectuar esta operação','Dhulka informa');
                    }
                break;
        }

    }
    //listar documento
    public function listar_documento()
    {

        foreach ($this->documento->listar() as $item)
        {
            $rs[] = $item;
        }
        echo json_encode($rs);
    }

    public function listar()
    {
        $this->k_menus['titulo']="Dhulka | Listar Processo";
//        $this->k_menus['processos']=$this->processo->listar();
        $this->k_menus['ids_todos_processos'] = $this->processo->gettodosIds();
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else
        {
            $this->load->view('processo/listar',$this->k_menus);
        }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    public function detalhe($param)
    {
        $this->k_menus['titulo']="Dhulka | Detalhes Processo";
        $this->k_menus['ids_todos_processos'] = $this->processo->gettodosIds();
        $this->k_menus['processo'] = $this->processo->get_by_id($param);
        $this->k_menus['data_criacao'] = $this->processo->data_criacao($param)->data_criacao;
        $this->k_menus['detalhes'] = $this->processo->detalhe($param);
        $this->k_menus['apresentados'] = $this->processo_documento->apresentado($param);
        $this->k_menus['faltas'] = $this->processo_documento->em_falta($param);
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else
        {
            $this->load->view('processo/detalhe',$this->k_menus);
        }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    public function enviar()
    {
        if($this->processo->enviar($this->input->post('id_processo'),$this->input->post('estado'),$this->input->post('id_tecnico'))!=0)
            echo callback('success','Processo enviado com sucesso','Dhulka informa');
        else
            echo callback('error','Erro ao enviar o processo','Dhulka informa');
    }

    public function total_por_utilizador()
    {
        echo $this->processo->total_por_utilizador($_GET['id_user']);
    }

    public function parecer($param)
    {
        $this->k_menus['titulo']="Dhulka | Adicionar Parecer";
        $this->k_menus['ids_todos_processos'] = $this->processo->gettodosIds();
        $this->k_menus['processo'] = $this->processo->get_by_id($param);
        $this->k_menus['data_criacao'] = $this->processo->data_criacao($param)->data_criacao;
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else
        {
            $this->load->view('processo/add_parecer',$this->k_menus);
        }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    public function add_parecer()
    {
        $parecer=new \Entity\Parecer($this->input->post('parecer'),$this->session->userdata('id'),$this->input->post('id_processo'));

        if($this->parecer->store($parecer)!=0)
            echo callback('success','Parecer adicionado com sucesso','Dhulka informa');
        else
            echo callback('error','Erro ao efectuar esta operação','Dhulka informa');

    }

    public function control_botao_enviar()
    {
        $ret=array();
        $ret['botao']=$this->parecer->control_botao_enviar($this->session->userdata('id'),$this->input->get('estado'),$this->input->get('id_processo'));
        $ret['processo']=$this->processo->verifica_estado_processo($this->input->get('estado'),$this->session->userdata('id_role'));

        echo "[".json_encode($ret)."]";
    }

    public function control_botao_ver_parecer()
    {
        $ret=array();
        $ret['botao']=$this->parecer->control_botao_enviar($this->session->userdata('id'),$this->input->get('estado'),$this->input->get('id_processo'));
        echo "[".json_encode($ret)."]";
    }

    public function ver_parecer($param)
    {
        $this->k_menus['titulo']="Dhulka | Ver Parecer";
        $this->k_menus['ids_todos_processos'] = $this->processo->gettodosIds();
        $this->k_menus['processo'] = $this->processo->get_by_id($param);
        $this->k_menus['data_criacao'] = $this->processo->data_criacao($param)->data_criacao;
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else
        {
            $this->load->view('processo/ver_parecer',$this->k_menus);
        }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    public function projectar($param)
    {
        $this->k_menus['titulo']="Dhulka | Projecção";
        $this->k_menus['ids_todos_processos'] = $this->processo->gettodosIds();
        $this->k_menus['processo'] = $this->processo->get_by_id($param);
		$this->k_menus['ctrl_novo_terreno']=$this->terreno->control_btn_novo_terreno($param);
        $this->k_menus['data_criacao'] = $this->processo->data_criacao($param)->data_criacao;
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else
        {
            $this->load->view('processo/projectar',$this->k_menus);
        }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    public function detalhes()
    {
        $this->k_menus['titulo']="Dhulka | Projecção";
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else
        {
            $this->load->view('processo/slide_show',$this->k_menus);
        }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

}//fim da class
