<?php
    $pdo = new PDO('mysql:host=143.106.241.1;dbname=cl17110','cl17110','cl*25102001');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $nomeJogo = $_GET['nomeJogo'];
    $pontuacao = $_GET['pontuacao'];
    $sql = $pdo->prepare("INSERT INTO rankingJogos(nome, pontuacao) VALUES (:nJ,:p)");
    $sql->bindParam(':nJ',$nomeJogo);
    $sql->bindParam(':p',$pontuacao);
    $sql->execute();