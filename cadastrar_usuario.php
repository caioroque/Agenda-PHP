<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>PHP - Aula 15 - Cadastro de Usuário</title>
</head>
<body class="container-fluid">

<?php include 'menu.php'; 
	  include 'funcoes/functions.php';

		get_msgs();
?>

<h2 class="text text-info">Cadastro de Usuário</h2>
<form name="cadastrar_usuario" action="usuario_cadastrado.php" method="post">
	<p>
		<label for="usuario">Nome de Usuário:</label><br>
		<input type="text" name="usuario">
	</p>
	<p>
		<label for="senha">Senha:</label><br>
		<input type="password" name="senha">
	</p>
	<p>
		<label for="email">E-mail:</label><br>
		<input type="email" name="email">
	</p>

	<button type="submit" name="cadastrar" class="btn btn-success">Cadastrar</button>
</form>


</body>
</html>