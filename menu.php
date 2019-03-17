<?php 
	if(empty($_SESSION)){

		session_start();
	}

	if(empty($_SESSION['usuario']) || empty($_SESSION['senha']))
	{
		$links = ' <li role="presentation">
					<a href="index.php">Home</a>
				 </li>
				<li role="presentation">
					<a href="login.php">Entrar</a>
				 </li>';

	}else{

		$links = '<li role="presentation">
					<a href="index1.php">Home</a>
					</li>
				<li role="presentation">
					<a href="cadastrar_evento.php">Cadastrar Eventos</a>
				</li>

				<li role="presentation">
					<a href="gerenciar.php">Gerenciar</a>
				</li>

				<li role="presentation">
					<a href="perfil.php">Perfil</a>
				</li>

				<li role="presentation">
					<a href="logout.php">Sair</a>
				</li>';
	}

 ?>

<ul class="nav nav-pills">



	<?php echo $links; ?>
	

</ul>



