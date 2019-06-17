<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 15/10/18
 * Time: 13:52
 */
class Poligono_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(\Entity\Poligono $poligono)
    {
        if ($poligono->getLatitude()!=null || $poligono->getLatitude()!="")
        {
            $this->doctrine->em->persist($poligono);
            $this->doctrine->em->flush();
            return $poligono->getId();
        }
        return 0;
    }
}