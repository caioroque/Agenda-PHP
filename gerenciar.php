<?php include_once 'funcoes/functions.php'; lock_page(); ?>
<?php include 'menu.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Gerenciar Eventos</title>

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

    h2{
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

    textarea{
     width: 185px;
     height: 35px;
     background-color: #FFFFFF;
     border-radius: 10px 20px;
    }
    
    </style>
</head>
<body class="container-fluid">

	<h2>Eventos do mês de março</h2><br>

<?php
	

	$conn = get_connection();

	get_msgs();

	$id_usuario = $_SESSION['id_usuario'];

	$sql = "SELECT eventos.id_evento, eventos.nome, eventos.descricao, eventos.dia, eventos.prioridade, eventos.duracao, tb_users.usuario 
		FROM eventos
		INNER JOIN tb_users 
		ON eventos.id_usuario = tb_users.id_usuario
		WHERE eventos.id_usuario = $id_usuario";

	$result = mysqli_query($conn, $sql);

	$linhas = mysqli_affected_rows($conn);

	if($linhas > 0){

		echo '<table class="table">';
		echo '<tr>';
		echo '<th>ID #</th>';
		echo '<th>Nome do evento</th>';
		echo '<th>Descrição</th>';
		echo '<th>Dia</th>';
		echo '<th>Pioridade</th>';
		echo '<th>Duração</th>';
		echo '<th>Cadastrado por</th>';
		echo '<th>Editar</th>';
		echo '<th>Deletar</th>';
		echo '</tr>';

		for ($i = 0; $i < $linhas; $i++){

			$linha_atual = mysqli_fetch_assoc($result);
			echo '<tr>';
			foreach ($linha_atual as $indice => $valor) {
				
				if($indice == "id_evento"){
					$id_evento = $valor;
				}

				echo '<td>' . $valor . '</td>';
			}

			echo '<td><a href="editar.php?id_produto='.$id_evento.'" class="btn btn-warning">Editar</a></td>';


			echo '<td><a href="deletar.php?id_produto='.$id_evento.'" class="btn btn-danger" OnClick="return confirm(\'Tem certeza que deseja excluir?\')">Deletar</a></td>';
			echo '</tr>';
		}
		echo '</table>';

	}
	else{

		echo '<h3 class="text text-warning">Não há eventos cadastrados por '. $_SESSION['usuario'].'</h3>';
	}

?>


</body>
</html>
