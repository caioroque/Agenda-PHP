<?php 	include 'funcoes/functions.php'; lock_page(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Perfil</title>

		     <style type="text/css">

    body{
     background-image: url("img/imagem1.jpg");
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

    h3{
     color: #FFFFFF;
    }

    tr{
     color: #FFFFFF;
    }

    th{
     color: #FFFFFF;
    }

    select{
     width: 185px;
     height: 35px;
     background-color: #FFFFFF;
     border-radius: 10px 20px;
    }
    
    </style>
</head>
<body class="container-fluid">

	<?php 
	include 'menu.php'; 

	$session_data = get_session_data();

	?>

	<h3>Óla !! <?php echo $session_data['usuario']; ?></h3>

	<p>
		<b>Nome: </b><?php echo $session_data['usuario']; ?><br>
		<b>E-mail: </b><?php echo $session_data['email']; ?><br>
		<b>Senha: </b><?php echo $session_data['senha']; ?><br>
	</p>

		<p>Clique <a href="calendario.php">aqui</a> para acessar o calendario!</p>


</body>
</html>