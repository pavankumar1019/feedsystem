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
    .modal{
      overflow: scroll; 
    }
  </style>
</head>

<body class="p-2" style="background-color:#2D2926FF;">
  <div class="container-fluid p-3" id="c1" style="display:none;">
    <!-- <div class="h-100 d-flex justify-content-center align-items-center"> -->
    <div class="d-flex justify-content-center align-items-center" id="auth_name" style="display:none;">
      <h2 style="color:wheat;">Hi! Admin</h2>
    </div>
    <div class="h-100" id="auth_form" style="display: none;">
        <div class="card text-center">
            <div class="card-header">
              welcome.!
            </div>
            <div class="card-body">
              <h5 class="card-title">Digital Feedback System</h5>
              <p class="card-text">Please LogOut when you done.</p>
              <div class="row m-3">
                <div class="col-sm-6 mt-2">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Add Students</h5>
                      <p class="card-text">Deploy Students into Cloud</p>
                      <a href="#" id="myImg1"  class="btn btn-primary">Go</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mt-2">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Add Staff</h5>
                      <p class="card-text">Deploy Satff into Cloud</p>
                      <a href="#" id="myImg2" class="btn btn-primary">Go</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mt-2">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Add Class</h5>
                      <p class="card-text">Deploy Students into Cloud</p>
                      <button id="myImg3"  class="btn btn-primary">Go</button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mt-2">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Crud operations</h5>
                      <p class="card-text">
                        <a href="./staff/">Staff</a>
                        <a href="./student/">Student</a>
                        <a href="./class/">Class</a>
                        <a href="./questions/">Questions</a>
                      </p>
                     
                    </div>
                  </div>
                </div>
              </div>
            <div class="card-footer text-muted">
          <a href="#">Log Out</a>
            </div>
          </div>
    </div>
  </div>
<!-- The Modal1 -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
  
        <div class="container add_student m-3 p-3" id="caption">
            <form class="row g-3" role="form" id="submitStudent">
              <div class="alert alert-success alert-dismissible" id="success1" style="display:none;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Name</label>
                  <input type="text" name="stdname" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Register number</label>
                  <input type="text" name="stdreg" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Phone number</label>
                  <input type="number" name="stdph" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-6">
                  <label for="class" class="form-label">Class</label>
                  <select class="form-select" name="stdclass" id="class" aria-label="Default select example">
                    </select>
                </div>
                
                <div class="col-12">
                  <button type="submit"  id="submitbtn1" class="btn btn-primary">ADD</button>
                </div>
              </form>
        </div>

  </div>
<div id="myModal2" class="modal">
    <span class="close" id="close2">&times;</span>
  
        <div class="container add_student m-3 p-3"  id="caption2">
            <form class="row g-3" role="form" id="submitStaff">
            <div class="alert alert-success alert-dismissible" id="success2" style="display:none;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            </div>
            <table class="table table-bordered" id="dynamic_field">
              <tr>
              <div class="col-md-6">
                  <label for="inputEmail2" class="form-label">Name</label>
                  <input type="text" name="staffname" class="form-control" id="inputEmail2">
                </div>
              </tr>
              <tr>
              <div class="col-md-6">
                  <label for="inputEmail2" class="form-label">Email</label>
                  <input type="email" name="staffemail" class="form-control" id="inputEmail2">
                </div>
              </tr>
              <div class="col-md-6">
                  <label for="inputPassword2" class="form-label">Phone number</label>
                  <input type="number" name="staffph" class="form-control" id="inputPassword2">
                </div>
              </tr>
<tr class="border border-info">
<td>  <div class="col-md-6">
                  <label for="sname" class="form-label">Subject Name</label>
                  <input type="text" name="staffsub[]" class="form-control" id="sname">
                </div>
                <div class="col-md-6">
                  <label for="class2" class="form-label">Class</label>
                  <select class="form-select" name="staffclass[]" id="classn" aria-label="Default select example">
                    </select>
                </div>
              </td>
<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
</tr>
</table> 
                <div class="col-12">
                  <button type="submit" id="submitbtn2" class="btn btn-primary">ADD</button>
                </div>
              </form>
        </div>

  </div>
