<?php
session_start();
include_once "../AreaTestes/dao.php";
$fdao = new dao();
$botao = $_POST['botao'];
if($botao == "Lançar"){
    $a = $_POST['presente'];
    $ad = $_POST['ad'];
    $turma = $_POST['turma'];
    $qtdFaltas = 1;
    if($ad === 'on')
        $qtdFaltas = 2;
    $faltaram = [];
    $ultimo = $fdao->getUltimo($_SESSION['user'].$turma);
    for($i = 1; $i <= $ultimo;$i++){
        if(!in_array($i,$a))
            $faltaram[$i] = 1;
        else
            $faltaram[$i] = 0;
    }
    for ($i = 1;$i <= $ultimo;$i++){
        if(!$fdao->LancarFaltas($i,$faltaram[$i],$_SESSION['user'].$turma,$qtdFaltas,$qtdFaltas))
            echo "erro<br>";
    }
    header("location:logado.php?t=".$turma."&e=sucessoLancar");
}elseif ($botao == "Compensar"){
    if($fdao->Compensar($_SESSION['user'].$_POST['turma']))
        header('location:logado.php?v=edi&e=sucessoCompensar&t='.$_POST['turma']);

}elseif ($botao == "Excluir Turma"){
    if($fdao->ApagarTurma($_SESSION['user'].$_POST['turma']))
        header('location:logado.php?v=edi&e=sucessoExclusao');
}elseif ($botao == "Criar Turma"){
    $turma = $_POST['nomeTurma'];
    if($fdao->CriarTurma($_SESSION['user'],$turma))
        header('location:logado.php?v=gtu&e=sucessoCriacao&t='.$turma);
}elseif ($botao == "Inserir Aluno"){
    $nome = $_POST['nome'];
    $comp = $_POST['comp'];
    $faltas = $_POST['faltas'];
    if(isset($_POST['turma']))
        $turma = $_POST['turma'];
    else
        $turma = $fdao->getPrimeiraTabela($_SESSION['user']);
    $tabela = $_SESSION['user'].$turma;
    $ad = $ap = 0;
    if($fdao->QtdRegistros($tabela) > 0){
        $prevdada = $fdao->getDadasPrev($tabela);
        $ad = $prevdada[1];
        $ap = $prevdada[0];
    }
    $aluno = new AlunoDados(0,$nome,$faltas,$comp,0,1,$ap,$ad);
    if($fdao->InsereAluno($tabela,$aluno))
        header('location:logado.php?v=gtu&e=sucessoInsercao&t='.$turma);
}elseif ($botao == "Salvar"){
    if(isset($_POST['turma']))
        $turma = $_POST['turma'];
    else
        $turma = $fdao->getPrimeiraTabela($_SESSION['user']);
    $tabela = $_SESSION['user'].$turma;
    $nome = $_POST['nome'];
    $comp = $_POST['comp'];
    $faltas = $_POST['faltas'];
    $ra = $_POST['id'];
    $ativo = 0;
    if($_POST['ativo'] == 'on')
        $ativo = 1;

    echo $tabela." Tabela<br>";
    echo $turma." Turma<br>";
    echo $nome." Nome<br>";
    echo $comp." Comp<br>";
    echo $ra." RA<br>";
    echo $faltas." Faltas<br>";
    echo $ativo." Ativo<br>";

    /*if($fdao->Salvar($aluno,$tabela))
        header('location.php?v=edi&e=sucessoInsercao&t='.$turma);*/
}
