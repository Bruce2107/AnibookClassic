<?php
$css = "./css/logado.css";
$sair = "<li><a href=\"logout.php\"><i class=\"fas fa-door-open\"></i>Sair</a></li>";
include '../AreaTestes/dao.php';
$fado = new dao();
include_once "navbar.php";
include_once "tabela1.php";
include_once "footer.php";