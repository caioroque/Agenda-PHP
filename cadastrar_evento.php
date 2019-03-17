<?php include_once 'funcoes/functions.php'; lock_page();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Cadastrar evento</title>

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

	<?php include 'menu.php' ;	

		get_msgs();
		
	?>

  <h2>Cadastrar Eventos</h2>

	<form name="cadEvento" action="cadastrada.php" method="post">
		

			<label for="nome">Nome do Evento:</label><br>
			<input type="text" name="nome"><br><br>


      <label for="descricao">Descrição:</label><br>
      <textarea name="descricao"></textarea><br><br>

      <label for="duracao">Duração:</label><br>
      <input type="text" name="duracao"><br><br>

      <label for="Prioridade">Prioridade;</label><br>
      <select name="prioridade">
        <option>Leve</option>
        <option>Média</option>
        <option>Alta</option>
        <option>Urgente</option>
      </select>

               <br><br>


		<tr>
		<label for="dia">Dia:</label><br>
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
          <option value="30">30</option>

        </select>   <br><br>


		<button name="cadastrarEvento" type="submit" class="btn btn-success">Criar</button>
	</form>


</body>
</html>