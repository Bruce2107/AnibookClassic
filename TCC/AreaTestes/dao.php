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
    function Conecta()
    {
        try {
            $pdo = new PDO('mysql:host=143.106.241.1;dbname=cl17115;charset=utf8;', 'cl17115', 'cl*21072001');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Erro ao conectar ao Banco de Dados: ' . $e->getMessage() . "<br>";
        }
        return null;
    }

    function Listar_AlunosLF($turma)
    {
        $pdo = Conecta();
        $stmt = $pdo->prepare("select * from $turma WHERE ativo = 1 ORDER BY nome");
        $array = [];
        try {
            $stmt->execute();
            while ($dados = $stmt->fetch()) {
                $aluno = new Aluno($dados['1'], $dados['0'], $dados['2']);
                $array[$dados['id']] = $aluno;
            }
        } catch (PDOException $e) {
        }
        return $array;
    }
    function LancarFaltas($sf, $turma, $falta, $AD){
        $pdo = $this->Conecta();
        if($sf->getPresente())
            $falta = 0;
        $sql = "update $turma set faltas = faltas + $falta, dadas = dadas + $AD where id = ".$sf->getId();
        try{
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return true;
        }catch (PDOException $e){echo $e->getMessage();}
        return false;
    }
    function Tabelas($cpf){
        $pdo = $this->Conecta();
        $sql = "select table_name from INFORMATION_SCHEMA.tables where table_name like \"$cpf%\"";
        $lista = [];
        try{
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            while ($tabelas = $stmt->fetch()){
                array_push($lista,$tabelas);
            }
        }catch(PDOException $e){echo $e->getMessage();}

        //print_r($lista);
        return $lista;
    }
    function Listar_AlunoEF($turma){
        $pdo = $this->Conecta();
        $sql = "select * from $turma order by nome";
        $stmt = $pdo->prepare($sql);
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
        $pdo = $this->Conecta();
        $sql = "update $turma set nome = \"".$aluno->getNome()."\", faltas = ".$aluno->getFaltas().", ativo = ".$aluno->getAtivo().", compensadas = ".$aluno->getCompensadas()." where id = ".$aluno->getID();
        $stmt = $pdo->prepare($sql);
        try{
            $stmt->execute();
            return true;
        }catch (PDOException $e){echo $e->getMessage();}
        return false;
    }
    function ApagarTurma($turma){
        $pdo = $this->Conecta();
        $sql = "drop table $turma";
        $stmt = $pdo->prepare($sql);
        try{
            $stmt->execute();
            return true;
        }catch (PDOException $e){echo $e->getMessage();}
        return false;
    }
    function Compensar($turma){
        $pdo = $this->Conecta();
        $sql = "update $turma set compensar = faltas - (dadas*0.25) WHERE faltas/dadas > 0.25";
        $stmt = $pdo->prepare($sql);
        try{
            $stmt->execute();
            return true;
        }catch (PDOException $e){echo $e->getMessage();}
        return false;
    }
    function CriarTurma($cpf,$nome){
        $pdo = $this->Conecta();
        $sql = "create table ".$cpf.$nome."(id int not null AUTO_INCREMENT, nome varchar(45) not null,faltas int null,compensar int null,ativo bit null,previstas int not null,dadas int null,compensadas int not null, primary key (id))";
        $stmt = $pdo->prepare($sql);
        try{
            $stmt->execute();
            return true;
        }catch (PDOException $e){echo $e->getMessage();}
        return false;
    }
    function QtdRegistros($turma){
        $pdo = $this->Conecta();
        $sql = "select id from $turma";
        $stmt = $pdo->prepare($sql);
        try{
            $stmt->execute();
            return $stmt->rowCount();
        }catch (PDOException $e){echo $e->getMessage();}
        return null;
    }
    function getDadasPrev($turma){
        $pdo = $this->Conecta();
        $sql = "select previstas,dadas from $turma WHERE ativo = 1 limit 1";
        $array = [];
        $stmt = $pdo->prepare($sql);;
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
        $pdo = $this->Conecta();
        $sql = "insert into ".$turma . "(nome,faltas,compensar,ativo,previstas,dadas,compensadas) values(:nome,:faltas,:compensar,:ativo,:previstas,:dadas,:compensadas)";
        $stmt = $pdo->prepare($sql);
        try{
            $stmt->bindParam(":nome",$aluno->getNome());
            $stmt->bindParam(":faltas",$aluno->getFaltas());
            $stmt->bindParam(":compensar",$aluno->getCompensar());
            $stmt->bindParam(":ativo",$aluno->getAtivo());
            $stmt->bindParam(":previstas",$aluno->getAulasPrevistas());
            $stmt->bindParam(":dadas",$aluno->getAulasDadas());
            $stmt->bindParam(":compensadas",$aluno->getCompensar());
            $stmt->execute();
            return true;
        }catch(PDOException $e){echo $e->getMessage();}
        return false;
    }
}