<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 20/10/18
 * Time: 23:50
 */

class Utente_terreno_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function store(\Entity\Utente_terreno $terreno)
	{
		if ($terreno->getIdTerreno()!=null || $terreno->getIdTerreno()!="")
		{
			$this->doctrine->em->persist($terreno);
			$this->doctrine->em->flush();
			return $terreno->getId();
		}
		return 0;
	}
}
