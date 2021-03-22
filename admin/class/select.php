<?php

//select.php

include('../database_connection.php');

if(isset($_POST["id"]))
{
	$query = "SELECT * FROM class WHERE id='".$_POST["id"]."'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$programming_languages = '';
	$name = '';
	foreach($result as $row)
	{
		$id = $row["id"];
		$question = $row["course"];	
		$sem = $row["sem"];	
		
	}
	$output = array(
		'question'	=>	$question,
		'sem'	=>	$sem
	);
	echo json_encode($output);
}


?>