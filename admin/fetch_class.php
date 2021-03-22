<?php

//fetch.php

include('database_connection.php');

$query = "SELECT * FROM class ORDER BY id DESC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_rows = $statement->rowCount();

$output = '
<option id="hell" selected>Open this select menu</option>
';
if($total_rows > 0)
{
	foreach($result as $row)
	{
		$output .= '
        <option id="hell" value="'.$row["id"].'">'.$row["course"].'-'.$row["sem"].'</option>
		';
	}
}
else
{
	$output .= '
    <option selected>No record</option>
	';
}
$output .= '</table></div>';

echo $output;

?>