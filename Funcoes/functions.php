<?php 
include_once 'config.php';

 function get_connection(){

	$conn = new mysqli(SERVER, USER, PASSWORD, BD); 
	return $conn;
}

function verify_session(){

	if(!isset($_SESSION)) {
	session_start();
}
}

function close_connection($conn){
	mysqli_close($conn);
}

function get_session_data(){

	if(empty($_SESSION)){
		session_start();
	}
	return $_SESSION;
}

function get_num_eventos(){

	$conn = get_connection();
	$sql = "SELECT * FROM eventos";
	$result = mysqli_query($conn, $sql);
	$number_of_news = mysqli_affected_rows($conn);
	return $number_eventos;
}

function get_eventos(){

	$conn = get_connection();
	$sql = "SELECT * from eventos
	ORDER BY id_evento DESC";
	$result = mysqli_query($conn, $sql);
	return $result;
}

// retorna notícia específica
function get_this_evento($id_evento){

	$conn = get_connection();
	$sql = "SELECT eventos.id_evento, eventos.nome, eventos.dia, eventos.descricao, eventos.duracao, eventos.prioridade, tb_users.usuario 
		FROM eventos
		INNER JOIN tb_users 
		ON eventos.id_usuario = tb_users.id_usuario
		WHERE eventos.id_evento = $id_evento";
	$result = mysqli_query($conn, $sql);
	return $result;
}

function validar_login($login_data){

	
		$conn = get_connection();
		$usuario 	  = $login_data['usuario'];
		$senha        = $login_data['senha'];

		$sql = "SELECT * FROM tb_users WHERE usuario LIKE '$usuario' AND senha LIKE '$senha' ";

		$result = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0){

			$registro = mysqli_fetch_assoc($result);

			session_start();
			$_SESSION['id_usuario']  = $registro['id_usuario'];
			$_SESSION['usuario']     = $registro['usuario'];
			$_SESSION['senha'] 	     = $registro['senha'];
			$_SESSION['email']		 = $registro['email'];

			header('location:'.PROFILE);
			
		}else{

			header('location:'.LOGIN.'?msg=invalid_values');
		}
}

function logout(){

	if(empty($_SESSION)){
		session_start();
	}else{
		foreach ($_SESSION as $key => $value) {
			unset($key);
		}
	}

	session_destroy();

	header('location:'.LOGIN);
}

function get_msgs(){

	if(!empty($_GET['msg'])){

		$msg = $_GET['msg'];

		if ($msg == 'empty_fields'){

			echo '<h3 class="alert alert-warning">Preencha todos os campos</h3>';

		}else if ($msg == 'invalid_values'){

			echo '<h3 class="alert alert-danger">Usuário ou senha inválidos</h3>';

		}else if($msg == 'invalid_news_id'){

			echo '<h3 class="alert alert-danger">Erro ao carregar notícia...</h3>';
		}
	}
}

function lock_page(){

	session_start();
	
	if(empty($_SESSION)){
		header('location:'.LOGIN.'?msg=not_logged');
	}
}

function delete_evento($id_evento){

	$conn = get_connection();
	$sql = "DELETE FROM eventos WHERE id_evento = $id_evento";
	mysqli_quuery($conn, $sql);

	if(mysqli_affected_rows($conn) > 0){

		header('location:'.MANAGER.'?msg=delete_news_success');
	}else{

		header('location:'.MANAGER.'?msg=delete_news_error');
	}
}

function post_news($evento_data){

	$conn = get_connection();

	$sql = "INSERT INTO eventos (nome, descricao, dia, duracao, prioridade, id_usuario) VALUES
	 ('".$evento_data['nome']."', '".$evento_data['descricao']."', '".$evento_data['dia']."','".$evento_data['duracao']."','".$evento_data['prioridade']."','".$evento_data['id_usuario']."')";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0){

		header('location:'.MAIN.'?msg=post_success');
	
	}else{
		header('location:cadastrar_evento.php?msg=post_error');
	}

}

?>