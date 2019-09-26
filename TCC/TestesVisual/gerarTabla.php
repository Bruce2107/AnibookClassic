<?php
//http://www.devfuria.com.br/javascript/ajax-php-jquery/
include_once '../AreaTestes/dao.php';
include_once "../AreaTestes/Aluno.php";
include_once "../AreaTestes/SalvarFalta.php";
session_start();
if(empty($_SESSION['user']))
    header('location:pagina1.php');
function tabelaLancamento(){
    $fdao = new dao();
    if(isset($_GET['t']))
        $turma = $_GET['t'];
    else
    $turma = $fdao->getPrimeiraTabela($_SESSION['user']);
    $tabela = $_SESSION['user'].$turma;
    $a23 = $fdao->Listar_Aluno($tabela, " where ativo = 1");

    echo "<table class=\"table table-sm table-secondary table-hover table-bordered table-striped text-center\">
                    <thead><tr>
                        <th scope=\"col\">RA</th>
                        <th scope=\"col\">Nome</th>
                        <th scope=\"col\">Presente</th>
                        <th scope=\"col\">Faltas AC</th>
                    </tr>
                    </thead>
                    <tbody>";
    foreach ($a23 as $a) {
        echo "<tr scope='row'><th>" . $a->getId() . "</th>";
        echo "<td>" . $a->getNome() . "</td>";
        echo "<td><input type='checkbox' name='presente[" . $a->getId() . "]' value=" . $a->getId() . "></td>";
        echo "<td>" . $a->getFaltas() . "</td>";
        //echo "<td><i class=\"fas fa-edit fa-lg\"></i></td></tr>";
    }
    echo "</tbody></table>";
    echo '<div class="row text-center"><a class="col-sm-5"><select name="turma" class="custom-select mr-sm-2">';
    echo nomeTurmas();
    echo '</select></a>
                    <a class="col-sm-3"><input type="checkbox" name="ad"> Aula Dupla</a>
                    <a class="col-sm-4"><input type="submit" name="botao" value="Lançar" class="btn btn-secondary"></a>
                </div>';
}
function tabelaEdicao(){
    $fdao = new dao();
    if(isset($_GET['t']))
        $turma = $_GET['t'];
    else
        $turma = $fdao->getPrimeiraTabela($_SESSION['user']);
    $tabela = $_SESSION['user'].$turma;
    $a23 = $fdao->Listar_Aluno($tabela, "");
    formularioEdiacao('disabled','');
    echo "<table class=\"table table-sm table-secondary table-hover table-bordered table-striped text-center\">
                    <thead>
                    <tr>
                        <th scope=\"col\">RA</th>
                        <th scope=\"col\">Nome</th>
                        <th scope=\"col\">Faltas</th>
                        <th scope=\"col\">Compensar</th>
                        <th scope=\"col\">Compensadas</th>
                        <th scope=\"col\">Ativo</th>
                        <th scope=\"col\">Editar</th>

                    </tr>
                    </thead>
                    <tbody>";
    foreach ($a23 as $a) {
        echo "<tr scope='row'><th>" . $a->getId() . "</th>";
        echo "<td>" . $a->getNome() . "</td>";
        echo "<td>" . $a->getFaltas() . "</td>";
        echo "<td>" . $a->getCompensar() . "</td>";
        echo "<td>" . $a->getCompensadas() . "</td>";
        //echo "<td>" . $a->getAtivo() . "</td>";
        $ativo = "";
        if($a->getAtivo() == 1)
            $ativo = "checked";
        echo "<td><input type='checkbox' disabled name='presente[" . $a->getId() . "]' value='" . $a->getId() . "' ".$ativo."></td>";
        echo '<td><i class="fas fa-edit fa-lg clique" onclick=\'buscadados(' . $a->getId() .',"'. $a->getNome() .'",'.$a->getFaltas().','.$a->getCompensadas().',"'.$ativo.'")\'></i></td></tr>';
    }
    echo "</tbody></table>";
    echo '<div class="row text-center">
                    <a class="col-sm-5"><select name="turma" class="custom-select mr-sm-2">';
    echo nomeTurmas();
    echo '</select></a>
                    <a class="col-sm-4"><input type="submit" name="botao" value="Compensar" class="btn btn-secondary"></a>
                    <a class="col-sm-3"><input type="submit" name="botao" value="Excluir Turma" class="btn btn-secondary"></a>
                </div>';
}

