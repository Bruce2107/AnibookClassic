<?php
    $pdo = new PDO('mysql:host=143.106.241.3;dbname=cl17110','cl17110','cl*25102001');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = $pdo->query("SELECT * FROM rankingJogos");
    $arrayJSON = array();
    while ($info = $sql->fetch()){
        $arrayJSON[] = $info;
    }
    $arrayJSON2 = json_encode($arrayJSON,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_SLASHES);
    echo $arrayJSON2;