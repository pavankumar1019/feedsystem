<?php
include('../admin/database_connection.php');
$sql = "SELECT * FROM feeds";
$result = $con->query($sql);
$programming_languages = '';
$tasks = array();
// fetch feeds start
if ($result->num_rows > 0) {
// fetch feeds record
  while($row = $result->fetch_assoc()) {
    $programming_languages .=  '<div class="alert alert-info alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
  // expload array fields in db
 $language_array = explode(",",$row["answer"]);
 $questions_array = explode(",",$row["quest_id"]);
$studid=$row['stud_id'];
$staffid=$row['staff_id'];

// select student with id 
 $sqls = "SELECT * FROM student_info where id=$studid";
$results = $con->query($sqls);
if ($results->num_rows > 0) {

// start1
  while($rows = $results->fetch_assoc()) {
    $sqlq = "SELECT * FROM staff where id=$staffid";
    $resultq = $con->query($sqlq);
if ($resultq->num_rows > 0) {
  while($rowq = $resultq->fetch_assoc() ) {
 
    $programming_languages .=  '<strong>'.$rows['reg_no'].'&nbsp;&nbsp;</strong>Has given Feed Back to the Staff <strong>&nbsp;&nbsp;'.$rowq['name'].'</strong>-[Subject:-'.$rowq['sub'].']<br>';
    $programming_languages .=  '
    <div class="container-fluid">
        <div class="row">';
// get each iteams in feeds data 
    $i=0;
       foreach($language_array as $language)
       {
   $programming_languages .= '<div class="col-6 col-lg-2">Q('.$questions_array[$i].')'.$language;
   $programming_languages .= '<ul>';
   for ($count = 1; $count <= 5; $count ++) {
    
    if ($count <= $language) {
        
        $programming_languages .= '<li><span class="fa fa-star checked"></span></li>';
    } else {
        $programming_languages .= '<li ><span class="fa fa-star"></span></li>';
    }

}
   $i++;
   $programming_languages .= '</ul></div>';
       }
       $programming_languages .=  '
       <strong>'.$row['comment'].'&nbsp;&nbsp;</strong>
       </div>
</div>';
  }
}
  // end1

  }

} 
else {
}
$programming_languages .=  '</div>';
// select student with id close
}
} 

else {
 
}
// fetch feeds end
$output = array(
  'programming_languages'	=>	$programming_languages
);
// echo json_encode($output);
echo $programming_languages;
// $con->close();

?>