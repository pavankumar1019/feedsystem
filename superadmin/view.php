<html lang="en">
<?php

include('../admin/database_connection.php');

$sql = "SELECT * FROM `questions`";
$result = $con->query($sql);
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <style>
.checked {
  color: orange;
}
ul li {
  display:inline;
}
</style>
</head>
<body  style="background-color:#2D2926FF;">
  <div class="container div1 mt-5">
<div class="container-fluid">
    <h1>Hi.!</h1><br><p>
    <?php
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
    
                echo $row['id']."&nbsp;".$row['question']."<br>";

       
            }
          } else {
            ?>
             <option selected>No Staff Found</option>
            <?php
          }
          $con->close();
          ?>
    </p>
</div>
<div class="feeds" id="feeds">
    <div class="d-flex justify-content-center"><h5>Feedbacks given by student&nbsp;&nbsp;&nbsp;&nbsp;<span id="reload"><i class="fa fa-refresh" aria-hidden="true"></i>
</span></h5></div>
    </div>
  </div>

  <script>
         $(document).ready(function () {  
        // fetch class block
	load_data();
function load_data()
{
  $.ajax({
    url:"fetch.php",
    method:"POST",
    success:function(data)
    {
      $('#feeds').append(data);
    }
  })
}});

$( "#reload" ).click(function() {
    location.reload(true);
});
  </script>
</body>
</html>
