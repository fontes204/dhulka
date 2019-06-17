<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 12/01/19
 * Time: 11:46
 */

class Candidatura_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(\Entity\Candidatura $candidatura)
    {
        if ($candidatura->getIdCandidato()!=null || $candidatura->getIdCandidato()!="")
        {
            $this->doctrine->em->persist($candidatura);
            $this->doctrine->em->flush();
            return $candidatura->getId();
        }
        return 0;
    }
}