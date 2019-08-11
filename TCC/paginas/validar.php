<?php
    include "banco.php";
    if(empty($_POST['nome']) || empty($_POST['sobrenome']) || empty($_POST['email']) || empty($_POST['rg']) || empty($_POST['cpf']) || empty($_POST['senha1']) || empty($_POST['senha2'])){
        header('location: criarconta.php?msg=Preencha todos os campos');
    }
    else {
        $cpf = removePontos($_POST['cpf']);
        $rg = removePontos($_POST['rg']);
        $nome = $_POST['nome']." ".$_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha1'],PASSWORD_ARGON2I);
        inserir($cpf,$rg,$nome,$email,$senha);
    }
    function removePontos($a)
    {
        $ponto = array('.', '-');
        return str_replace($ponto, "", $a);
    }