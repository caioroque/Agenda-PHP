<?php include_once 'functions/functions.php';

if(empty($_GET['last_id'])){
	header('location:'.MAIN.'?msg_error_loading_more_news');
}else{

	$conn = get_connection();
	   
	$last_id = $_GET['last_id'];

	$sql = "SELECT * FROM tb_news WHERE id_news < '".$last_id."' ORDER BY id_news DESC LIMIT 8"; 


	$result = mysqli_query($conn, $sql);


	$json = include('data.php');


	//echo json_encode($json);
 }

?>