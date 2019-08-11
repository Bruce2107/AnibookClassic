<?php
    session_start();
    if(empty($_SESSION['user']))
        header('Location:nav.php');
    if(isset($_GET['t'])){
        if(criar($_GET['t'])){
            echo "oi";
        }else echo 'a';
    }
    if(isset($_GET['msg'])){
        if($_GET['msg'] == 'lancar')
            $conteudo = "lancar.html";
        if($_GET['msg'] == 'editar')
            $conteudo = "editar.html";
        if($_GET['msg'] == 'gerar')
            $conteudo = "gerar.html";
        if($_GET['msg'] == 'gerenciar')
            $conteudo = "gerenciar.html";
    }else $conteudo = "lancar.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background: rgba(68,68,68,.5);
        }
        header{
            width: 100%;
            background: #5fbde1;
            box-shadow: 0 10px 10px rgba(0,0,0,.4);
            box-sizing: border-box;
            height: 50px;
            overflow: hidden;
        }
        .logo{
            float: left;
            height: 50px;
            width: 75px;
        }
        .logo > img{
            height: 40px;
            width: 65px;
            padding-top: 5px;
        }
        nav{
            text-align: center;
            float: right;
        }
        nav > ul{
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        nav > ul > li{
            width: 150px;
            position: relative;
            text-transform: uppercase;
            box-sizing: border-box;
            display: inline-block;
        }
        nav > ul > li > a{
            font: 1em Impact, fantasy;
            color: black;
            font-weight: bolder;
            text-decoration: none;
            letter-spacing: 2px;
            line-height: 50px;
        }
        nav > ul > li > a > i{
            color: #ff0000;
            margin-right: 2px;
        }
        nav > ul > li > a:hover{
            text-decoration: underline;
        }
        nav > ul > li:hover{
            background-color: rgba(255,250,255,.7)
        }
        .menu{
            font-size: 24px;
            cursor: pointer;
            display: none;
        }
        .menu i{
            color: #ff0000;
            line-height: 50px;
        }
        @media (max-width: 991px){
            header{
                padding: 0 20px;
            }
            .menu{
                float: right;
                display: block;
            }
            nav{
                position: absolute;
                width: 60%;
                height: calc(100vh - 50px);
                top: 50px;
                left: -150%;
                transition: 0.5s;
                background-color:rgba(64, 196, 255,.6);
                border: 1px #c0c0c0 solid;
            }
            nav > ul{
                display: inline-grid;
                transition: 0.5s;
                text-align: center;
                justify-content: center;
                align-items: center;
                padding-top: 120px;

            }
            nav > ul > li:hover{
                background: none;
            }
            nav.active{
                left: 0%;
            }
        }
    </style>
    <style>
        main{
            height: 100vh;
            width: 100%;
            margin-top: 3.5%;
        }
        main .menu-opcoes{
            height: calc(100% - (50px + 5%));
            width: 20%;
            float: left;
            background: rgba(240,248,255,0.4);
        }
        main .tela-ativa{
            height: calc(100% - (50px + 5%));
            width: 80%;
            float: right;
            background: rgba(240, 248, 255, .4);
        }
        main .menu-opcoes ul{
            margin-top: 60.5%;
        }
        main .menu-opcoes ul > li{
            list-style: none;
            height: 40px;
            line-height: 40px;
            padding: 15px;
            text-transform: uppercase;
            background: rgba(0,0,0,.1);
            width: auto;
            border-bottom: 1px solid black;
            text-decoration: none;
            color: black;
        }
        main .menu-opcoes ul > li > a{
            text-decoration: none;
            color: black;
        }
        main .menu-opcoes ul > li > a:hover{
            text-decoration: underline;
        }
        main .menu-opcoes ul li:nth-last-child(1){
            border-bottom: none;
        }
    </style>
    <!-- Lançar Faltas-->
    <style>
    
        table { 
    width: 100%; 
    border-collapse: collapse; 
    }
    /* Zebra striping */
    tr:nth-of-type(odd) { 
    background: #eee; 
    }
    th { 
    background: #333; 
    color: white; 
    font-weight: bold; 
    }
    td, th { 
    padding: 6px; 
    border: 1px solid #ccc; 
    text-align: left; 
    }

    @media only screen and (max-width: 760px),(min-device-width: 768px) and (max-device-width: 1024px)  {
        .menu-opcoes{
            display: none;
        }
        /* Force table to not be like tables anymore */
        table, thead, tbody, th, td, tr { 
            display: block; 
        }
        
        /* Hide table headers (but not display: none;, for accessibility) */
        thead tr { 
            position: absolute;
            top: -9999px;
            left: -9999px;
        }
        
        tr { border: 1px solid #ccc; }
        
        td { 
            /* Behave  like a "row" */
            border: none;
            border-bottom: 1px solid #eee; 
            position: relative;
            padding-left: 50%; 
        }
        
        td:before { 
            /* Now like a table header */
            position: absolute;
            /* Top/left values mimic padding */
            top: 6px;
            left: 6px;
            width: 45%; 
            padding-right: 10px; 
            white-space: nowrap;
        }
        
        /*
        Label the data
        */
        td:nth-of-type(1):before { content: "Nome"; }
        td:nth-of-type(2):before { content: "Presente"; }
        td:nth-of-type(3):before { content: "Faltou"; }}
    </style>
    <style>
        main select{
            margin-top: 15px;
            margin-bottom: 15px;
            width: 150px;
        }
        main input[type="submit"]{
            margin-top: 15px;
            margin-left: calc(50% - 50px);
            width: 150px;
            height: 50px;
        }
        main .tela-ativa table tbody tr td input[type="radio"]{
            border: #ff0000;
        }
    </style>
    <style>
        main .tela-ativa table tbody tr td .inp{
            background: none;
            width: 20px;
            border: none;
        }
        main .tela-ativa table tbody tr td .inp:disabled{
            border: 2px solid black;
        }
    </style>
    <style>
    </style>
</head>
<body>
    <header>
        <div class="logo"><img src="../oie_transparent.png"></div>
        <nav>
            <ul>
                <li><a href="#"><i class="fas fa-plus-square"></i>Sobre</a></li>
                <li><a href="#"><i class="fas fa-envelope"></i>Contato</a></li> 
                <li><a href="#"><i class="fas fa-file-download"></i>Download</a></li>
                <li><a href="nav.php?sair=sim"><i class="fas fa-user"></i>Perfil <i class="fas fa-angle-down"></i></a>
                </li>
            </ul>
        </nav>
        <div class="menu" alt="Menu"><i class="fas fa-bars"></i></div>
    </header>

    <main>
            <div class="menu-opcoes">
                <ul>
                    <li><a href="#" onclick="incluir('lancar');">Lançar Faltas</a></li>
                    <li><a href="#" onclick="incluir('editar');">Editar Faltas</a></li>
                    <li><a href="#" onclick="incluir('gerar');">Gerar Relatório</a></li>
                    <li><a href="#" onclick="incluir('gerenciar');">Gerenciar Turmas</a></li>
                </ul>
            </div>
            <div class="tela-ativa">
                <?php include($conteudo);?>
            </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
        $('.menu').click(function(){
            $('nav').toggleClass('active')
        })
        $('input[value="Editar"]').on('click',function(){
            $("main .tela-ativa table tbody tr td .inp:disabled").removeAttr('disabled').removeClass('inp')
            $('main .tela-ativa').append('<input type="submit" value="Salvar" onclick="a()">')
            $(this).remove()
            // $('input[value="Lançar"]').remove();
        })
        function a(){
            $("main .tela-ativa table tbody tr td input").addClass('inp').attr('disabled','disabled')
            $('main .tela-ativa').append('<input type="submit" value="Editar" onclick="b()">')
            $('input[value="Salvar"]').remove()
        }
        function b(){
            $("main .tela-ativa table tbody tr td .inp:disabled").removeAttr('disabled').removeClass('inp')
            $('main .tela-ativa').append('<input type="submit" value="Salvar" onclick="a()">')
            $('input[value="Editar"]').remove()
        }
        $('input[value="Adicionar Turma"]').on('click',function(){
            let nome = prompt("Turma: ")
            //let turma = `<tr><td>${nome}</td><td><i class="fas fa-pencil-alt"></i></td><td><i class="fas fa-trash-alt"></i></td></tr>`
            //$('tbody').append(turma)
            window.location.assign(`logado.php?msg=gerenciar&t=${nome}`)
        })
        function incluir(nome){
            window.location.assign("logado.php?msg="+nome)
        }
    </script>
</body>
</html>