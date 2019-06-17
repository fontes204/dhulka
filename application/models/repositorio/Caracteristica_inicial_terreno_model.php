<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 12/10/18
 * Time: 17:00
 */
class Caracteristica_inicial_terreno_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(\Entity\Caracteristica_inicial_terreno $terreno)
    {
        if ($terreno->getDimensaoTerreno()!=null || $terreno->getDimensaoTerreno()!="")
        {
            $this->doctrine->em->persist($terreno);
            $this->doctrine->em->flush();
            return $terreno->getId();
        }
        return 0;
    }

    public function listar($param)
    {
        return $this->db->query('select c.nome as comuna,b.nome as bairro, cit.quarteirao, cit.rua, cit.dimensao_terreno as dimensao from comuna c, bairro b, caracteristica_inicial_terreno cit, processo p where p.id=cit.id_processo and c.id=b.id_comuna and b.id=cit.id_bairro and p.id=?',array($param))->result()[0];
    }

}