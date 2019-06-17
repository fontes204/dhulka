<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 20/08/18
 * Time: 12:45
 */
class Fisica_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function store(\Entity\Fisica $fisica)
    {
        if ($fisica->getIdCidadao()!=null || $fisica->getIdCidadao()!=0)
        {
            $this->doctrine->em->persist($fisica);
            $this->doctrine->em->flush();
            return $fisica->getId();
        }
        return 0;
    }
}