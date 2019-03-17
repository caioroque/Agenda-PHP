<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Login</title>

		     <style type="text/css">

    body{
     background-image: url("img/imagem3.jpg");
    }

    button{

     width: 185px;
     height: 35px;

    }

     input{

     width: 185px;
     height: 35px;
     background-color: #FFFFFF;
     border-radius: 10px 20px;
}

    p{
          color: #FFFFFF;
     }

     label{
          color: #FFFFFF;
     }

    h2{
     color: #FFFFFF;
    }
    
    </style>
</head>
<body class="container-fluid">

	<?php 

	include 'menu.php'; 

	include 'funcoes/functions.php';

	get_msgs();

	if($_POST){

		if(empty($_POST['usuario']) || empty($_POST['senha'])){
			header('location:'.LOGIN.'?msg=empty_fields');
		}else{

			$login_data['usuario'] 	= $_POST['usuario'];
			$login_data['senha'] = $_POST['senha'];

			validar_login($login_data);
		}
	}

	?>

	<h2>Efetue o login</h2>

	<form name="login" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		

			<label for="usuario">Usuário:</label><br>
			<input type="text" name="usuario"><br><br>


			<label for="senha">Senha:</label><br>
			<input type="password" name="senha"><br><br>


		<button type="submit" name="logar" class="btn btn-info">Logar</button>

	</form>
	<br>
	<p>Não é cadastrado? Clique <a href="cadastrar_usuario.php">aqui</a> para se cadastrar!</p>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>