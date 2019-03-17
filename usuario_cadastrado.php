<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Usuario Cadastrado</title>
</head>
<body class="container-fluid">

	<?php 

		include 'menu.php';
		include 'funcoes/functions.php';

		$conn = get_connection();

		get_msgs();

		if(!empty($_POST['usuario']) && !empty($_POST['senha']) 
			&& !empty($_POST['email']))
		{

			$usuario = $_POST['usuario'];
			$senha	 = $_POST['senha'];
			$email	 = $_POST['email'];

			$sql = "INSERT INTO tb_users (usuario, senha, email) 
			VALUES ('$usuario', '$senha', '$email') ";

			$result = mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn) > 0){

				echo '<h3 class="alert alert-success">Seu cadastro foi ralizado! clique <a href="login.php">aqui</a> para efetuar o login!</h3>';
			}else{
				
				echo '<h3 class="alert alert-danger">Erro ao realziar cadastro! Por favor, <a href="cadastrar_usuario.php">tente novamente</a>!</h3>';
			}


		}

	 ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>