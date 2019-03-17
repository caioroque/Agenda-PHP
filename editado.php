<?php include 'funcoes/functions.php'; lock_page();
if(empty($_POST['nome']) || empty($_POST['dia']) ||
	empty($_POST['descricao']) || empty($_POST['duracao']) || empty($_POST['prioridade'])){

	header('location:gerenciar.php?msg=empty');
}else{

	$nome 		= $_POST['nome'];
	$dia		= $_POST['dia'];
	$descricao	= $_POST['descricao'];
	$duracao	= $_POST['duracao'];
	$prioridade	= $_POST['prioridade'];
	$id_evento	= $_POST['id_evento'];

	$id_usuario	= $_SESSION['id_usuario'];

	$conn = get_connection();

	get_msgs();

	$sql = "UPDATE eventos SET nome = '$nome', dia = '$dia', descricao = $descricao, $prioridade = $prioridade $duracao = $duracao 
			WHERE id_evento = $id_evento AND id_usuario = $id_usuario";

	mysqli_query($conn, $sql);

	$linhas = mysqli_affected_rows($conn);

	if ($linhas > 0){

		header('location:gerenciar.php?msg=editarSuccess');
	}else{

		header('location:gerenciar.php?msg=editarError');
	}
}
?>