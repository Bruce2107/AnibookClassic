<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Criar Conta</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../js/validacao.js"></script>

</head>
<body>
	<div class="container col-sm-9" id="form">
		<h1 class="">Criar Conta</h1>
		<br><br>

		<form method="post" action="validar.php" >
		  	<div class="row" >
		   		 <div class="col-sm-3">
		   		 	<label for="nome" class="lead">Nome:</label>
 		     		<input type="text" class="form-control" placeholder="Nome" id="nome" onkeypress="return semNum(event)" type=text name="nome">
 		   		</div>
 		   		<div class="col-sm-4">
 		   			<label class="lead">Sobrenome:</label>
  		    		<input type="text" class="form-control" placeholder="Insira seu sobrenome" onkeypress="return semNum(event)" id="sobrenome" type=text name="sobrenome">
  	 			</div>
 	 		</div>
 	 		<br>
 	 		<div class="row">
 	 			<div class="col-sm-7">
 	 				<label class="lead">Email:</label>
    				<input class="form-control" placeholder="nome@exemplo.com" id="email" type=text name="email" onblur="validacaoEmail(f1.email)">
    				<div id="msgemail" style="padding-left: 3px;"></div>
 	 			</div> 	 <br>			
 	 			
 	 		</div>
 	 		<br>
 	 		<div class="row">
 	 			<div class="col-sm-3">
 	 				<label class="lead">RG:</label>
				    <input class="form-control" oninput="rgmasc(this)" name="rg" placeholder="Insira seu RG" id="rg" onKeyUp="nu(this)">
 	 			</div>
 	 			<div class="col-sm-3">
 	 				<label class="lead">CPF:</label>
				    <input class="form-control" oninput="mascara(this)" name="cpf" placeholder="Insira seu CPF">
				    <div id=camada></div>
 	 			</div>
 	 		</div>
 	 		<br>
 	 		<div class="row">
 	 			<div class="col-sm-6">
 	 				<label class="lead">Senha:</label>
 	 				<input class="form-control" placeholder="Insira sua senha" name="senha1">
 	 			</div>
 	 		</div>
 	 		<br>
 	 		<div class="row">
 	 			<div class="col-sm-6">
 	 				<label class="lead">Confirme sua senha:</label>
 	 				<input class="form-control" placeholder="Repita a senha" name="senha2">
 	 			</div>
 	 		</div>
 	 		<br><br>
 	 		<button type=submit value="OK" type="button" class="btn btn-primary">Criar Conta</button>

		</form>
        <?php echo @$_GET['msg'] ?>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>