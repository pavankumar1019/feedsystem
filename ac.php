<?php
include('./admin/database_connection.php');

if(isset($_POST["action"]))
{
	$programming_languages = implode(",", $_POST["answer"]);
	$quest = implode(",", $_POST["qid"]);
	$data = array(
		':name'						=>	$_POST["staff"],
		':stud'						=>	$_POST["stud"],
		':comment'						=>	$_POST["comment"],
		':programming_languages'	=>	$programming_languages,
		':question'	=>	$quest
	);
	$query = '';
	if($_POST["action"] == "insert")
	{
		$query = "INSERT INTO feeds (stud_id,staff_id, answer, quest_id,comment) VALUES (:stud, :name, :programming_languages, :question, :comment)";
	}
	if($_POST["action"] == "edit")
	{
		$query = "
		UPDATE tbl_name 
		SET name = :name, 
		programming_languages = :programming_languages 
		WHERE id = '".$_POST['hidden_id']."'
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute($data);
}


?>