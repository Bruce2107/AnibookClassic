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