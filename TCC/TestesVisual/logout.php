<?php
session_start();
$_SESSION = array();
session_destroy();
header('location:pagina1.php');