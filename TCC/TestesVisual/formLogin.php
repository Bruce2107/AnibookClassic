<?php
session_start();
$cpfSalvo = "";
if(isset($_SESSION['lembrar'])){
    $cpfSalvo = $_SESSION['lembrar'];
    $chek = "checked";
}
?>
<main>
    <div class="formLogin">
        <form action="validaLogin.php" method="post">
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input class="form-control" type="text" name="cpf" id="cpf" value="<?php echo @$cpfSalvo ?>" required>
                <label for="senha">Senha:</label>
                <input class="form-control" type="password" name="senha" id="senha" required>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="lembrar" id="lembrar" <?php echo $chek?>>
                <label for="lembrar" class="form-check-label">Lembrar CPF?</label>
            </div>
            <br>
            <button class="btn btn-secondary" type="submit">Enviar</button>
            <br><br>
            <?php
                echo @$_GET['m'];
            ?>
        </form>
    </div>
</main>