<div id="myModal3" class="modal">
    <span class="close" id="close3">&times;</span>
  
        <div class="container add_student m-3 p-3" id="caption3">
            <form class="row g-3" role="form" id="submitForm">
            <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            </div>
                <div class="col-md-6">
                  <label for="inputEmail2" class="form-label">Course</label>
                  <input type="text" name="class_course" class="form-control" id="inputEmail2">
                </div>
                <div class="col-md-6">
                  <label for="class" class="form-label">Sem</label>
                  
            <select class="form-select" name="class_sem" id="class" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">1st</option>
  <option value="2">2nd</option>
  <option value="3">3rd</option>
  <option value="4">4th</option>
  <option value="5">5th</option>
  <option value="6">6th</option>
</select>
                </div>
                <div class="col-12">
                <button type="submit" class="btn btn-info btn btn-block" id="submitbtn">ADD</button>
                </div>
              </form>
        </div>

  </div>
  

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Jquery User Defined  -->
    <script>
      $(document).ready(function () {  
        // fetch class block
	load_data();
var count = 1;

function load_data()
{
   $( "#hell" ).remove();
  $.ajax({
    url:"fetch_class.php",
    method:"POST",
    success:function(data)
    {
      $('#class').append(data);
      $('#classn').append(data);
    }
  })
}
// end of fetch class block
// annimation
        $("#c1").show();
        $.when($('#auth_name').fadeIn(1000))
          .done(function () {
            $('#auth_name').css({ "height": "auto" });
            $('#auth_form').fadeIn(1000);
          });
        $("#next").click(function () {
          $("#c1").hide();
          $("#c2").show();
          $.when($('#auth_name1').fadeIn(1000))
          .done(function () {
            $('#auth_name1').css({ "height": "auto" });
            $('#auth_form1').fadeIn(1000);
          
          });

        });
        $("#submit").click(function () {
          $.when(swal("Thank you!", "You submitted feedback!", "success"))
          .done(function () {
            location.reload();
          });
          });
 // close animation

      // insert class
          $("#submitForm").on("submit", function(e){
          e.preventDefault();
          $("#submitbtn").text('Please wait..');
          var userForm = $(this).serialize();
          $.ajax({
              url :"insertClass.php",
              type : "POST",
              cache:false,
              data: userForm,
              success:function(response){
                load_data();
                $("#success").show();
                $("#success").html("Data inserted successfully");
                $("#submitbtn").text('ADD');
                $("#submitForm")[0].reset();
             
              }
          });
      });
       // close insert class
      // insert student
          $("#submitStudent").on("submit", function(e){
          e.preventDefault();
          $("#submitbtn1").text('Please wait..');
          var userForm = $(this).serialize();
          $.ajax({
              url :"insertClass.php",
              type : "POST",
              cache:false,
              data: userForm,
              success:function(response){
                load_data();
                $("#success1").show();
                $("#success1").html("Data inserted successfully");
                $("#submitbtn1").text('ADD');
                $("#submitStudent")[0].reset();
             
              }
          });
      });
       // close insert student



      //  dynamic staff array
      var i=1;
	$('#add').click(function(){
	i++;
	load_data();
function load_data()
{
  $.ajax({
    url:"fetch_class.php",
    method:"POST",
    success:function(data)
    {
      $('#dynamic_field').append('<tr id="row'+i+'" class="border border-info"><td> <div class="col-md-6"><label for="sname" class="form-label">Subject Name</label><input type="text" name="staffsub[]" class="form-control" id="sname"> </div> <div class="col-md-6"><label for="class2" class="form-label">Class</label><select class="form-select" name="staffclass[]"  id="class'+i+'"  aria-label="Default select example"></select></div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
      $('#class'+i+'').append(data);
    }
  })
}


});
	
$(document).on('click', '.btn_remove', function(){
var button_id = $(this).attr("id"); 
$('#row'+button_id+'').remove();
	});



  // insert staff
  $("#submitStaff").on("submit", function(e){
          e.preventDefault();
          $("#submitbtn2").text('Please wait..');
          var userForm = $(this).serialize();
          $.ajax({
              url :"insertClass.php",
              type : "POST",
              cache:false,
              data: userForm,
              success:function(response){
                load_data();
                $("#success2").show();
                $("#success2").html("Data inserted successfully");
                $("#submitbtn2").text('ADD');
                $("#submitStaff")[0].reset();
             
              }
          });
      });
  // close staff
      //close
      });
     



     
     
    </script>
<script src="./js/modal.js"></script>
</body>

</html>