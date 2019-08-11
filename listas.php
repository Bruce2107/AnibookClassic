<?php $css="listas";include('nav.php');?>
    <main>
        <div class="cards">
            <?php
                include("banco.php");
                function criarCard($link,$nome){
                    return '<div class="card"><div class="layer"></div><div class="conteudo"><div class="imagem"><a><img src="'.$link.'" alt="'.$nome.'"></a></div><br></div></div>';
                }
                #Conctar com o banco 194.5.156.22
                /*try{
                    $pdo = new PDO('mysql:host=localhost;dbname=u906779196_pagin;charset=utf8;','u906779196_eduar','RkM9Jt1mcdN9');
                    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                }catch(PDOException $e){
                    echo 'Erro ao conectar ao Banco de Dados: '.$e->getMessage()."<br>";
                }*/
                #Definicoes
                $pag_atual = filter_input(INPUT_GET,"pagina",FILTER_SANITIZE_NUMBER_INT);
                $pag = (!empty($pag_atual)) ? $pag_atual : 1;
                $qtd_por_pag = 6;
                $inicio = ($qtd_por_pag * $pag) - $qtd_por_pag;
                #Busca dados
                $command = "SELECT * FROM $titulo LIMIT $inicio,$qtd_por_pag";
                try{
                    $resultado = $pdo->query($command);
                    while($row = $resultado->fetch()){
                        echo criarCard($row['link'],$row['nome']);
                    }
                }catch(PDOException $e){echo "O erro: ".$e->getMessage()." está impedindo o seu divertimento";}
            ?>
        </div>
        <div class="pagination">
            <?php
                $sqlContador = "SELECT COUNT(*) AS num FROM $titulo";
                try{
                $stm = $pdo->prepare($sqlContador);
                $stm->execute();
                $valor = $stm->fetch(PDO::FETCH_OBJ);
                $qtd_pg = ceil($valor->num/$qtd_por_pag);
                $max_link = 2;
                $link = lcfirst($titulo);

                for($pag_ant = $pag - $max_link; $pag_ant <= $pag - 1; $pag_ant ++){
                    if($pag_ant >=1)
                        echo "<a href='$link.php?pagina=$pag_ant'>$pag_ant </a>";
                }
                echo "<a href='#'>$pag</a>";
                for($pag_dps = $pag + 1; $pag_dps <= $pag + $max_link; $pag_dps ++){
                    if($pag_dps <= $qtd_pg)
                        echo "<a href='$link.php?pagina=$pag_dps'>$pag_dps </a>";
                }}catch (PDOException $e){echo "Erro: ".$e->getMessage();}
            ?>
        </div>
    </main>


<?php $js="listas";include('rodape.php');?>