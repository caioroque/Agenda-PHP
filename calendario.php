<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <title>Calendário</title>

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
   
    </style>
    <?php 
        date_default_timezone_set('America/Sao_Paulo');
    ?>
</head>
<?php include 'menu.php'; ?>

<?php include 'funcoes/functions.php'; ?>

<body>

    <h2>Estamos em Abril</h2><br>
        <p>Hoje é dia <strong><?php echo date('d / '); ?></strong>
            <?php echo date('m'); ?>
            agora são <?php echo date ('H'); ?>horas e
            <?php echo date('i');?> minutos.</p>

                <?php  
                 $session_data = get_session_data();
                 ?>

        <?php
            function linha($semana){
                echo "<tr>";
                for ($i = 0; $i <=6; $i++){
                    if(isset($semana[$i])){
                        echo "<td>{$semana[$i]}</td>";
                    } else{
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
            }
            function calendario(){
                $dia = 1;
                $semana = array();

                while($dia <= 30){
                    array_push($semana, $dia);
                    if(count($semana) == 7){
                        linha($semana);
                        $semana = array();
                    }

                    $dia++;
                }
                linha($semana);
            }
        ?>

        <table class="table table-bordered">
            <tr>
                <th>Domindo</th>
                <th>Segunda-feira</th>
                <th>Terça-feira</th>
                <th>Quarta-feira</th>
                <th>Quinta-feira</th>
                <th>Sexta-feira</th>
                <th>Sábado</th>
                <?php calendario(); ?>
            </tr>
        </table>
        <p>Clique <a href="cadastrar_evento.php">aqui</a> para cadastrar eventos!</p>
</body>
</html>