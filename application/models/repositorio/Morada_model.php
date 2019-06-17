<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 20/08/18
 * Time: 12:44
 */
class Morada_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function store(\Entity\Morada $morada)
    {
        if ($morada->getIdCidadao()!=null || $morada->getIdCidadao()!=0)
        {
            $this->doctrine->em->persist($morada);
            $this->doctrine->em->flush();
            return $morada->getId();
        }
        return 0;
    }
}