<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 08/08/2019
 * Time: 11:14
 */

class SalvarFalta
{
    private $id,$presente;

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
    public function getPresente()
    {
        return $this->presente;
    }

    /**
     * SalvarFalta constructor.
     * @param $id
     * @param $presente
     */
    public function __construct($id, $presente)
    {
        $this->id = $id;
        $this->presente = $presente;
    }

}