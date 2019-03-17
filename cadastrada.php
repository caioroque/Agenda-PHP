<?php include_once 'funcoes/functions.php'; lock_page();

	if(!empty($_POST['nome']) && !empty($_POST['descricao']) && !empty($_POST['duracao']) && !empty($_POST['dia']) && !empty($_POST['prioridade']) ){


		$evento_data['nome']         = $_POST['nome'];
		$evento_data['descricao']    = $_POST['descricao'];
		$evento_data['duracao']      = $_POST['duracao'];
		$evento_data['dia']          = $_POST['dia'];
		$evento_data['prioridade']   = $_POST['prioridade'];

		$evento_data['id_usuario']   = $_SESSION['id_usuario'];

		post_news($evento_data);
		

	}else{

		header('location:cadastrar_evento.php?msg=post_empty');
	}
?>