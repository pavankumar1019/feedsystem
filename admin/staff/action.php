<?php
include('../database_connection.php');

if(isset($_POST["action"]))
{
	$data = array(
		':name' =>	$_POST["name"]
	);
	$query = '';
	if($_POST["action"] == "insert")
	{
		$query = "INSERT INTO questions (question) VALUES (:name)";
	}
	if($_POST["action"] == "edit")
	{
		$query = "
		UPDATE questions 
		SET question = :name 
		WHERE id = '".$_POST['hidden_id']."'
		";
	}
	$statement = $connect->prepare($query);
	$statement->execute($data);
}


?>