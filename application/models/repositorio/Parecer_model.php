<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 22/09/18
 * Time: 12:52
 */
class Parecer_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(\Entity\Parecer $parecer)
    {
        if ($parecer->getDescricao()!=null || $parecer->getDescricao()!="")
        {
            $this->doctrine->em->persist($parecer);
            $this->doctrine->em->flush();
            return $parecer->getId();
        }
        return 0;
    }

    public function control_botao_enviar($id_utilizador,$estado, $id_processo)
    {
        $k=$this->db->query('SELECT pro.id from parecer pa, entrada_saida es, processo pro WHERE pro.id=pa.id_processo and pro.id=es.id_processo and es.estado=? AND pro.id=? AND pa.id_utilizador=?',array($estado,$id_processo,$id_utilizador))->result();
        return count($k);
    }
    public function control_envio($id_utilizador, $id_processo)
    {
        $k=$this->db->query('SELECT pro.id from parecer pa, processo pro WHERE pro.id=pa.id_processo AND pro.id=? AND pa.id_utilizador=?',array($id_processo,$id_utilizador))->result();
        return count($k);
    }

    public function get_parecer($id_processo)
    {
        return $this->db->query('select pr.descricao, pr.id_utilizador from parecer pr where pr.id_processo=? order by pr.id DESC limit 1',array($id_processo))->result()[0];
    }
}