
<html>
	<head>
		<title>Ajax Crud on Dynamically Add Remove Input Fields in PHP</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<br />
			<br />
			<h2 align="center">STAFF Crud Operations</h2><br />
			<div align="right">
				<!-- <button type="button" name="add" id="add" class="btn btn-info">Add</button> -->
				<a href="../"><button type="button" name="add" id="add" class="btn btn-success">BACK</button></a>
			</div>
			<br />
			<div id="result"></div>
		</div>
	</body>
</html>

<div id="dynamic_field_modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="post" id="add_name">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add Details</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
		      			<input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" />
		      		</div>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="hidden_id" id="hidden_id" />
					<input type="hidden" name="action" id="action" value="insert" />
					<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
				</div>
			</form>
		</div>
	</div>

</div>


<script>
$(document).ready(function(){

	load_data();

	var count = 1;

	function load_data()
	{
		$.ajax({
			url:"fetch.php",
			method:"POST",
			success:function(data)
			{
				$('#result').html(data);
			}
		})
	}


	$('#add').click(function(){
		$('#dynamic_field').html('');
		$('.modal-title').text('Add Details');
		$('#action').val("insert");
		$('#submit').val('Submit');
		$('#add_name')[0].reset();
		$('#dynamic_field_modal').modal('show');
	});

	$('#add_name').on('submit', function(event){
		event.preventDefault();
		if($('#name').val() == '')
		{
			alert("Enter Your Question");
			return false;
		}
else
		{
			var form_data = $(this).serialize();

			var action = $('#action').val();
			$.ajax({
				url:"action.php",
				method:"POST",
				data:form_data,
				success:function(data)
				{
					if(action == 'insert')
					{
						alert("Data Inserted");
					}
					if(action == 'edit')
					{
						alert("Data Edited");
					}
					load_data();
					$('#add_name')[0].reset();
					$('#dynamic_field_modal').modal('hide');
				}
			});
		}
	});

	$(document).on('click', '.edit', function(){
		var id = $(this).attr("id");
		$.ajax({
			url:"select.php",
			method:"POST",
			data:{id:id},
			dataType:"JSON",
			success:function(data)
			{
				$('#name').val(data.question);
				$('#action').val('edit');
				$('.modal-title').text("Edit Details");
				$('#submit').val("Edit");
				$('#hidden_id').val(id);
				$('#dynamic_field_modal').modal('show');
			}
		});
	});

	$(document).on('click', '.delete', function(){
		var id = $(this).attr("id");
		if(confirm("Are you sure want to remove this data?"))
		{
			$.ajax({
				url:"delete.php",
				method:"POST",
				data:{id:id},
				success:function(data)
				{
					load_data();
					alert("Data removed");
				}
			})
		}
	});

});
</script>




