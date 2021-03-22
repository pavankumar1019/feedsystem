<?php
include('../database_connection.php');
$query = "SELECT student_info.id,student_info.name,student_info.reg_no,student_info.phone, class.course,class.sem
FROM student_info
INNER JOIN class ON student_info.class_id = class.id;";

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
			<th>Reg</th>
			<th>phone</th>
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
			<td>'.$row["reg_no"].'</td>
			<td>'.$row["phone"].'</td>
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