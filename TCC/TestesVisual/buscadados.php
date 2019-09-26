<?php
    include_once "../AreaTestes/dao.php";
    session_start();
    $fdao = new dao();
    $voltar = $_GET['atual'];
    $ra = $_GET['ra'];

    if(isset($_GET['t']))
        $turma = $_GET['t'];
    else
        $turma = $fdao->getPrimeiraTabela($_SESSION['user']);

    $aluno = $fdao->dadosAluno($ra,$_SESSION['user'].$turma);
