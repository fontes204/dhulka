<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 22/08/18
 * Time: 22:33
 */
class Entrada_saida_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(\Entity\Entrada_saida $entrada_saida)
    {
        if ($entrada_saida->getIdProcesso()!=null || $entrada_saida->getIdProcesso()!=0)
        {
            $this->doctrine->em->persist($entrada_saida);
            $this->doctrine->em->flush();
            return $entrada_saida->getId();
        }
        return 0;
    }
}