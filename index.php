<?php
include('admin/database_connection.php');
$sql = "SELECT * FROM `staff` WHERE class_id=1 AND id NOT IN(SELECT staff_id FROM feeds where stud_id=1)";
$result = $con->query($sql);
$sqlq = "SELECT * FROM `questions`";
$resultq = $con->query($sqlq);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback system</title>
  <link rel="stylesheet" href="styles/style.css">
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>

  <!-- bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>

  <style>
    .container {
      background-color: #FFFFFFFF;
      color: #663399;
    }
    #auth_name{
      display: none;
    }
  </style>
</head>

<body class="p-5" style="background-color:#2D2926FF;">
  <div class="container p-3" id="c1" style="display:none;">
    <!-- <div class="h-100 d-flex justify-content-center align-items-center"> -->
    <div class="d-flex justify-content-center align-items-center" id="auth_name" style="display:none;">
      <h2 style="color:#2D2926FF;">Feedback webapp<br> Hi! Pavan</h2>
    </div>
    <div class="h-100">
      <form method="post" id="auth_form" style="display:none;">
        <div class="d-grid gap-2 col-sm-12 col-lg-6 mx-auto pt-5">
          <h6 style="color:#2D2926FF;">welcome...!</h6>
          <h6>Select staff to Feedback survey</h6>
        </div>
        <div class="d-grid gap-2 col-sm-12 col-lg-6 mx-auto pt-5">
          <select class="form-select option" id="staffid" size="4">
            <option selected>Select the staff</option>
            <?php
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              ?>
                      <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?>-[<?php echo $row['sub'];?>]</option>
              <?php
            }
          } else {
            ?>
             <option selected>No Staff Found</option>
            <?php
          }
          $con->close();
          ?>
          </select>
        </div>
        <div class="d-grid gap-2 col-sm-12 col-lg-6 mx-auto pt-5">
          <button class="btn btn-outline-secondary" type="button" id="next">Survey</button>
        </div>
      </form>
    </div>
  </div>
<div class="container  p-3" id="c2" style="display:none;">
      <!-- <div class="h-100 d-flex justify-content-center align-items-center"> -->
      <div class="d-flex justify-content-center align-items-center" id="auth_name1" style="display:none;">
        <h4 style="color:#2D2926FF;">Answer the Questions.!</h4>
      </div>
      <div class="h-100">
        <form method="post" id="auth_form1" style="display:none;">
        <input type="hidden" name="action" id="action" value="insert"  required/>
        <input type="hidden" name="staff" id="staff" value=""  required>
        <input type="hidden" name="stud" id="stud" value="1"  required>
        <?php
          if ($resultq->num_rows > 0) {
            // output data of each row
            $i=0;
            while($rowq = $resultq->fetch_assoc()) {
              ?>
                   <div class="p-3 mt-2 border border-primary">
            <p>Q. <?php echo $rowq['question'];?></p>
            <input type="hidden" name="qid[]" id="qid" value="<?php echo $rowq['id'];?>"  required>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="answer[<?php echo $i;?>]" id="inlineRadio1" value="1"  required>
              <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="answer[<?php echo $i;?>]" id="inlineRadio2" value="2"  required>
              <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="answer[<?php echo $i;?>]" id="inlineRadio1" value="3"  required>
              <label class="form-check-label" for="inlineRadio1">3</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="answer[<?php echo $i;?>]" id="inlineRadio2" value="4"  required>
              <label class="form-check-label" for="inlineRadio2">4</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="answer[<?php echo $i;?>]" id="inlineRadio2" value="5"  required>
              <label class="form-check-label" for="inlineRadio2">5</label>
            </div>
          </div>
        <?php
        $i++;
            }
          } else {
           echo "no found";
          }
  
          ?>
          <!-- <div class="d-grid gap-2 col-sm-12 col-lg-6 mx-auto pt-5">
<h6>Select the staff..</h6>
</div> -->
<!-- question 1 -->

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Custom Feedback</label>
            <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"  required></textarea>
          </div>
          <div class="d-grid gap-2 col-sm-12 col-lg-6 mx-auto pt-3">
            <input class="btn btn-outline-primary" type="submit" id="submit" placeholder="Submit">
          </div>
        </form>
      </div>




    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Jquery User Defined  -->
    <script>
      $(document).ready(function () {
        $("#c1").show();
        $.when($('#auth_name').fadeIn(1000))
          .done(function () {
            $('#auth_name').css({ "height": "auto" });
            $('#auth_form').fadeIn(1000);
          });
        $("#next").click(function () {
          if ($("#staffid")[0].selectedIndex <= 0) {
                alert("please select staff");
            }
    else{
          $("#c1").hide();
          $("#c2").show();
          $.when($('#auth_name1').fadeIn(1000))
          .done(function () {
            $('#auth_name1').css({ "height": "auto" });
            $('#auth_form1').fadeIn(1000);
            $('#staff').val($('#staffid').val());
          });
    }
        });
     



    //  add
    $('#auth_form1').on('submit', function(event){
		event.preventDefault();
	
			var form_data = $(this).serialize();

			var action = $('#action').val();
			$.ajax({
				url:"ac.php",
				method:"POST",
				data:form_data,
				success:function(data)
				{
					if(action == 'insert')
					{
            $.when(swal("Thank you!", "You submitted feedback!", "success"))
          .done(function () {
            location.reload();
            $('#auth_form1')[0].reset();
          });
					}
					if(action == 'edit')
					{
						alert("Data Edited");
					}
		
				}
			});
	});
      });
    </script>
</body>
</html>