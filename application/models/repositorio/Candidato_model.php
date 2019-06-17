<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 12/01/19
 * Time: 11:36
 */

class Candidato_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(\Entity\Candidato $candidato)
    {
        if ($candidato->getIdUtente()!=null || $candidato->getIdUtente()!="")
        {
            $this->doctrine->em->persist($candidato);
            $this->doctrine->em->flush();
            return $candidato->getId();
        }
        return 0;
    }
}