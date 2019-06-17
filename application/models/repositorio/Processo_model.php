<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 22/08/18
 * Time: 21:03
 */
class Processo_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(\Entity\Processo $processo)
    {
        if ($processo->getCodigo()!=null || $processo->getCodigo()!="")
        {
            $this->doctrine->em->persist($processo);
            $this->doctrine->em->flush();
            return $processo->getId();
        }
        return 0;
    }

    public function store_processo_tecnico(\Entity\Processo_tecnico $processo_tecnico )
    {
        if ($processo_tecnico->getIdProcesso()!=null || $processo_tecnico->getIdProcesso()!=0)
        {
            $this->doctrine->em->persist($processo_tecnico);
            $this->doctrine->em->flush();
            return $processo_tecnico->getId();
        }
        return 0;
    }

    public function listar()
    {
        return $this->db->query('select p.*, c.nome as utente, a.nome as assunto, es.estado as estado_processo from processo p, cidadao c,user_teste ut,role, assunto a, entrada_saida es, utente u where ut p.id_utente=u.id and u.id_cidadao=c.id and a.id=p.id_assunto and (es.id_saida='.$this->session->userdata('id_cidadao').' or es.id_entrada='.$this->session->userdata('id').')  order by es.id  desc limit 1')->result();
    }

    public function detalhe($param)
    {
        //melhorar a consulta para trazer todos intervenientes no processo
        return $this->db->query('SELECT DISTINCT ut.id, c1.nome as utente,c1.data_nascimento ,ut.fotografia,c2.nome as utilizador, es.data_actividade, r.nome as role,es.estado as estado_actual FROM  utente u,fisica f, cidadao c1, cidadao c2, entrada_saida es, role r, processo p, assunto a, user_teste ut WHERE u.id_cidadao=c1.id and u.id=p.id_utente and es.id_processo=p.id AND a.id=p.id_assunto AND r.id=ut.id_role AND ut.id_cidadao=c2.id AND c1.id=f.id_cidadao and ( es.id_entrada=ut.id) AND p.id='.$param)->result();
    }

    public function detalhe_1($param)
    {
        //melhorar a consulta para trazer todos intervenientes no processo
        return $this->db->query('SELECT DISTINCT c2.nome as utilizador, es.data_actividade,ut.fotografia, r.nome as role FROM  utente u,fisica f, cidadao c1, cidadao c2, entrada_saida es, role r, processo p, assunto a, user_teste ut WHERE u.id_cidadao=c1.id and u.id=p.id_utente and es.id_processo=p.id AND a.id=p.id_assunto AND r.id=ut.id_role AND ut.id_cidadao=c2.id AND c1.id=f.id_cidadao and ( es.id_saida=ut.id) and es.estado=1 AND p.id='.$param)->result()[0];
    }

    public function num_ordem()
    {
        $result=$this->db->get('processo');
        return $result->num_rows();
    }

    public function enviar($id_processo,$estado,$id_tecnico=null)
    {
        $funcoes=array("admin","dmguuc","cruc","TRUC");
        $id_entrada=null;
        $e_s=null;
            switch ($estado)
            {
                case 1:
                    $ret=$this->db->query("select ut.id from user_teste ut, role r,cidadao c where (c.id=ut.id_cidadao and ut.id_role=r.id) and r.sigla=?",array($funcoes[0]))->result()[0];
                    $id_entrada=$ret->id;
                    $entrada_saida=new \Entity\Entrada_saida($this->session->userdata('id'),$id_entrada,$id_processo,2);
                    $e_s=$this->entrada_saida->store($entrada_saida);
                    break;
                case 2:
                    $ret = $this->db->query("select ut.id from user_teste ut, role r,cidadao c where (c.id=ut.id_cidadao and ut.id_role=r.id) and r.sigla=?", array($funcoes[1]))->result()[0];
                    $id_entrada = $ret->id;
                    $entrada_saida = new \Entity\Entrada_saida($this->session->userdata('id'), $id_entrada, $id_processo, 3);
                    $e_s = $this->entrada_saida->store($entrada_saida);
                    break;
                case 3:
                    $ret=$this->db->query("select ut.id from user_teste ut, role r,cidadao c where (c.id=ut.id_cidadao and ut.id_role=r.id) and r.sigla=?",array($funcoes[2]))->result()[0];
                    $id_entrada=$ret->id;
                    $entrada_saida=new \Entity\Entrada_saida($this->session->userdata('id'),$id_entrada,$id_processo,4);
                    $e_s=$this->entrada_saida->store($entrada_saida);
                    break;
                case 4:
                    $entrada_saida=new \Entity\Entrada_saida($this->session->userdata('id'),$id_tecnico,$id_processo,5);
                    $e_s=$this->entrada_saida->store($entrada_saida);
                        $processo_tecnico=new \Entity\Processo_tecnico($id_processo,$id_tecnico);
                        $this->store_processo_tecnico($processo_tecnico);
                    break;
                case 5:
                    $ret = $this->db->query("select ut.id from user_teste ut, role r,cidadao c where (c.id=ut.id_cidadao and ut.id_role=r.id) and r.sigla=?", array($funcoes[2]))->result()[0];
                    $id_entrada = $ret->id;
                    $entrada_saida = new \Entity\Entrada_saida($this->session->userdata('id'), $id_entrada, $id_processo, -1);
                    $e_s = $this->entrada_saida->store($entrada_saida);
                    break;
                case -1:
                    $ret = $this->db->query("select ut.id from user_teste ut, role r,cidadao c where (c.id=ut.id_cidadao and ut.id_role=r.id) and r.sigla=?", array($funcoes[1]))->result()[0];
                    $id_entrada = $ret->id;
                    $entrada_saida = new \Entity\Entrada_saida($this->session->userdata('id'), $id_entrada, $id_processo, -2);
                    $e_s = $this->entrada_saida->store($entrada_saida);
                    break;
                case -2:
                    $ret = $this->db->query("select ut.id from user_teste ut, role r,cidadao c where (c.id=ut.id_cidadao and ut.id_role=r.id) and r.sigla=?", array($funcoes[0]))->result()[0];
                    $id_entrada = $ret->id;
                    $entrada_saida = new \Entity\Entrada_saida($this->session->userdata('id'), $id_entrada, $id_processo, -3);
                    $e_s = $this->entrada_saida->store($entrada_saida);
                    break;
            }
            return $e_s;
    }

    public function alterar_estado_processo($estado,$id)
    {
        return $this->db->query('update processo set estado=? where id=?',array($estado,$id));
    }

    public function total_por_utilizador($id)
    {
        $x=$this->db->query("select p.* from entrada_saida es, processo p where es.id_processo=p.id and es.id_saida=? GROUP BY es.id_processo",array($id))->result();
        return count($x);
    }

    public function getUtlimosEstados_by_proc($id=null) {
        $this->db->select('p.*, es.estado as estado_processo, c.nome as utente, a.nome as assunto');
        $this->db->from('entrada_saida as es');
        $this->db->join('processo as p', 'es.id_processo=p.id');
        $this->db->join('assunto as a', 'p.id_assunto=a.id');
        $this->db->join('utente as u', 'p.id_utente =u.id');
        $this->db->join('cidadao as c', 'c.id =u.id_cidadao');
        $this->db->where('es.id=(select max(es.id) from entrada_saida as es, processo as p where es.id_processo='.$id.')', NULL, FALSE);
        $query = $this->db->get();
        return $query;
    }

    public function gettodosIds() {
        $this->db->select('id');
        $this->db->from('processo');
        $query = $this->db->get();
        return $query;
    }

    public function verifica_estado_processo($estado,$id_role)
    {
        $this->db->select('id');
        $this->db->from('parametro_estado_grupo');
        $this->db->where('estado_processo',$estado);
        $this->db->where('sigla_role=(select sigla from role where id='.$id_role.')', NULL, FALSE);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function get_by_id($id)
    {
        return $this->db->query('SELECT p.*, es.data_actividade, es.id_saida as emissor, es.estado as estado_processo, f.fotografia, c.data_nascimento, c.nome as utente FROM processo p, cidadao c, fisica f, utente u, entrada_saida es WHERE c.id=f.id_cidadao AND c.id=u.id_cidadao AND p.id=es.id_processo AND p.id_utente=u.id AND p.id=? and es.id=(select max(es.id) from entrada_saida as es  where es.id_processo=?)',array($id,$id))->result()[0];
//        return $this->db->query('SELECT p.*, es.data_actividade, es.id_saida as emissor, es.estado as estado_processo, f.fotografia, c.data_nascimento, c.nome as utente FROM processo p, cidadao c, fisica f, utente u, entrada_saida es WHERE c.id=f.id_cidadao AND c.id=u.id_cidadao AND p.id=es.id_processo AND p.id_utente=u.id AND p.id=? and es.id=(select max(es.id) from entrada_saida as es, processo as p where es.id_processo=p.id)',array($id))->result()[0];
    }

    public function data_criacao($id)
    {
        return $this->db->query('SELECT es.data_actividade as data_criacao from processo p, entrada_saida es where p.id=es.id_processo and es.id_entrada=? and p.id=?',array(0,$id))->result()[0];
    }

    public function get_emissor($id)
    {
        return $this->db->query('select c.nome from cidadao c, user_teste ut WHERE ut.id_cidadao=c.id AND ut.id='.$id)->result()[0];
    }

    public function get_parecer_comun()
    {
        return $this->db->get('parecer_comun')->result();
    }

    public function get_prioridade()
    {
        return $this->db->get('prioridade')->result();
    }

    public function get_estado($id)
    {
        return $this->db->query('select pr.estado from processo pr where pr.id=?',array($id))->result()[0];
    }

    public function processo_tecnico($id_user,$id_prooc)
    {
        $x=$this->db->query("select id from processo_tecnico where id_tecnico=? and id_processo=?",array($id_user,$id_prooc))->result();
        return count($x);
    }
}//fim da class
