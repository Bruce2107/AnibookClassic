<main>
    <div class="row">
        <div class="list-group col-sm-2">
            <?php
                $lan = $edi = $gtu = $gre = 'list-group-item-secondary';
            if($_GET['v'] === 'lan' || empty($_GET['v']))
                $lan = 'list-group-item-primary';
            elseif ($_GET['v'] === 'edi')
                $edi = 'list-group-item-primary';
            elseif ($_GET['v'] === 'gtu')
                $gtu = 'list-group-item-primary';
            elseif($_GET['v'] == 'gre')
                $gre = 'list-group-item-primary';
            ?>
            <a href="logado.php?v=lan" class="list-group-item <?php echo $lan?> list-group-item-action">Lançamento</a>
            <a href="logado.php?v=edi" class="list-group-item <?php echo $edi?> list-group-item-action">Editar Faltas</a>
            <a href="logado.php?v=gtu" class="list-group-item <?php echo $gtu?> list-group-item-action">Gerenciar Turma</a>
            <a href="logado.php?v=gre" class="list-group-item <?php echo $gre?> list-group-item-action">Gerar Relatorio</a>
        </div>
        <div class="table-responsive-md col-sm-9">
            <form method="POST" action="view.php">
                <?php
                    include_once "gerarTabla.php";
                    if($_GET['v'] === 'lan' || empty($_GET['v']))
                        tabelaLancamento(); //Perguntar se quer lançar msm
                    elseif ($_GET['v'] === 'edi')
                        tabelaEdicao();
                    elseif ($_GET['v'] === 'gtu')
                        formularioGerenciamento('disabled');
                    elseif($_GET['v'] == 'gre')
                        echo "gerar relatorio";
                    if(isset($_GET['e']))
                        echo "<script>alert('".$_GET['e']."')</script>"
                ?>
            </form>
        </div>
    </div>

</main>