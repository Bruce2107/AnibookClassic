<?php $css='conteudo';include('nav.php');?>

    <main>
        <div class="container">
            <div class="textos" id="topo">
                <div class="info"><a id="descer">Informações</a></div>
                <div>
                    <span class="titulo" alt="Sinopse">Sinopse</span>
                    <br><br>
                    <?php echo $sinopse?>
                    <br>
                    <span class="fonte">Sinopse feito por <a href="<?php echo $site_sinopse?>"><?php echo $nome_site?></a><?php echo @$sinopse_extra?></span>
                </div>
                <hr>
                <div>
                    <span class="titulo" alt="Personagens">Personagens</span>
                    <br><br>
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
                            <span alt="Músicas"><i class="fas fa-music"></i></span>
                            <div class="box">
                                <h1>Músicas</h1>
                                <p id="musicas"><?php echo $musicas?></p>
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
            <div class="card animes">
                <img src="<?php echo $imagem_card?>" alt="<?php echo $titulo?>">
                <div class="content">
                    <h5 class="Anime"><?php echo $titulo?></h5>
                    <p><b>Gênero:</b> <?php echo $genero?></p>
                    <hr>
                    <p class="Anime">Original</p>
                    <p><b>Autor:</b> <?php echo $autor?></p>
                    <p><b>Material Original:</b> <?php echo $tipo?></p>
                    <p><b>Editora:</b> <?php echo $editora?></p>
                    <p><b>Capitúlos:</b> <?php echo $capitulos?></p>
                    <p><b>Volumes:</b> <?php echo $volumes?></p>
                    <hr>
                    <p class="Anime">Anime</p>
                    <p><b>Direção:</b> <?php echo $direcao?></p>
                    <p><b>Estúdio:</b> <?php echo $estudio?></p>
                    <p><b>Duração:</b> <?php echo $duracao?></p>
                    <p><b>Temporadas:</b> <?php echo $temporadas?></p>
                </div>
                <div class="video">
                    <iframe width="853" height="480" src="<?php echo $video?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div> 

        <div class="card" id="info">
            <img src="<?php echo $imagem_card?>" alt="<?php echo $titulo?>">
            <div class="content">
                <h5 class="Anime"><?php echo $titulo?></h5>
                <p><b>Gênero:</b> <?php echo $genero?></p>
                <hr>
                <p class="Anime">Original</p>
                <p><b>Autor:</b> <?php echo $autor?></p>
                <p><b>Material Original:</b> <?php echo $tipo?></p>
                <p><b>Editora:</b> <?php echo $editora?></p>
                <p><b>Capitúlos:</b> <?php echo $capitulos?></p>
                <p><b>Volumes:</b> <?php echo $volumes?></p>
                <hr>
                <p class="Anime">Anime</p>
                <p><b>Direção:</b> <?php echo $direcao?></p>
                <p><b>Estúdio:</b> <?php echo $estudio?></p>
                <p><b>Duração:</b> <?php echo $duracao?></p>
                <p><b>Temporadas:</b> <?php echo $temporadas?></p>
            </div>
            <div class="video">
                <iframe width="853" height="480" src="<?php echo $video?>" frameborder="0" allowfullscreen></iframe>
            </div>
            <!-- <div class="info"><a id="subir">Topo</a></div> -->
        </div>

    </main>

<?php $js='conteudo';include('rodape.php');?>
<!-- 
$titulo = '';
$sinopse = '';
$site_sinopse = '';
$nome_site = '';
$sinopse_extra = '';
$personagens = '';
$avaliacao = '';
$curiosidades = '';
$spoilers = '';
$musicas = '';
$personagens_favoritos = '';
$imagens = '';
$imagem_card = '';
$genero = '';
$autor = '';
$tipo = '';
$editora = '';
$capitulos = '';
$volumes = '';
$direcao = '';
$estudio = '';
$duracao = '';
$temporadas = '';
$video = ''; 


<div class="personagem">
    <span class="nome"></span>
    <br><br>
    <img src="" alt="">
    <span>
    </span>
</div>
<div class="clear"></div>

-->