function formularioGerenciamento($dis){
    $fdao = new dao();
    if(isset($_GET['t']))
        $turma = $_GET['t'];
    else
        $turma = $fdao->getPrimeiraTabela($_SESSION['user']);
    $tabela = $_SESSION['user'].$turma;
    $a23 = $fdao->Listar_Aluno($tabela, "");
    $ad = $ap = 0;
    if($fdao->QtdRegistros($tabela) > 0){
        $prevdada = $fdao->getDadasPrev($tabela);
        $ad = $prevdada[1];
        $ap = $prevdada[0];
    }
    if($ap == 0)
        $dis = "";
    echo "
        <div class='form-row align-items-center'>
            <div class='col-6'>
                <label for='criarTurma'>Criar Turma:</label>
                <input TYPE='text' id='criarTurma' name='nomeTurma' class='form-control' placeholder='Nome da turma'>
            </div>
            <div class='col-6'>
                <br>
                <input type='submit' class='btn btn-secondary' name='botao' value='Criar Turma'>
            </div>
        </div>";
    echo '<br><br><div class="row text-center">
                    <a class="col-sm-5"><select name="turma" class="custom-select mr-sm-2">';
    echo nomeTurmas();
    echo "</select></a></div><br>
        <div class=\"form-row align-item-center\">
            <div class=\"col-2 my-1\">
                <label for=\"nomeAluno\">Nome:</label>
                <input type='text' id='nomeAluno' name='nome' class=\"form-control\" size='1'>
            </div>
            <div class=\"col-2 my-1\">
                <label for=\"compensadasAluno\">Compensadas:</label>
                <input type='number' id='compensadasAluno' name='comp' class=\"form-control\" size='1'>
            </div>
            <div class=\"col-2 my-1\">
                <label for=\"faltasAluno\">Faltas:</label>
                <input type='number' id='faltasAluno' name='faltas' class=\"form-control\" size='1'>
            </div>
            <div class=\"col-2 my-1\">
                <label for=\"apAluno\">Aulas Previtas:</label>
                <input type='number' id='apAluno' name='ap' class=\"form-control\" size='1' $dis value='".$ap."'>
            </div>
            <div class=\"col-2 my-1\">
                <label for=\"adAluno\">Aulas Dadas:</label>
                <input type='number' id='adAluno' name='ad' class=\"form-control\" size='1' $dis value='".$ad."'>
            </div>
        </div>
        <br>
        <input type='submit' class='btn btn-secondary' value='Inserir Aluno' name='botao'>
    ";

    echo "<br><br><table class=\"table table-sm table-secondary table-hover table-bordered table-striped text-center\">
                    <thead><tr>
                        <th scope=\"col\">RA</th>
                        <th scope=\"col\">Nome</th>
                        <th scope=\"col\">Faltas AC</th>
                        <th scope=\"col\">Compensar</th>
                        <th scope=\"col\">Compensadas</th>
                    </tr>
                    </thead>
                    <tbody>";
    foreach ($a23 as $a) {
        echo "<tr scope='row'><th>" . $a->getId() . "</th>";
        echo "<td>" . $a->getNome() . "</td>";
        echo "<td>" . $a->getFaltas() . "</td>";
        echo "<td>" . $a->getCompensar() . "</td>";
        echo "<td>" . $a->getCompensadas() . "</td>";
    }
    echo "</tbody></table>";
}
function nomeTurmas(){
    $fdao = new dao();
    $t = '';
    $selected = $_GET['t'];
    $turmas = $fdao->Tabelas($_SESSION['user']);
    foreach($turmas as $a){
        if(is_array($a)){
            $b = explode($_SESSION['user'],$a[0]);
            if($selected === $b[1])
                $t .= "<option value='$b[1]' selected>".$b[1]."</option>";
            else
                $t .= "<option value='$b[1]'>".$b[1]."</option>";
        }
    }
    return $t;
}

function formularioEdiacao($dis,$check){
    echo "
    <div class=\"form-row align-items-center\">
        <div class=\"col-2 my-1\">
            <label for=\"idAluno\">RA:</label>
            <input type='text' id='idAluno' name='id' class=\"form-control\" size='1' $dis readonly>
        </div>
        <div class=\"col-6 my-1\">
            <label for=\"nome\">Nome:</label>
            <input type='text' id='nome' name='nome' class=\"form-control\" size='20' $dis>
        </div>
        <div class=\"col-2 my-1\">
            <label for=\"faltas\">Faltas:</label>
            <input type='number' id='faltas' name='faltas' class=\"form-control\" size='1' $dis>
        </div>
        <div class=\"col-2 my-1\">
            <label for=\"comp\">Compensadas:</label>
            <input type='number' id='comp' name='comp' class=\"form-control\" size='1' $dis>
        </div>
    </div>
    <div class=\"form-row align-items-center center\">
        <div class=\"col-4 my-1\"></div>
        <div class=\"col-2 my-1\">
        <div class=\"custom-control custom-checkbox mr-sm-2\">
            <input type=\"checkbox\" class=\"custom-control-input\" id=\"ativo\" name='ativo' $dis $check>
            <label class=\"custom-control-label\" for=\"ativo\">Ativo</label>
        </div>
        </div>
        <div class=\"col-2 my-1\">
            <input type=\"submit\" id=\"Salvar\" class=\"btn btn-secondary\" value='Salvar' name='botao' $dis>
        </div>
        <div class=\"col-4 my-1\"></div>
    </div><hr>
    ";
}