<?php
    $titulo = "Titulo";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo @$css; ?>">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title><?php echo $titulo; ?></title>
</head>
<body>
<header>
    <div class="logo"><img src="../oie_transparent.pngi"></div>
    <nav>
        <ul>
            <li><a href="#"><i class="fas fa-envelope"></i>Contato</a></li>
            <li><a href="#"><i class="fas fa-file-download"></i>Download</a></li>
            <?php echo @$sair ?>
        </ul>
    </nav>
    <div class="menu" alt="Menu"><i class="fas fa-bars"></i></div>
</header>