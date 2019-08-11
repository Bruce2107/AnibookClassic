<?php
if(isset($_GET['sair'])){
    session_start();
    session_destroy();
    header('location:nav.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../css/nav.css"> -->
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background: #e9e9e9;
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
        footer{
            position: relative;
            height: 200px;
            width: 100%;
            background: #00a5a7;
        }
        footer .section{
            width: 80%;
            margin-left: 10%;
            height: 100%;
        }
        footer .section .logor{
            float: left;
            padding: 20px;  
        }
        footer .section .textor{
            /* float: right; */
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }
    </style>
    <style>
        main{
            margin-top: 5%;
            width: 90%;
            margin-left: 5%;
            background: #f0f0f0;
            margin-bottom: 5%;
            border-radius: 3px;
            box-shadow: 0px 3px 5px 0px black;
        }
        main .section{
            display: flex;
        }
        main .section .bloco{
            padding: 25px;
            width: 75%;
            
        }
        main .section .login{
            /*grid-area: login;*/
            padding: 25px;
            display: inline-block;
        }
        main .section .login form{
            padding: 5px;
            text-align: center;
            overflow-wrap: break-word;
        }
        main .section .login form a{
            text-decoration: none;
            text-transform: capitalize;
            color: black;
            box-shadow: 0px .5px black;
        }
        /*main .section .login form a:hover{
            text-decoration: underline;
        }*/
        main .section .login form input{
            margin: 15px;
            height: 30px;
            width: 75%;
            padding: 5px;
            border: none;
            outline: none;
            border-radius: 2px;
        }
        main .section .login form input[type="text"], main .section .login form input[type="password"]{
            background: #bbbbbb
        }
        main .section .login form input:focus{
            background:#D3D3D3
        }
        main .section .login form input[type="submit"]{
            background: #8cc7ff;
            cursor: pointer;
            box-shadow: 0 10px 10px rgba(0,0,0,.4);
        }
        main .section .login form input[type="submit"]:hover{
            transform: scale(1.1);
            background-color: ;
        }
        main .section .login form span.msg{
            color: red;
            text-transform: capitalize;
        }
    </style>
    <style>
        @media (max-width: 992px){
            main .section{
                display: inline;
            }
            main .section .login{
                width: 80%;
            }
            main .section .bloco{
                width: 90%;
                padding: 10px;
            }

        }
    </style>
</head>
<body>
    <header>
        <div class="logo"><img src="../oie_transparent.pngi"></div>
        <nav>
            <ul>
                <li><a href="#"><i class="fas fa-plus-square"></i>Sobre</a></li>
                <li><a href="#"><i class="fas fa-envelope"></i>Contato</a></li> 
                <li><a href="#"><i class="fas fa-file-download"></i>Download</a></li>
                
            </ul>
        </nav>
        <div class="menu" alt="Menu"><i class="fas fa-bars"></i></div>
    </header>
    
    <main>
        <div class="section">
            <div class="bloco">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi voluptatem optio dolores laudantium sunt et placeat, dolor explicabo reiciendis, alias nam reprehenderit sequi doloribus aperiam fugiat libero itaque incidunt sit.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit sint beatae tempore, dicta atque itaque sed cumque autem expedita placeat? Rem, laboriosam minus? Quae corporis quam quis ea explicabo dolorem!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae asperiores repudiandae, natus incidunt quos mollitia dolore beatae doloremque! Debitis quod nemo, inventore voluptas doloremque sequi earum maxime consectetur iure praesentium.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus sint accusantium aliquid soluta deserunt, veritatis sed doloremque quas, consectetur deleniti provident iusto. Mollitia facilis earum, iusto nostrum voluptates quod? Reprehenderit.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, recusandae modi veritatis incidunt laboriosam nesciunt voluptate voluptatem corporis itaque nisi esse cumque voluptates ratione eaque tenetur labore ipsum natus at.                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi voluptatem optio dolores laudantium sunt et placeat, dolor explicabo reiciendis, alias nam reprehenderit sequi doloribus aperiam fugiat libero itaque incidunt sit.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit sint beatae tempore, dicta atque itaque sed cumque autem expedita placeat? Rem, laboriosam minus? Quae corporis quam quis ea explicabo dolorem!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae asperiores repudiandae, natus incidunt quos mollitia dolore beatae doloremque! Debitis quod nemo, inventore voluptas doloremque sequi earum maxime consectetur iure praesentium.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus sint accusantium aliquid soluta deserunt, veritatis sed doloremque quas, consectetur deleniti provident iusto. Mollitia facilis earum, iusto nostrum voluptates quod? Reprehenderit.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, recusandae modi veritatis incidunt laboriosam nesciunt voluptate voluptatem corporis itaque nisi esse cumque voluptates ratione eaque tenetur labore ipsum natus at.                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi voluptatem optio dolores laudantium sunt et placeat, dolor explicabo reiciendis, alias nam reprehenderit sequi doloribus aperiam fugiat libero itaque incidunt sit.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit sint beatae tempore, dicta atque itaque sed cumque autem expedita placeat? Rem, laboriosam minus? Quae corporis quam quis ea explicabo dolorem!
            </div>
            <div class="login">
                <form action="login.php" method="POST">
                    <input type="text" name="cpf" placeholder="Usuário">
                    <input type="password" name="senha" placeholder="Senha">
                    <input type="submit" value="Entrar">
                    <br>
                    <a href="criarconta.php">Criar conta</a>
                    <br><br>
                    <span class="msg"><?php echo @$_GET['msg'] ?></span>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="section">
            <div class="logor"><img src="../oie_transparent.pngi"></div>
            <div class="textor">
                <b>Alisson Ramos <br> Eduardo Henrique <br> Victor Reche <br> Wendel Mugnaini</b>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
        $('.menu').click(function(){
            $('nav').toggleClass('active')
        })
    </script>
</body>
</html>