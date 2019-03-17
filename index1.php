<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <style type="text/css">

    body{
    	background-image: url("img/imagem1.jpg");
    }

    p{
		color: #FFFFFF;
	}

    h2{
    	color: #FFFFFF;
    }

    </style>

</head>
<body class="container-fluid">

	<?php include_once 'funcoes/functions.php';

		include 'menu.php'; 

		get_msgs();

	?>
	  <h2>Agenda</h2>
	  <br>
	  <p>Crie eventos com niveis de prioridade do mês de abril, veja o calendario do mês de abril</p>

    <script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>