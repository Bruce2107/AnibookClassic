<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 08/08/2019
 * Time: 11:03
 */
require_once "AlunoDados.php";
require_once "Aluno.php";
require_once "SalvarFalta.php";
class dao
{
    protected $pdo;
    function Conecta()
    {
        try {
            $this->pdo = new PDO('mysql:host=143.106.241.1;dbname=cl17115;charset=utf8;', 'cl17115', 'cl*21072001');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } catch (PDOException $e) {
            echo 'Erro ao conectar ao Banco de Dados: ' . $e->getMessage() . "<br>";
        }
        return null;
    }

    function Listar_AlunosLF($turma)
    {
        $this->pdo = Conecta();
        $stmt = $this->pdo->prepare("select * from $turma WHERE ativo = 1 ORDER BY nome");
        $array = [];
        try {
            $stmt->execute();
            while ($row = $stmt->fetch()){
                $idB = $row[0];
                $nomeB = $row[1];
                $faltasB = $row[2];
                $compensarB = $row[3];
                $ativoB = $row[4];
                $apB = $row[5];
                $adB = $row[6];
                $compensadasB = $row[7];
                $eduardo = new AlunoDados($idB,$nomeB,$faltasB,$compensadasB,$compensarB,$ativoB,$apB,$adB);
                $array[$idB] = $eduardo;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $array;
    }
    function LancarFaltas($pos,$sf, $turma, $falta, $AD){
        $this->pdo = $this->Conecta();
        if($sf == 0)
            $falta = 0;
        $sql = "update $turma set faltas = faltas + $falta, dadas = dadas + $AD where id = ".$pos;
        try{
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return true;
        }catch (PDOException $e){echo $e->getMessage();}
        return false;
    }
    function Tabelas($cpf){
        $this->pdo = $this->Conecta();
        $sql = "select table_name from INFORMATION_SCHEMA.tables where table_name like \"$cpf%\"";
        $lista = [];
        try{
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            while ($tabelas = $stmt->fetch()){
                array_push($lista,$tabelas);
            }
        }catch(PDOException $e){echo $e->getMessage();}

        //print_r($lista);
        return $lista;
    }
    function getPrimeiraTabela($cpf){
        $this->pdo = $this->Conecta();
        $sql = "select table_name from INFORMATION_SCHEMA.tables where table_name like \"$cpf%\"";
        $lista = [];
        try{
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            while ($tabelas = $stmt->fetch()){
                array_push($lista,$tabelas);
            }
        }catch(PDOException $e){echo $e->getMessage();}
        $b = explode($cpf,$lista[0][0]);
        return $b[1];
    }
    function Listar_Aluno($turma , $cond){
        $this->pdo = $this->Conecta();
        $sql = "select * from $turma ".$cond." order by nome";
        $stmt = $this->pdo->prepare($sql);
        $array =[];
        try{
            $stmt->execute();
            while ($row = $stmt->fetch()){
                $idB = $row[0];
                $nomeB = $row[1];
                $faltasB = $row[2];
                $compensarB = $row[3];
                $ativoB = $row[4];
                $apB = $row[5];
                $adB = $row[6];
                $compensadasB = $row[7];
                $eduardo = new AlunoDados($idB,$nomeB,$faltasB,$compensadasB,$compensarB,$ativoB,$apB,$adB);
                $array[$idB] = $eduardo;
            }
        }catch (PDOException $e){echo $e->getMessage();}

        return $array;
    }
    function Salvar($aluno,$turma){
        $this->pdo = $this->Conecta();
        $sql = "update $turma set nome = \"".$aluno->getNome()."\", faltas = ".$aluno->getFaltas().", ativo = ".$aluno->getAtivo().", compensadas = ".$aluno->getCompensadas()." where id = ".$aluno->getID();
        $stmt = $this->pdo->prepare($sql);
        try{
            $stmt->execute();
            return true;
        }catch (PDOException $e){echo $e->getMessage();}
        return false;
    }
    function ApagarTurma($turma){
        $this->pdo = $this->Conecta();
        $sql = "drop table $turma";
        $stmt = $this->pdo->prepare($sql);
        try{
            $stmt->execute();
            return true;
        }catch (PDOException $e){echo $e->getMessage();}
        return false;
    }
    function Compensar($turma){
        $this->pdo = $this->Conecta();
        $sql = "update $turma set compensar = faltas - (dadas*0.25) WHERE faltas/dadas > 0.25";
        $stmt = $this->pdo->prepare($sql);
        try{
            $stmt->execute();
            return true;
        }catch (PDOException $e){echo $e->getMessage();}
        return false;
    }
    function CriarTurma($cpf,$nome){
        $this->pdo = $this->Conecta();
        $sql = "create table ".$cpf.$nome."(id int not null AUTO_INCREMENT, nome varchar(45) not null,faltas int null,compensar int null,ativo bit null,previstas int not null,dadas int null,compensadas int not null, primary key (id))";
        $stmt = $this->pdo->prepare($sql);
        try{
            $stmt->execute();
            return true;
        }catch (PDOException $e){echo $e->getMessage();}
        return false;
    }
    function QtdRegistros($turma){
        $this->pdo = $this->Conecta();
        $sql = "select id from $turma";
        $stmt = $this->pdo->prepare($sql);
        try{
            $stmt->execute();
            return $stmt->rowCount();
        }catch (PDOException $e){echo $e->getMessage();}
        return null;
    }
    function getDadasPrev($turma){
        $this->pdo = $this->Conecta();
        $sql = "select previstas,dadas from $turma WHERE ativo = 1 limit 1";
        $array = [];
        $stmt = $this->pdo->prepare($sql);;
        try{
            $stmt->execute();
            while ($info = $stmt->fetch()){

                $array[0] = $info[0];
                $array[1] = $info[1];
            }
        }catch (PDOException $e){echo $e->getMessage();}
        return $array;
    }
    function InsereAluno($turma,$aluno){
        $this->pdo = $this->Conecta();
        $sql = "insert into ".$turma . "(nome,faltas,compensar,ativo,previstas,dadas,compensadas) values(:nome,:faltas,:compensar,:ativo,:previstas,:dadas,:compensadas)";
        $stmt = $this->pdo->prepare($sql);
        try{
            $stmt->bindParam(":nome",$aluno->getNome());
            $stmt->bindParam(":faltas",$aluno->getFaltas());
            $stmt->bindParam(":compensar",$aluno->getCompensar());
            $stmt->bindParam(":ativo",$aluno->getAtivo());
            $stmt->bindParam(":previstas",$aluno->getAulasPrevistas());
            $stmt->bindParam(":dadas",$aluno->getAulasDadas());
            $stmt->bindParam(":compensadas",$aluno->getCompensadas());
            $stmt->execute();
            return true;
        }catch(PDOException $e){echo $e->getMessage();}
        return false;
    }
    function getUltimo($turma){
        $this->pdo = $this->Conecta();
        $sql = "select max(id) from ".$turma;
        $stmt = $this->pdo->prepare($sql);
        try{
            $stmt->execute();
            while($info = $stmt->fetch()){
                return $info[0];
            }
        }catch (PDOException $e){echo $e->getMessage();}
        return null;
    }
    function dadosAluno($ra,$turma){
        $this->pdo = $this->Conecta();
        $sql = "select nome,faltas,compensadas,ativo from ".$turma." where id = ".$ra;
        $stmt = $this->pdo->prepare($sql);
        try{
            $stmt->execute();
            while($info = $stmt->fetch()){
                return $info;
            }
        }catch (PDOException $e){echo $e->getMessage();}
        return null;
    }
    function __destruct(){
        $this->pdo = null;
    }
}