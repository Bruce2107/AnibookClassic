<?php $css='conteudo';include('nav.php');?>

    <main>
        <div class="container">
            <div class="textos" id="topo">
                <div class="info"><a href="#info">Informacoes</a></div>
                <div>
                    <span class="titulo" alt="Sinopse">Sinopse</span>
                    <br><br>
                    <?php echo $sinopse?>
                    <br>
                    <span class="fonte">Sinopse feito pelo site <a href="<?php echo $site_sinopse?>"><?php echo $nome_site?></a></span>
                </div>
                <hr>
                <div>
                    <span class="titulo" alt="Personagens">Personagens</span>
                    <?php echo $personagens?>
                </div>
                <hr>
                <div>
                    <span class="titulo" alt="Impressões">Impressões</span>
                    <br><br>
                    <?php echo $avaliacao?>
                </div>
                <hr>
                <div class="accordion">
                    <ul id="accordion">
                        <li>
                            <span class="active" alt="Curiosidades"><i class="fas fa-plus"></i></span>
                            <div class="box active">
                                <h1>Curiosidades</h1>
                                <p><?php echo $curiosidades?></p>
                            </div>
                        </li>
                        <li>
                            <span alt="Spoilers"><i class="fas fa-exclamation-triangle"></i></span>
                            <div class="box">
                                <h1>Spoilers</h1>
                                <p><?php echo $spoilers?></p>
                            </div>
                        </li>
                        <li>
                            <span alt="Personagens Favoritos"><i class="fab fa-optin-monster"></i></span>
                            <div class="box">
                                <h1>Personagens Favoritos</h1>
                                <p><?php echo $personagens_favoritos?></p>
                            </div>
                        </li>
                        <li>
                            <span alt="Imagens"><i class="fas fa-images"></i></span>
                            <div class="box">
                                <h1>Imagens</h1>
                                <section id="fotos"><?php echo $imagens?></section>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card mangas">
                <img src="<?php echo $imagem_card?>" alt="<?php echo $titulo?>">
                <div class="content">
                    <h5 class="Anime"><?php echo $titulo?></h5>
                    <hr>
                    <p><b>Gênero:</b> <?php echo $genero?></p>
                    <p><b>Autor:</b> <?php echo $autor?></p>
                    <p><b>Material Original:</b> <?php echo $tipo?></p>
                    <p><b>Editora:</b> <?php echo $editora?></p>
                    <p><b>Capitúlos:</b> <?php echo $capitulos?></p>
                    <p><b>Volumes:</b> <?php echo $volumes?></p>
                </div>
            </div>
        </div> 
    
        <div class="card" id="info">
            <img src="<?php echo $imagem_card?>" alt="<?php echo $titulo?>">
            <div class="content">
                <h5 class="Anime"><?php echo $titulo?></h5>
                <hr>
                <p><b>Gênero:</b> <?php echo $genero?></p>
                <p><b>Autor:</b> <?php echo $autor?></p>
                <p><b>Material Original:</b> <?php echo $tipo?></p>
                <p><b>Editora:</b> <?php echo $editora?></p>
                <p><b>Capitúlos:</b> <?php echo $capitulos?></p>
                <p><b>Volumes:</b> <?php echo $volumes?></p>
            <!-- <div class="info"><a href="#topo">Topo</a></div> -->
        </div>
    
    </main>

<?php $js='conteudo';include('rodape.php');?>
