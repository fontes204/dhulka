<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 18/09/18
 * Time: 08:08
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="projecto_descricao")
 */
class Projecto_descricao
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="integer", name="id_projecto")
     */
    protected $id_projecto;

    /**
     * @Column(type="string", name="descricao")
     */
    protected $descricao;

    /**
     * @Column(type="integer", name="qtde_terreno")
     */
    protected $qtde_terreno;

    /**
     * @Column(type="float", name="area_projecto")
     */
    protected $area_projecto;

    /**
     * @Column(type="string", name="publico_alvo")
     */
    protected $publico_alvo;

    /**
     * @Column(type="float", name="dist_terrenos")
     */
    protected $dist_terrenos;

    /**
     * @Column(type="float", name="espaco_rua")
     */
    protected $espaco_rua;
    /**
     * @Column(type="string", name="data_limite_expo")
     */
    protected $data_limite_expo;

    /**
     * Projecto_descricao constructor.
     * @param $id_projecto
     * @param $descricao
     * @param $qtde_terreno
     * @param $area_projecto
     * @param $publico_alvo
     * @param $dist_terrenos
     * @param $espaco_rua
     * @param $data_limite_expo
     */
    public function __construct($id_projecto, $descricao, $qtde_terreno, $area_projecto, $publico_alvo, $dist_terrenos, $espaco_rua, $data_limite_expo)
    {
        $this->id_projecto = $id_projecto;
        $this->descricao = $descricao;
        $this->qtde_terreno = $qtde_terreno;
        $this->area_projecto = $area_projecto;
        $this->publico_alvo = $publico_alvo;
        $this->dist_terrenos = $dist_terrenos;
        $this->espaco_rua = $espaco_rua;
        $this->data_limite_expo = $data_limite_expo;
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
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdProjecto()
    {
        return $this->id_projecto;
    }

    /**
     * @param mixed $id_projecto
     */
    public function setIdProjecto($id_projecto)
    {
        $this->id_projecto = $id_projecto;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getQtdeTerreno()
    {
        return $this->qtde_terreno;
    }

    /**
     * @param mixed $qtde_terreno
     */
    public function setQtdeTerreno($qtde_terreno)
    {
        $this->qtde_terreno = $qtde_terreno;
    }

    /**
     * @return mixed
     */
    public function getAreaProjecto()
    {
        return $this->area_projecto;
    }

    /**
     * @param mixed $area_projecto
     */
    public function setAreaProjecto($area_projecto)
    {
        $this->area_projecto = $area_projecto;
    }

    /**
     * @return mixed
     */
    public function getPublicoAlvo()
    {
        return $this->publico_alvo;
    }

    /**
     * @param mixed $publico_alvo
     */
    public function setPublicoAlvo($publico_alvo)
    {
        $this->publico_alvo = $publico_alvo;
    }

    /**
     * @return mixed
     */
    public function getDistTerrenos()
    {
        return $this->dist_terrenos;
    }

    /**
     * @param mixed $dist_terrenos
     */
    public function setDistTerrenos($dist_terrenos)
    {
        $this->dist_terrenos = $dist_terrenos;
    }

    /**
     * @return mixed
     */
    public function getEspacoRua()
    {
        return $this->espaco_rua;
    }

    /**
     * @param mixed $espaco_rua
     */
    public function setEspacoRua($espaco_rua)
    {
        $this->espaco_rua = $espaco_rua;
    }

    /**
     * @return mixed
     */
    public function getDataLimiteExpo()
    {
        return $this->data_limite_expo;
    }

    /**
     * @param mixed $data_limite_expo
     */
    public function setDataLimiteExpo($data_limite_expo)
    {
        $this->data_limite_expo = $data_limite_expo;
    }


}//fim da class