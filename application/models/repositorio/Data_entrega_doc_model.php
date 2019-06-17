<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 21/11/18
 * Time: 19:16
 */

class Data_entrega_doc_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(\Entity\Data_entrega_doc $entrega_doc)
    {
        if ($entrega_doc->getIdDoc()!=null || $entrega_doc->getIdDoc()!=0)
        {
            $this->doctrine->em->persist($entrega_doc);
            $this->doctrine->em->flush();
            return $entrega_doc->getId();
        }
        return 0;
    }
}