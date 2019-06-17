<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 14/09/18
 * Time: 15:51
 */
class Projecto_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(\Entity\Projecto $projecto)
    {
        if ($projecto->getIdBairro()!=null || $projecto->getIdBairro()!=0)
        {
            $this->doctrine->em->persist($projecto);
            $this->doctrine->em->flush();
            return $projecto->getId();
        }
        return 0;
    }

    public function verifica_candidatura($id_projecto,$bi_candidato)
    {
        $x=$this->db->query("select cdtr.id from candidatura cdtr, candidato cddt, cidadao cdd, utente u where cdtr.id_projecto=? and cdtr.id_candidato=cddt.id and cddt.id_utente=u.id and u.id_cidadao=cdd.id and cdd.numero_doc=?",array($id_projecto,$bi_candidato))->result();
        return count($x);
    }
    public function verifica_data_limite_proj($id_projecto)
    {
        $x=$this->db->query("select id from projecto_descricao where DATE_FORMAT(now(), '%Y/%m/%d') > DATE_FORMAT(data_limite_expo, '%Y/%m/%d') and id_projecto=?",array($id_projecto))->result();
        return count($x);

    }


    public function get_qtde_terreno($id)
    {
        return $this->db->query('select pd.qtde_terreno from projecto p, projecto_descricao pd where pd.id_projecto=p.id and p.id=?',array($id))->result()[0];
    }

    public function listar_candidatos_pre_aprovados($id_projecto=null, $estado_candidatura=null, $uso=null) {
        return $this->db->query('select  b.nome as nome_projecto, sum(doc.prioridade) as pontuacao, cdtr.id as id_candidatura, cdd.nome as nome_cidadao, cdd.tipo_doc, cdd.numero_doc, cdtr.`numero`, DATE_FORMAT(cdtr.data, "%d/%m/%Y %H:%i:%s") as data from documento doc, candidatura_documento cd,candidatura cdtr, candidato cddt, cidadao cdd, utente u, projecto p,bairro b where b.id=p.id_bairro and p.id=cdtr.id_projecto and cdtr.id_projecto=? and cdtr.id_candidato=cddt.id and cddt.id_utente=u.id and u.id_cidadao=cdd.id and cd.id_candidatura=cdtr.id and cdtr.estado=? and cd.id_documento=doc.id and doc.uso=? group by cdtr.id order by cdd.nome',array($id_projecto,$estado_candidatura,$uso))->result();
//        return $this->db->query('select  b.nome as nome_projecto, sum(doc.prioridade) as pontuacao, cdtr.id as id_candidatura, cdd.nome as nome_cidadao, cdd.tipo_doc, cdd.numero_doc, cdtr.`numero`, DATE_FORMAT(cdtr.data, "%d/%m/%Y %H:%i:%s") as data from documento doc, candidatura_documento cd,candidatura cdtr, candidato cddt, cidadao cdd, utente u, projecto p,bairro b where b.id=p.id_bairro and p.id=cdtr.id_projecto and cdtr.id_projecto='.$id_projecto.' and cdtr.id_candidato=cddt.id and cddt.id_utente=u.id and u.id_cidadao=cdd.id and cd.id_candidatura=cdtr.id and cdtr.estado='.$estado_candidatura.' and cd.id_documento=doc.id and uso="'.$uso.'" group by cdtr.id order by cdd.nome')->result();
    }

    public function get_nome_projecto($id)
    {
     return $this->db->query('select b.id, b.nome from projecto p, bairro b where p.id_bairro=b.id and p.id=?',array($id))->result()[0];
    }

    public function listar()
    {
        return $this->db->query('SELECT p.id, c.nome as coordenador, b.nome as bairro, p.estado, p.data_criacao from cidadao c, projecto p, bairro b,comuna c1 where p.id_bairro=b.id and c.id=p.coordenador and c1.id=b.id_comuna and p.estado=?',array(1))->result();
    }

    public function listar_projecto()
    {
        return $this->db->query('SELECT p.id, c.nome as coordenador, b.nome as bairro, p.estado, p.data_criacao, gp.foto, c1.nome as comuna from cidadao c, projecto p, bairro b,comuna c1,galeria_projecto gp where p.id_bairro=b.id and c.id=p.coordenador and c1.id=b.id_comuna and p.id=gp.id_projecto and gp.ordem=0')->result();
    }

    public function listar_projecto_detalhe($id)
    {
        return $this->db->query('SELECT p.id, c.nome as coordenador, b.nome as bairro, p.estado,pd.qtde_terreno num_lotes, p.data_criacao, gp.foto, pd.descricao, pd.publico_alvo, c1.nome as comuna from cidadao c, projecto p, bairro b,comuna c1,galeria_projecto gp,projecto_descricao pd where p.id_bairro=b.id and c.id=p.coordenador and c1.id=b.id_comuna and p.id=gp.id_projecto and p.id=pd.id_projecto and gp.ordem=0 and p.id=?',array($id))->result()[0];
    }
    public function listar_projecto_detalhe1($id)
    {
        return $this->db->query('SELECT p.id, c.nome as coordenador, b.nome as bairro, p.estado, pd.qtde_terreno num_lotes, p.data_criacao, gp.foto, pd.descricao, pd.publico_alvo, c1.nome as comuna from cidadao c, projecto p, bairro b,comuna c1,galeria_projecto gp,projecto_descricao pd where p.id_bairro=b.id and c.id=p.coordenador and c1.id=b.id_comuna and p.id=gp.id_projecto and p.id=pd.id_projecto and gp.ordem=0 and p.id=?',array($id))->result();
    }

    public function listar_projecto_detalhe_prim($id)
    {
        return $this->db->query('select p.*, c.nome as comuna, b.nome as bairro, m.nome as municipio, c1.nome as coordenador from projecto p, comuna c, bairro b, municipio m, cidadao c1 where p.id_bairro=b.id and c.id=b.id_comuna and c.id_municipio=m.id and c1.id=p.coordenador and p.id=?',array($id))->result()[0];
    }

    public function caracteristica_terreno_projecto($id)
    {
        return $this->db->query('select ctp.qtde_terreno, ct.combinacao, ct.id from caracteristica_terreno_projecto ctp, combinacoes_terreno ct, projecto p where p.id=ctp.id_projecto and ctp.id_combinacao=ct.id AND p.id='.$id)->result();
    }
    public function get_by_id($id)
    {
        return $this->db->query('SELECT b.nome as bairro, p.estado, p.data_criacao from cidadao c, projecto p, bairro b,comuna c1 where p.id_bairro=b.id and c.id=p.coordenador and c1.id=b.id_comuna and p.id='.$id)->result()[0];
    }

    public function control_btn($id,$id_projecto)
    {
        $x=0;
        $x=$this->db->query('select id from projecto where coordenador='.$id.' and id='.$id_projecto)->result();
        return count($x);
    }

    public function store_descricao(\Entity\Projecto_descricao $descricao)
    {
        if ($descricao->getDescricao()!=null || $descricao->getDescricao()!="")
        {
            $this->doctrine->em->persist($descricao);
            $this->doctrine->em->flush();
            return $descricao->getId();
        }
        return 0;
    }

    public function store_caracteristica_terreno(\Entity\Caracteristica_terreno_projecto $terreno_projecto)
    {
        if ($terreno_projecto->getIdCombinacao()!=null || $terreno_projecto->getIdCombinacao()!=0)
        {
            $this->doctrine->em->persist($terreno_projecto);
            $this->doctrine->em->flush();
            return $terreno_projecto->getId();
        }
        return 0;
    }
    public function dimensoes()
    {
        return $this->db->query('select *from combinacoes_terreno')->result();
    }

    public function add_galeria(\Entity\Galeria_projecto $projecto)
    {
        if ($projecto->getFoto()!=null || $projecto->getFoto()!="")
        {
            $this->doctrine->em->persist($projecto);
            $this->doctrine->em->flush();
            return $projecto->getId();
        }
        return 0;
    }

    public function store_terreno_projecto(\Entity\Projecto_terreno $terreno)
    {
        if ($terreno->getIdProjecto()!=null || $terreno->getIdProjecto()!=0)
        {
            $this->doctrine->em->persist($terreno);
            $this->doctrine->em->flush();
            return $terreno->getId();
        }
        return 0;
    }

    public function galeria($id)
    {
        return $this->db->query("select foto from galeria_projecto where id_projecto=".$id)->result();
    }

    public function total_terreno($id)
    {
       return $this->db->query('select qtde_terreno from projecto_descricao where id_projecto=?',array($id))->result();
    }

    public function listar_terreno($id)
    {
        return $this->db->query('select t.* from terreno t, projecto_terreno pt where pt.id_terreno=t.id and pt.id_projecto=?',array($id))->result();
    }
}