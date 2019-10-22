<?php
    $pdo = new PDO('mysql:host=143.106.241.3;dbname=cl17110','cl17110','cl*25102001');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $nomeJogo = $_GET['nomeJogo'];
    $pontuacao = $_GET['pontuacao'];
    $nomeJogador = $_GET['nomeJogador'];
    $sql = $pdo->prepare("INSERT INTO rankingJogos(nome, pontuacao,nomeJogador) VALUES (:n,:p,:nJ)");
    $sql->bindParam(':n',$nomeJogo);
    $sql->bindParam(':p',$pontuacao);
    $sql->bindParam(':nJ',$nomeJogador);
    $sql->execute();