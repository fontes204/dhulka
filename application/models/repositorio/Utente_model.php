 <?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 19/08/18
 * Time: 21:44
 */
class Utente_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function store(\Entity\Cidadao $utente)
    {
        if ($utente->getNome()!=null || $utente->getNome()!="")
        {
            $this->doctrine->em->persist($utente);
            $this->doctrine->em->flush();
            return $utente->getId();
        }
        return 0;
    }

    //persistir os dados na tabela utente
    public function store_utente(\Entity\Utente $utente)
    {
        if ($utente->getIdCidadao()!=null || $utente->getIdCidadao()!=0)
        {
            $this->doctrine->em->persist($utente);
            $this->doctrine->em->flush();
            return $utente->getId();
        }
        return 0;
    }

    public function listar()
    {
        //melhorar para permitir o utilizador ser utente
        return $this->db->query('select DISTINCT c.*, p.nome as pais, f.estado_civil, f.genero, ct.telefone1, u.codigo, cm.nome as comuna, b.nome as bairro from cidadao c, pais p, fisica f, contacto ct,comuna cm,morada m, bairro b, conta c2,utente u  where c.id_pais=p.id and m.bairro=b.id and c.id=f.id_cidadao and c.id=u.id_cidadao and c.id=ct.id_cidadao and (c.id=m.id_cidadao and cm.id=m.id_comuna) and (c.id NOT IN (SELECT c1.id_cidadao FROM conta c1))')->result();
    }

    public function listar_todos_candidatos($id_projecto=null) {
        return $this->db->query('select cdd.nome, cdd.tipo_doc, cdd.numero_doc, cdtr.`numero`, DATE_FORMAT(cdtr.data, "%d/%m/%Y %H:%i:%s") as data from documento doc, candidatura_documento cd,candidatura cdtr, candidato cddt, cidadao cdd, utente u where cdtr.id_projecto='.$id_projecto.' and cdtr.id_candidato=cddt.id and cddt.id_utente=u.id and u.id_cidadao=cdd.id and cd.id_candidatura=cdtr.id  and cd.id_documento=doc.id order by cdtr.id')->result();
    }
    public function listar_candidatos_pre_aprovados($id_projecto=null, $estado_candidatura=null, $uso=null) {
        return $this->db->query('select  b.nome as nome_projecto, sum(doc.prioridade) as pontuacao, cdtr.id as id_candidatura, cdd.nome as nome_cidadao, cdd.tipo_doc, cdd.numero_doc, cdtr.`numero`, DATE_FORMAT(cdtr.data, "%d/%m/%Y %H:%i:%s") as data from documento doc, candidatura_documento cd,candidatura cdtr, candidato cddt, cidadao cdd, utente u, projecto p,bairro b where b.id=p.id_bairro and p.id=cdtr.id_projecto and cdtr.id_projecto='.$id_projecto.' and cdtr.id_candidato=cddt.id and cddt.id_utente=u.id and u.id_cidadao=cdd.id and cd.id_candidatura=cdtr.id and cdtr.estado='.$estado_candidatura.' and cd.id_documento=doc.id and uso="'.$uso.'" group by cdtr.id order by cdd.nome')->result();
    }

    public function listar_candidatos_reprovados($id_projecto=null, $estado_candidatura=null) {
        return $this->db->query('select cdd.nome, cdd.tipo_doc, cdd.numero_doc, cdtr.`numero`, DATE_FORMAT(cdtr.data, "%d/%m/%Y %H:%i:%s") as data from documento doc, candidatura_documento cd,candidatura cdtr, candidato cddt, cidadao cdd, utente u where cdtr.id_projecto='.$id_projecto.' and cdtr.id_candidato=cddt.id and cddt.id_utente=u.id and u.id_cidadao=cdd.id and cd.id_candidatura=cdtr.id and cdtr.estado='.$estado_candidatura.' and cd.id_documento=doc.id order by cdtr.id')->result();
    }

    public function detalhe($param)
    {
        return $this->db->query('select c.*, p.nome as pais, f.estado_civil, f.genero,f.fotografia as foto, ct.telefone1, ct.telefone2, ct.email, cm.nome as comuna, m.bairro, m.rua, pr.nome as provincia, mc.nome as municipio from cidadao c, pais p, fisica f, contacto ct,comuna cm,morada m, provincia pr, municipio mc  where c.id_pais=p.id and c.id=f.id_cidadao and c.id=ct.id_cidadao and (c.id=m.id_cidadao and cm.id=m.id_comuna) and (pr.id=mc.id_provincia  and mc.id=cm.id_municipio and m.id_comuna=cm.id) and c.id='.$param)->result();
    }

    public function detalhe1($param)
    {
        return $this->db->query('select c.*, p.nome as pais, f.estado_civil, f.genero, ct.telefone1, ct.telefone2, ct.email, cm.nome as comuna, m.bairro, m.rua, pr.nome as provincia, mc.nome as municipio, u.id as id_utente from cidadao c, pais p, fisica f, contacto ct,comuna cm,morada m, provincia pr, municipio mc, utente u  where c.id_pais=p.id and c.id=f.id_cidadao and c.id=ct.id_cidadao and (c.id=m.id_cidadao and cm.id=m.id_comuna and c.id=u.id_cidadao) and (pr.id=mc.id_provincia  and mc.id=cm.id_municipio and m.id_comuna=cm.id) and c.id='.$param)->result();
    }

    public function detalhe2($param)
    {
        return $this->db->query('select c.nome, f.fotografia as foto,c1.email, c1.telefone1, c1.telefone2 from cidadao c, utente u, contacto c1, fisica f where c.id=u.id_cidadao and f.id_cidadao=c.id and c1.id_cidadao=c.id and u.id=?',array($param))->result()[0];
    }

    public function detalhe4($param)
    {
        return $this->db->query('select u.id from utente u where u.codigo=?',array($param))->result()[0];
    }

    public function num_ordem()
    {
        $result=$this->db->get('utente');
        return $result->num_rows();
    }

	public function get_id($id_processo)
	{
		return $this->db->query('select u.id from processo p, utente u where u.id=p.id_utente and p.id=?',array($id_processo))->result()[0];
	}

    public function eliminar($id)
    {
        
    }

    public function buscar_utente($param)
    {
        return $this->db->query('select c.nome as utente, u.id from cidadao c, utente u, contacto ct where c.id=u.id_cidadao and ct.id_cidadao=c.id and ct.telefone1=? or ct.telefone2=? or c.numero_doc=?',array($param,$param,$param))->result();
    }
}
