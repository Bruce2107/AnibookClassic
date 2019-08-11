<?php
    function inserir($cpf,$rg,$nome,$email,$senha){
        try{
            $pdo = new PDO('mysql:host=143.106.241.1;dbname=cl17115;charset=utf8;','cl17115','cl*21072001');
            $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $command = $pdo->prepare("insert into professor (cpf,nome,email,rg,senha) VALUES (:cpf,:nome,:email,:rg,:senha)");
            $command->execute(array(':cpf' => $cpf,':nome' => $nome,':email' => $email,':rg' => $rg,':senha' => $senha));
            header('location:nav.php');
        }catch(PDOException $e){
            echo 'Erro ao conectar ao Banco de Dados: '.$e->getMessage()."<br>";
        }
    }
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
                session_start();
                $_SESSION['user'] = $CPF;
                header('location:logado.php');

            }else header('location:nav.php?msg=Login invalido');
        }catch(PDOException $e){
            echo 'Erro ao conectar ao Banco de Dados: '.$e->getMessage()."<br>";
        }
    }
    function criar($nome){
        try{
            $pdo = new PDO('mysql:host=143.106.241.1;dbname=cl17115;charset=utf8;','cl17115','cl*21072001');
            $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql = $pdo->prepare("CREATE TABLE ". $_SESSION['user'].$nome."(ID int(6) AUTO_INCREMENT PRIMARY KEY, nome varchar(70) not null, faltas int(11), compensadas int(11), cpf varchar(11), CONSTRAINT fk_professor FOREIGN KEY (cpf) REFERENCES professor (cpf))");
            $sql->execute();
        }catch(PDOException $e){echo $e->getMessage();}
    }