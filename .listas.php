<?php $css="listas";include('nav.php');?>
    <main>
        <div class="cards">
            <?php
            function criarCard($link,$nome){
                return '<div class="card"><div class="layer"></div><div class="conteudo"><div class="imagem"><a><img src="'.$link.'" alt="'.$nome.'"></a></div><br></div></div>';
            }
            #conectar
            $host = "localhost";
            $user = "u906779196_eduar";
            $db = "u906779196_pagin";
            $pass = "RkM9Jt1mcdN9";

            $con = mysqli_connect($host,$user,$pass,$db);
            if(!$con)
                die("Falha ao conectar" . mysqli_connect_error());
            #definicoes
            $pag_atual = filter_input(INPUT_GET,"pagina",FILTER_SANITIZE_NUMBER_INT);
            $pag = (!empty($pag_atual)) ? $pag_atual : 1;
            $qtd_por_pag = 6;
            $inicio = ($qtd_por_pag * $pag) - $qtd_por_pag;
            #comandos sql
            $command = "SELECT * FROM $titulo LIMIT $inicio,$qtd_por_pag";
            $result = mysqli_query($con,$command);

            while($row_card = mysqli_fetch_assoc($result)){
                echo criarCard($row_card['link'],$row_card['nome']);
            }


            ?>
        </div>
        <div class="pagination">
            <?php
                #paginacao
                $result_pg = "SELECT COUNT(id) AS num FROM $titulo";
                $result2_pg = mysqli_query($con,$result_pg);
                $row_pg = mysqli_fetch_assoc($result2_pg);

                $qtd_pg = ceil($row_pg['num']/$qtd_por_pag);
                $max_link = 2;
                $link = lcfirst($titulo);
                //echo "<a href='$link.php?pagina=1'>Inicio </a>";
                for($pag_ant = $pag - $max_link; $pag_ant <= $pag - 1; $pag_ant ++){
                    if($pag_ant >=1)
                        echo "<a href='$link.php?pagina=$pag_ant'>$pag_ant </a>";
                }
                echo "<a href='#'>$pag</a>";
                for($pag_dps = $pag + 1; $pag_dps <= $pag + $max_link; $pag_dps ++){
                    if($pag_dps <= $qtd_pg)
                        echo "<a href='$link.php?pagina=$pag_dps'>$pag_dps </a>";
                }
                //echo "<a href='$link.php?pagina=$qtd_pg'> Final</a>";
                mysqli_close($con);
                ?>
        </div>
    </main>


<?php $js="listas";include('rodape.php');?>