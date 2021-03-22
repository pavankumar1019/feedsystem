<?php
include('../database_connection.php');

if(isset($_POST["id"]))
{
	$query = "DELETE FROM questions WHERE id = '".$_POST['id']."'";
	$statement = $connect->prepare($query);
	$statement->execute();
}


?>