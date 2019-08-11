<?php
    #conectar
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=u906779196_pagin;charset=utf8;','u906779196_eduar','RkM9Jt1mcdN9');
        $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo 'Erro ao conectar ao Banco de Dados: '.$e->getMessage()."<br>";
    }
