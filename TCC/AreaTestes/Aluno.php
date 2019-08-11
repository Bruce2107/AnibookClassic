<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 08/08/2019
 * Time: 10:25
 */

class Aluno
{
    private $nome,$id,$faltas;

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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFaltas()
    {
        return $this->faltas;
    }

    /**
     * Aluno constructor.
     * @param $nome
     * @param $id
     * @param $faltas
     */
    public function __construct($nome, $id, $faltas)
    {
        $this->nome = $nome;
        $this->id = $id;
        $this->faltas = $faltas;
    }
    function iterateVisible(){
        foreach ($this as $key => $value) {
            print "$key => $value\n";
        }
    }
}