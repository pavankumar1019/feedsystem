<?php

//fetch.php

include('../database_connection.php');

$query = "SELECT * FROM questions ORDER BY id ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_rows = $statement->rowCount();

$output = '
<div class="table-responsive">
	<table class="table table-bordered table-striped">
		<tr>
			<th>ID</th>
			<th>Question</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
';

if($total_rows > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
			<td>'.$row["id"].'</td>
			<td>'.$row["question"].'</td>
			<td><button type="button" name="edit" id="'.$row["id"].'" class="btn btn-warning btn-xs edit">Edit</button></td>
			<td><button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button></td>
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4">No Data Found</td>
	</tr>
	';
}
$output .= '</table></div>';

echo $output;

?>