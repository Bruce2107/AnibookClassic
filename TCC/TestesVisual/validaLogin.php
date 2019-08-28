<?php
$m = "";
    if(strlen(trim($_POST['cpf']) == 0))
        $m = "<div class=\"alert alert-danger center\" role=\"alert\">Informe o CPF</div>";
    else
        if(!login($_POST['cpf'],$_POST['senha']))
            $m = "<div class=\"alert alert-danger center\" role=\"alert\">CPF ou SENHA inválido</div>";
        else
            if(isset($_POST['lembrar'])){
                session_start();
                $_SESSION['lembrar'] = $_POST['cpf'];
            }
header('location:pagina1.php?m='.$m);
/*<div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div>*/


function login($cpf,$senha){
    try{
        $pdo = new PDO('mysql:host=143.106.241.1;dbname=cl17115;charset=utf8;','cl17115','cl*21072001');
        $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $command = $pdo->prepare("select cpf, senha from professor where cpf=?");
        $command->bindParam(1,$cpf);
        $command->execute();
        $data = $command->fetch();
        $CPF = $data['cpf'];
        $SENHA = $data['senha'];
        if(password_verify($senha,$SENHA)){
            /*session_start();
            $_SESSION['user'] = $CPF;
            header('location:logado.php');*/
            return true;
        }
    }catch(PDOException $e){
        echo 'Erro ao conectar ao Banco de Dados: '.$e->getMessage()."<br>";
    }
    return false;
}
?>