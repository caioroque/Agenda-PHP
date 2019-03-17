<?php include 'funcoes/functions.php'; lock_page(); verify_session();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Exibir Eventos</title>
</head>
<body class="container-fluid">

<?php include 'menu.php'; 

	$conn = get_connection();

	get_msgs();

	$sql = "SELECT eventos.id_evento, eventos.nome, eventos.dia, eventos.descricao, eventos.duracao, eventos.prioridade, tb_users.usuario 
		FROM eventos
		INNER JOIN tb_users 
		ON eventos.id_usuario = tb_users.id_usuario";

	$result = mysqli_query($conn, $sql);

	$linhas = mysqli_affected_rows($conn);

	if($linhas > 0){

		echo '<h3 class="text text-info">Produtos Cadastrados</h3>';

		echo '<table class="table table-striped table=bordered">';
		echo '<tr>';
		echo '<th>ID #</th>';
		echo '<th>Nome do Evento</th>';
		echo '<th>Dia</th>';
		echo '<th>descricao</th>';
		echo '<th>Duração</th>';
		echo '<th>Prioridade</th>';
		echo '<th>Cadastrado por</th>';
		echo '</tr>';

		for ($i = 0; $i < $linhas; $i++){

			$linha_atual = mysqli_fetch_assoc($result);
			echo '<tr>';
			foreach ($linha_atual as $indice => $valor) {
				echo '<td>' . $valor . '</td>';
			}
			echo '</tr>';
		}
		echo '</table>';

	}
	else{

		echo '<h3 class="text text-warning">Não há eventos cadastrados</h3>';
	}

?>

</body>
</html>