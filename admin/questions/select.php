<?php

//select.php

include('../database_connection.php');

if(isset($_POST["id"]))
{
	$query = "SELECT * FROM questions WHERE id='".$_POST["id"]."'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$programming_languages = '';
	$name = '';
	foreach($result as $row)
	{
		$id = $row["id"];
		$question = $row["question"];	
		
	}
	$output = array(
		'question'	=>	$question
	);
	echo json_encode($output);
}


?>