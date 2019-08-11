<?php
/**
 * Created by PhpStorm.
 * User: eduar
 * Date: 10/08/2019
 * Time: 16:17
 */

class AlunoDados
{
    private $id,$nome,$faltas,$compensadas,$compensar,$ativo,$aulasPrevistas,$aulasDadas;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getFaltas()
    {
        return $this->faltas;
    }

    /**
     * @return mixed
     */
    public function getCompensadas()
    {
        return $this->compensadas;
    }

    /**
     * @return mixed
     */
    public function getCompensar()
    {
        return $this->compensar;
    }

    /**
     * @return mixed
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * @return mixed
     */
    public function getAulasPrevistas()
    {
        return $this->aulasPrevistas;
    }

    /**
     * @return mixed
     */
    public function getAulasDadas()
    {
        return $this->aulasDadas;
    }

    /**
     * AlunoDados constructor.
     * @param $id
     * @param $nome
     * @param $faltas
     * @param $compensadas
     * @param $compensar
     * @param $ativo
     * @param $aulasPrevistas
     * @param $aulasDadas
     */
    public function __construct($id, $nome, $faltas, $compensadas, $compensar, $ativo, $aulasPrevistas, $aulasDadas)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->faltas = $faltas;
        $this->compensadas = $compensadas;
        $this->compensar = $compensar;
        $this->ativo = $ativo;
        $this->aulasPrevistas = $aulasPrevistas;
        $this->aulasDadas = $aulasDadas;
    }

}