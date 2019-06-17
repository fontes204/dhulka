<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 20/10/18
 * Time: 23:46
 */

namespace Entity;


/**
 *
 * @Entity
 * @Table(name="utente_terreno")
 */
class Utente_terreno
{

	/**
	 * @Id
	 * @GeneratedValue(strategy="AUTO")
	 * @Column(type="integer", name="id")
	 */
	protected $id;

	/**
	 * @Column(type="integer", name="id_utente")
	 */
	protected $id_utente;

	/**
	 * @Column(type="integer", name="id_terreno")
	 */
	protected $id_terreno;

	/**
	 * Utente_terreno constructor.
	 * @param $id_utente
	 * @param $id_terreno
	 */
	public function __construct($id_utente, $id_terreno)
	{
		$this->id_utente = $id_utente;
		$this->id_terreno = $id_terreno;
	}

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id): void
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getIdUtente()
	{
		return $this->id_utente;
	}

	/**
	 * @param mixed $id_utente
	 */
	public function setIdUtente($id_utente): void
	{
		$this->id_utente = $id_utente;
	}

	/**
	 * @return mixed
	 */
	public function getIdTerreno()
	{
		return $this->id_terreno;
	}

	/**
	 * @param mixed $id_terreno
	 */
	public function setIdTerreno($id_terreno): void
	{
		$this->id_terreno = $id_terreno;
	}

}
