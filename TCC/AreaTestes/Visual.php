<?php
include_once 'dao.php';
include_once "Aluno.php";
include_once "SalvarFalta.php";
$fdao = new dao();

//Funcionando
/*$a23 = $fdao->Listar_AlunosLF("47535061850turma1");
echo "<table border='1px'><tr><th>ID</th><th>Nome</th><th>Presente</th><th>Faltas AC</th></tr>";
foreach ($a23 as $a1){
    //$a1->iterateVisible();
    //echo $a1->getId()."<br>";
    echo "<tr><td>".$a1->getId()."</td>";
    echo "<td>".$a1->getNome()."</td>";
    echo "<td><input type='checkbox' value='".$a1->getId()."'></td>";
    echo "<td>".$a1->getFaltas()."</td></tr>";
}
echo "</table>";*/

//Funcionando
/*$sf = new SalvarFalta(1,false);
if($fdao->LancarFaltas($sf,"47535061850turma1",1,1))
    echo "sucesso";
else "erro";*/

//Funcionando
/*$turmas = $fdao->Tabelas("47535061850");
foreach($turmas as $a){
    if(is_array($a)){
        //echo "Turma: ".$a[0]."<br>";
        //Usar explode
        $b = explode("47535061850",$a[0]);
        echo "Turma: ".$b[1]."<br>";
    }
}*/


//Funcionando

/*$a23 = $fdao->Listar_AlunoEF("47535061850turma1");

echo "<table border='1px'><tr><th>ID</th><th>Nome</th><th>Faltas</th><th>Compensadas</th><th>Compensar</th><th>Ativo</th><th>Editar</th></tr>";
foreach ($a23 as $a){
    echo "<tr><td>".$a->getId()."</td>";
    echo "<td>".$a->getNome()."</td>";
    echo "<td>".$a->getFaltas()."</td>";
    echo "<td>".$a->getCompensadas()."</td>";
    echo "<td>".$a->getCompensar()."</td>";
    echo "<td>".$a->getAtivo()."</td>";
    echo "<td><input type='button' value='Editar'></td></tr>";
}
echo "</table>";*/
//Funcionado
/*
$aluno = new AlunoDados(1,"Eduardo",4,0,null,1,null,null);
if($fdao->Salvar($aluno,"47535061850turma3"))
    echo "Dados altarados";
else echo "Erro ao atualizar";*/
//Funcionando
/*
if($fdao->ApagarTurma("12457896300Eja_1"))
    echo "Apagada";
else echo "Nao apagada";*/

//Funcionando
/*
if($fdao->Compensar("47535061850turma3"))
    echo "Compendas";
else
    echo "nao compensadas";*/
//Funcionando
/*
if($fdao->CriarTurma("12457896300",'turma1'))
    echo "Turma criada com sucesso";
else echo "Erro ao criar a turma";*/

//Funcionando
//echo $fdao->QtdRegistros("12457896300turma1");
//Funcionando
/*$vetor = $fdao->getDadasPrev("47535061850turma1");
echo "Dadas: ".$vetor[1];
echo "<br>Previstas: ".$vetor[0];*/
$aluno = new AlunoDados(0,"Eduardo",0,0,0,1,45,20);
if($fdao->InsereAluno("12457896300turma1",$aluno))
    echo "Sucesso";
else
    echo "Erro";