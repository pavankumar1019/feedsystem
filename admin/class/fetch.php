<?php

//fetch.php

include('../database_connection.php');

$query = "SELECT * FROM class ORDER BY id ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_rows = $statement->rowCount();

$output = '
<div class="table-responsive">
	<table class="table table-bordered table-striped">
		<tr>
			<th>ID</th>
			<th>Course</th>
			<th>Sem</th>

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
			<td>'.$row["course"].'</td>
			<td>'.$row["sem"].'</td>
		
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