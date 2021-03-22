<?php

//action.php

include('../database_connection.php');

if(isset($_POST["action"]))
{
	
	$data = array(
		':name' =>	$_POST["name"],
		':sem' =>	$_POST["sem"]

	);
	$query = '';
	if($_POST["action"] == "insert")
	{
		$co= ':name';
		$sem= ':sem';
		$duplicate=mysqli_query($con,"select * from class where course='$co' and sem='$se'");
        if (mysqli_num_rows($duplicate)>0)
        {
           
        }
		else{
			$query = "INSERT INTO class (course,sem) VALUES (:name, :sem)";
		}
	}
	if($_POST["action"] == "edit")
	{
		$query = "
		UPDATE class 
		SET course = :name, 
		sem = :sem 
		WHERE id = '".$_POST['hidden_id']."'
		";
	}
	$statement = $connect->prepare($query);
	$statement->execute($data);
}


?>