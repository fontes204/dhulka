<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 14/09/18
 * Time: 15:54
 */
class Projecto extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store()
    {
        $bairro=new \Entity\Bairro($this->input->post('nome_projecto'),$this->input->post('id_comuna'),0);
        $id_bairro=$this->bairro->store($bairro);
        $projecto=new \Entity\Projecto($id_bairro,$this->input->post('id_coordenador'),1);
        if ($this->projecto->store($projecto)!=0)
            echo callback('success','Projecto criado com sucesso','Dhulka informa');
        else
            echo callback('error','Erro ao enviar o processo','Dhulka informa');
    }

    public function add_descricao()
    {
        $ret=null;
        $ret1=null;
        $descricao=new \Entity\Projecto_descricao($this->input->post('id_projecto'),$this->input->post('descricao'),$this->input->post('qtde_terreno'),$this->input->post('area'),$this->input->post('publico'),1,1,date("Y-m-d",strtotime($this->input->post('data_expo'))));
        $ret1=$this->projecto->store_descricao($descricao);
        for ($i=0;$i<count($_POST['caracteristica']);$i++)
        {
            $caracteristica=new \Entity\Caracteristica_terreno_projecto($this->input->post('id_projecto'),$_POST['caracteristica'][$i]['dimensao'],$_POST['caracteristica'][$i]['quantidade']);
            $ret=$this->projecto->store_caracteristica_terreno($caracteristica);
        }
        if ($ret+$ret1>1)
            echo callback('success','Características adicionadas com sucesso','Dhulka informa');
        else
            echo callback('error','Erro ao adicionar as características','Dhulka informa');
        //echo json_encode();
    }

    public function listar()
    {
        $this->k_menus['titulo']="Dhulka | Listar Projecto";
        $this->k_menus['projectos']=$this->projecto->listar();
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else
        {
            $this->load->view('projecto/listar',$this->k_menus);
        }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    public function coordenar($param=null)
    {
        $this->k_menus['titulo']="Dhulka | Coordenar Projecto";
        $this->k_menus['projectos']=$this->projecto->listar();
        $this->k_menus['dimensoes']=$this->projecto->dimensoes();

        if (is_numeric($param)) {
            if (count($this->projecto->total_terreno($this->uri->segment(3)))==0)
                $this->k_menus['total_terreno']="null";
            else
                $this->k_menus['total_terreno']=$this->projecto->total_terreno($this->uri->segment(3))[0];

            if (count($this->projecto->listar_projecto_detalhe1($this->session->userdata('id_projecto'))) == 0)
                $this->k_menus['projecto'] = "null";
            else
                $this->k_menus['projecto'] = $this->projecto->listar_projecto_detalhe1($this->session->userdata('id_projecto'))[0];
        }

        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else
        {
            if(is_numeric($param))
            $this->load->view('projecto/coordenar',$this->k_menus);
            elseif (strstr($param,"carregar_foto")) {
                if (count($this->projecto->listar_projecto_detalhe1($this->session->userdata('id_projecto'))) == 0)
                    $this->k_menus['projecto'] = "null";
                else
                    $this->k_menus['projecto'] = $this->projecto->listar_projecto_detalhe1($this->session->userdata('id_projecto'))[0];
                $this->load->view('projecto/carregar_foto',$this->k_menus);
            }
            elseif (strstr($param,"add_descricao")) {
                if (count($this->projecto->listar_projecto_detalhe1($this->session->userdata('id_projecto'))) == 0)
                    $this->k_menus['projecto'] = "null";
                else
                    $this->k_menus['projecto'] = $this->projecto->listar_projecto_detalhe1($this->session->userdata('id_projecto'))[0];
                $this->load->view('projecto/add_descricao', $this->k_menus);

            }elseif (strstr($param,"estatistica")) {
                if (count($this->projecto->listar_projecto_detalhe1($this->session->userdata('id_projecto'))) == 0)
                    $this->k_menus['projecto'] = "null";
                else
                    $this->k_menus['projecto'] = $this->projecto->listar_projecto_detalhe1($this->session->userdata('id_projecto'))[0];
                $this->load->view('projecto/estatistica', $this->k_menus);

            }elseif (strstr($param,"galeria"))
            {
                if (count($this->projecto->listar_projecto_detalhe1($this->session->userdata('id_projecto'))) == 0)
                    $this->k_menus['projecto'] = "null";
                else
                    $this->k_menus['projecto'] = $this->projecto->listar_projecto_detalhe1($this->session->userdata('id_projecto'))[0];
                $this->k_menus['galeria']=$this->projecto->galeria($this->session->userdata('id_projecto'));
                $this->load->view('projecto/galeria', $this->k_menus);
            }
        }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    public function carregar_foto()
    {

        $fotos = $_FILES['foto'];
        $type = $fotos['type'];
        $path="./galeria_projecto/";
        $k=null;
        $k1=null;
        //Extensoes permitidas
        $tipos=array('image/png','image/jpeg','image/jpg','image/gif','image/bmp','image/pjpeg');

        $indice=count(array_filter($fotos['name']));
        if ($indice<=0)
            echo callback('error','Você não selecionou nenhuma imagem','Dhulka informa');
        else
            {
                for ($i=0;$i<$indice;$i++)
                {
                    if(in_array($type[$i], $tipos))
                    {
                        $nome = 'dhulka-' . md5(uniqid(rand(), true)) . '.jpg';
                        $k=upload($fotos['tmp_name'][$i], $nome, 1024, 683, $path);


                        if ($k!=null)
                        {
                            $galeria=new \Entity\Galeria_projecto($this->input->post('id_projecto'),$nome,$i);
                            $k1=$this->projecto->add_galeria($galeria);
                        }
                    }
                }
                if ($k1!=null)
                    echo callback('success','Foto adicionada com sucesso','Dhulka informa');
                else
                    echo callback('error','Erro ao adicionar as fotos','Dhulka informa');
            }
    }

    public function listar_candidatos_aprovados_final($param) {
        //load pdf library
        $this->load->library('Pdf');
        $this->k_menus['id_projecto']=$param;
        $this->k_menus['listar_candidatos_aprovados']=$this->listar_candidatos_aprovados();
        $this->load->view('projecto/candidatos_aprovados', $this->k_menus);
    }

    public function listar_candidatos_aprovados() {
        $id_projecto = $this->uri->segment(3);
        $estado_candidatura = 1;
        $uso = "c";
        $limite_candidatos = 3;//$this->projecto->get_qtde_terreno($id_projecto)->qtde_terreno;
        $candidados_aprovados = array(); //Vector que guarda todos os candidatos aprovados
        $pre_candidatos = array();
        $pre_candidatos = $this->projecto->listar_candidatos_pre_aprovados($id_projecto, $estado_candidatura, $uso);
        $maior=0;

        $tamanhoPreCand = count($pre_candidatos);
        $indice=0;
        for ($l = 0; $l < $tamanhoPreCand; $l++):
            for ($c = 0; $c < $tamanhoPreCand - 1; $c++):
                $indice = $l;
                if ($indice < $limite_candidatos) {
                    $maior = $pre_candidatos[$l]->pontuacao;
                    $candidados_aprovados[$indice]["pontuacao"] = $pre_candidatos[$l]->pontuacao;
                    $candidados_aprovados[$indice]["nome_projecto"] = $pre_candidatos[$l]->nome_projecto;
                    $candidados_aprovados[$indice]["id_candidatura"] = $pre_candidatos[$l]->id_candidatura;
                    $candidados_aprovados[$indice]["nome_cidadao"] = $pre_candidatos[$l]->nome_cidadao;
                    $candidados_aprovados[$indice]["tipo_doc"] = $pre_candidatos[$l]->tipo_doc;
                    $candidados_aprovados[$indice]["numero_doc"] = $pre_candidatos[$l]->numero_doc;
                    $candidados_aprovados[$indice]["numero"] = $pre_candidatos[$l]->numero;
                    $candidados_aprovados[$indice]["data"] = $pre_candidatos[$l]->data;

                    if ($maior < $pre_candidatos[$c]->pontuacao) {
                        $maior = $pre_candidatos[$c]->pontuacao;
                        $candidados_aprovados[$indice]["pontuacao"] = $pre_candidatos[$c]->pontuacao;
                        $candidados_aprovados[$indice]["nome_projecto"] = $pre_candidatos[$c]->nome_projecto;
                        $candidados_aprovados[$indice]["id_candidatura"] = $pre_candidatos[$c]->id_candidatura;
                        $candidados_aprovados[$indice]["nome_cidadao"] = $pre_candidatos[$c]->nome_cidadao;
                        $candidados_aprovados[$indice]["tipo_doc"] = $pre_candidatos[$c]->tipo_doc;
                        $candidados_aprovados[$indice]["numero_doc"] = $pre_candidatos[$c]->numero_doc;
                        $candidados_aprovados[$indice]["numero"] = $pre_candidatos[$c]->numero;
                        $candidados_aprovados[$indice]["data"] = $pre_candidatos[$c]->data;
                    } else {
                        $c++;
                    }
                } else {
                    $l = $tamanhoPreCand;
                    $c = $tamanhoPreCand;
                    break;
                }
            endfor;
        endfor;

        return $candidados_aprovados;
    }

    public function dimensao_terreno()
    {
        echo json_encode($this->projecto->caracteristica_terreno_projecto($this->input->get('param')));
    }

    public function listar_terreno($param=null)
    {
        $this->k_menus['titulo']="Dhulka | Listar Terreno";

            if (count($this->projecto->listar_projecto_detalhe1($this->session->userdata('id_projecto'))) == 0)
                $this->k_menus['projecto'] = "null";
            else
                $this->k_menus['projecto'] = $this->projecto->listar_projecto_detalhe1($this->session->userdata('id_projecto'))[0];
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else
        {
            $this->load->view('projecto/terrenos',$this->k_menus);
        }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    public function detalhe_terreno($param=null)
    {
        $this->k_menus['titulo']="Dhulka | Listar Projecto";
        $this->k_menus['projecto']="null";
        $this->load->view('head_foot/header',$this->k_menus);
        if($this->controla==false)
            $this->load->view('errors/autorizacao_negada');
        else
        {
            $this->load->view('projecto/detalhe_terreno',$this->k_menus);
        }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

}//fim da class