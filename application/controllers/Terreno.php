<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 25/09/18
 * Time: 15:28
 */
class Terreno extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('repositorio/Processo_model' => 'processo', 'repositorio/Entrada_saida_model' => 'entrada_saida', 'repositorio/Terreno_model' => 'terreno', 'repositorio/Poligono_model' => 'poligono', 'repositorio/comuna_model' => 'comuna', 'repositorio/Utente_terreno_model' => 'utente_terreno', 'repositorio/Utentesss_model' => 'utente'));
    }

    protected $id_terreno;

    /**
     * @return mixed
     */
    public function getIdTerreno()
    {
        return $this->id_terreno;
    }

    /**
     * @param mixed $id_terreno
     */
    public function setIdTerreno($id_terreno)
    {
        $this->id_terreno = $id_terreno;
    }


    public function novo($param = null)
    {
        $this->k_menus['titulo'] = "Dhulka | Novo Terreno";
        if ($param != null) {
            $this->k_menus['ids_todos_processos'] = $this->processo->gettodosIds();
            $this->k_menus['processo'] = $this->processo->get_by_id($param);
            $this->k_menus['bairros'] = $this->bairro->listar();
            $this->k_menus['id_utente'] = $this->utente->get_id($param)->id;
        } else {
            $this->k_menus['bairros'] = $this->bairro->listar1();
            $this->k_menus['id_utente'] = null;
        }
        $this->load->view('head_foot/header', $this->k_menus);

        if ($this->controla == false)
            $this->load->view('errors/autorizacao_negada');
        else {
            if ($param != null)
                $this->load->view('terreno/novo', $this->k_menus);
            else {

                if (count($this->projecto->listar_projecto_detalhe1($this->session->userdata('id_projecto'))) == 0)
                    $this->k_menus['projecto'] = "null";
                else
                    $this->k_menus['projecto'] = $this->projecto->listar_projecto_detalhe1($this->session->userdata('id_projecto'))[0];
                $this->load->view('terreno/novo1', $this->k_menus);
            }
        }
        $this->load->view('modals/modals');
        $this->load->view('head_foot/footer');
    }

    public function store()
    {
        $opcao = isset($_POST['opcao']) ? $_POST['opcao'] : 'upload_foto';
        $k1 = null;
        if ($this->input->post('id_utente') != null) {
            switch ($opcao) {
                case 'terreno':
                    $cod_terreno = gerarCodigoTerreno("Cacuaco", $this->comuna->get_nome_by_id($this->input->post('id_zona'))->nome, $this->terreno->num_ordem() + 1);
                    $terreno = new \Entity\Terreno($cod_terreno, $this->input->post('area'), $this->input->post('largura'), $this->input->post('comprimento'), $this->input->post('bloco'), $this->input->post('quarteirao'), $this->input->post('lote'), $this->input->post('numVertice'), $this->input->post('id_zona'), $this->session->userdata('id'), 0);
                    $id_terreno = $this->terreno->store($terreno);
                    $ponto = $this->input->post('ponto');
                    $foto = $this->input->post('foto');
                    $res = null;

                    for ($i = 0; $i < count($ponto); $i++) {
                        $poligono = new \Entity\Poligono($this->input->post('id_zona'), $id_terreno, $ponto[$i]['latitude'], $ponto[$i]['longitude'], 0);
                        $res = $this->poligono->store($poligono);
                    }
                    $utente_terreno = new \Entity\Utente_terreno($this->input->post('id_utente'), $id_terreno);
                    $this->utente_terreno->store($utente_terreno);

                    if ($res != 0) {
                        for ($i = 0; $i < count($foto); $i++) {
                            $galeria = new \Entity\Foto_terreno($id_terreno, $foto[$i], $i);
                            $k1 = $this->terreno->add_foto($galeria);
                        }
                    }

                    if ($k1 != 0)
                        echo callback('success', 'Terreno adicionado com sucesso', 'Dhulka informa', 1);
                    else
                        echo callback('error', 'Erro ao efectuar esta operação', 'Dhulka informa');
                    break;
                case 'upload_foto':
                    echo json_encode($this->upload1('foto'), JSON_PRETTY_PRINT);

                    break;
            }
        } else {
            switch ($opcao) {
                case 'terreno':

                    $cod_terreno = gerarCodigoTerreno("Cacuaco", $this->comuna->get_nome_by_id($this->input->post('id_zona'))->nome, $this->terreno->num_ordem() + 1);
                    $terreno = new \Entity\Terreno($cod_terreno, $this->input->post('area'), $this->input->post('largura'), $this->input->post('comprimento'), $this->input->post('bloco'), $this->input->post('quarteirao'), $this->input->post('lote'), $this->input->post('numVertice'), $this->input->post('id_zona'), $this->session->userdata('id'), 1);
                    $id_terreno = $this->terreno->store($terreno);
                    $ponto = $this->input->post('ponto');
                    $foto = $this->input->post('foto');
                    $res = null;
                    for ($i = 0; $i < count($ponto); $i++) {
                        $poligono = new \Entity\Poligono($this->input->post('id_zona'), $id_terreno, $ponto[$i]['latitude'], $ponto[$i]['longitude'], 0);
                        $res = $this->poligono->store($poligono);
                    }

                    if ($res != 0) {
                        for ($i = 0; $i < count($foto); $i++) {
                            $galeria = new \Entity\Foto_terreno($id_terreno, $foto[$i], $i);
                            $k1 = $this->terreno->add_foto($galeria);
                        }
                        $projecto_terreno=new \Entity\Projecto_terreno($this->input->post('id_projecto'),$id_terreno);
                        $this->projecto->store_terreno_projecto($projecto_terreno);
                    }
                    if ($k1 != 0)
                        echo callback('success', 'Terreno adicionado com sucesso', 'Dhulka informa', 1);
                    else
                        echo callback('error', 'Erro ao efectuar esta operação', 'Dhulka informa');
                    break;

                case 'upload_foto':
                    echo json_encode($this->upload1('foto'), JSON_PRETTY_PRINT);

                    break;
            }
        }
    }

    public function setIdProjecto()
    {

        if (is_numeric($this->input->post('id_projecto'))) {
            $this->session->set_userdata('id_projecto', $this->input->post('id_projecto'));
            $this->session->set_userdata('projecto_bool', true);

            if ($this->session->userdata('projecto_bool') == true)
                echo $this->session->userdata('id_projecto');
            else
                echo 0;
        }
    }

    public function unsetIdProjecto()
    {
        unset($_SESSION['id_projecto']);
        unset($_SESSION['projecto_bool']);
    }

    public function listar()
    {
//        $this->k_menus['titulo']="Dhulka | Listar Terrenos";
//        $this->load->view('head_foot/header',$this->k_menus);
//        if($this->controla==false)
//            $this->load->view('errors/autorizacao_negada');
//        else{
//            $this->parser->parse('terreno/listar',$this->k_menus);
//        }
//        $this->load->view('modals/modals');
//        $this->load->view('head_foot/footer');

        $this->k_menus['titulo'] = "Dhulka | Listar Terrenos";
        $this->k_menus['terreno'] = 1;
        $this->load->view('terreno/listagem/assets/header', $this->k_menus);
        if ($this->controla == false)
            $this->load->view('errors/autorizacao_negada');
        else {
            $this->parser->parse('terreno/listagem/normal', $this->k_menus);
        }
        $this->load->view('terreno/listagem/assets/footer');
    }

    public function get_by_id()
    {
        $res = null;
        foreach ($this->terreno->get_by_id($this->input->get('id')) as $item) {
            $res[] = $item;
        }

        echo json_encode($res);
    }

    public function upload1($name)
    {
        $path = "./foto_terreno/";
        foreach ($_FILES[$name]['name'] as $key => $error) {
            $nome = 'dhulka-land-' . md5(uniqid(rand(), true)) . '.jpg';
            $tmp = $_FILES[$name]['tmp_name'][$key];
            $j[] = array('nomes' => $nome);
            upload($tmp, $nome, 1024, 683, $path);
        }
        return $j;
    }

    public function listar_todos()
    {
        $res = null;
        foreach ($this->terreno->get_all() as $item) {
            $res[] = $item;
        }

        echo json_encode($res);
    }
}
