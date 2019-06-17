<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 28/09/18
 * Time: 12:22
 */
class Terreno_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(\Entity\Terreno $terreno)
    {
        if ($terreno->getBloco()!=null || $terreno->getBloco()!="")
        {
            $this->doctrine->em->persist($terreno);
            $this->doctrine->em->flush();
            return $terreno->getId();
        }
        return 0;
    }

    public function num_ordem()
    {
        $result=$this->db->get('terreno');
        return $result->num_rows();
    }

	public function get_by_id($id)
	{
		return $this->db->query("select distinct t.id, p.latitude as lat, p.longitude as lng from terreno t, poligono p where p.id_terreno=t.id and t.id=?",array($id))->result();
    }

	public function listar()
	{
		return $this->db->query("select t.*, p.latitude as lat, p.longitude as lng from terreno t, poligono p where p.id_terreno=t.id")->result();
	}

	public function get_all()
	{
//		return $this->db->query('select c.nome, t.codigo, t.area, t.quarteirao, t.lote c1.nome as comuna, b.nome as bairro from cidadao c, utente u, terreno t, comuna c1, bairro b where c.id=u.id_cidadao and ')->result();
		return $this->db->query("select distinct t.id, p.latitude as lat, p.longitude as lng from terreno t, poligono p where p.id_terreno=t.id")->result();
	}

	public function control_btn_novo_terreno($id_processo)
	{
		$result=$this->db->query('select t.id from terreno t, processo p,utente u, utente_terreno ut where p.id_utente=u.id and t.id=ut.id_terreno and ut.id_utente=u.id and p.id=?',array($id_processo));
		return $result->num_rows();
	}

    public function add_foto(\Entity\Foto_terreno $foto_terreno)
    {
        if ($foto_terreno->getFoto()!=null || $foto_terreno->getFoto()!="")
        {
            $this->doctrine->em->persist($foto_terreno);
            $this->doctrine->em->flush();
            return $foto_terreno->getId();
        }
        return 0;
    }
}
