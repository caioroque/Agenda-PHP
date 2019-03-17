<?php require_once 'funcoes/functions.php'; lock_page(); verify_session();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Editar Eventos</title>
</head>
<body class="container-fluid">


<?php include 'menu.php'; 
	  include 'funcoes/functions.php';

	if(isset($_GET['id_evento'])){

		$id_produto = $_GET['id_evento'];
		$id_usuario = $_SESSION['id_usuario'];
		
		$conn = get_connection();

		get_msgs();

		$sql = "SELECT id_evento, nome, dia, descricao, prioridade FROM eventos 
			WHERE id_evento = $id_evento AND id_usuario = $id_usuario";

		$result = mysqli_query($conn, $sql);

		$linhas = mysqli_affected_rows($conn);

		if($linhas > 0){

			$registro = mysqli_fetch_assoc($result);

	?>

	<p>
			<label for="nome">Nome do Evento</label><br>
			<input type="text" name="nome"
			value="<?php echo $registro['nome']; ?>">
		</p>

		<tr>
		<label for="dia"></label>
        <select name="dia" id="dia">
          <option value="1">01</option>
          <option value="2">02</option>
          <option value="3">03</option>
          <option value="4">04</option>
          <option value="5">05</option>
          <option value="6">06</option>
          <option value="7">07</option>
          <option value="8">08</option>
          <option value="9">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option
          value="<?php echo $registro['dia']; ?>">

        </select>
		<p>
			<label for="descricao">Descricao</label><br>
			<textarea name="descricao"></textarea
			value="<?php echo $registro['descricao']; ?>">
		</p>

		<label for="duracao">Duração:</label><br>
      	<input type="text" name="duracao"><br><br>

		<p>
			<select name="prioridade">
				<option>Leve</option>
				<option>Média</option>
				<option>Alta</option>
				<option>Urgente</option>
			</select
			value="<?php echo $registro['prioridade']; ?>">
		</p>

	<input type="hidden" name="id_evento" 
	value="<?php echo $registro['id_evento']; ?>">

	<button name="editar" type="submit" class="btn btn-warning">Editar</button>
	
	</form>

	<?php
		}else{

			header('location:gerenciar.php?msg=editarError');
		}

	}else{

		header('location:gerenciar.php?msg=error');
	}
?>

</body>
</html>