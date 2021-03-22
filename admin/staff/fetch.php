<?php

//fetch.php

include('../database_connection.php');

$query = "SELECT staff.id,staff.name,staff.email,staff.phone,staff.sub, class.course,class.sem
FROM staff
INNER JOIN class ON staff.class_id = class.id;";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_rows = $statement->rowCount();

$output = '
<div class="table-responsive">
	<table class="table table-bordered table-striped">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>phone</th>
			<th>sub</th>
			<th>Class</th>
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
			<td>'.$row["name"].'</td>
			<td>'.$row["email"].'</td>
			<td>'.$row["phone"].'</td>
			<td>'.$row["sub"].'</td>
			<td>'.$row["course"].'-sem('.$row["sem"].')</td>
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