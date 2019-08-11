<?php
include_once "Aluno.php";
    function Conecta(){
        try{
            $pdo = new PDO('mysql:host=143.106.241.1;dbname=cl17115;charset=utf8;','cl17115','cl*21072001');
            $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch(PDOException $e){
            echo 'Erro ao conectar ao Banco de Dados: '.$e->getMessage()."<br>";
        }
    }
    function Lista(){
        $pdo = Conecta();
        $stmt = $pdo->prepare("select * from 47535061850turma1 WHERE ativo = 1 ORDER BY nome");
        $arrayAlunos = [];
        try{
            $stmt->execute();
            while ($dados = $stmt->fetch()){
                //echo $dados['id']." - ".$dados['nome']." - ".$dados['faltas']."<br>";
                $aluno = ["id" => $dados['id'],"nome" => $dados['nome'],"faltas" =>$dados['faltas']];
                //print_r($aluno);echo "<br>";
                $arrayAlunos[$dados['id']] = $aluno;
            }
        }catch (PDOException $e){}
        return $arrayAlunos;
    }
    function ListaObjeto(){
        $pdo = Conecta();
        $stmt = $pdo->prepare("select * from 47535061850turma1 WHERE ativo = 1 ORDER BY nome");
        $array = [];
        try{
            $stmt->execute();
            while ($dados = $stmt->fetch()){
                $aluno = new Aluno($dados['nome'],$dados['id'],$dados['faltas']);
                $array[$dados['id']] = $aluno;
            }
        }catch (PDOException $e){}
        return $array;
}