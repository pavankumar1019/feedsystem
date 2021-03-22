<?php
	// include database connection file

	include "database_connection.php";

	// insert data from users table..

	if (isset($_POST['class_course'])) {
        $co=$_POST["class_course"];
        $se=$_POST["class_sem"];
        $classcourse = strip_tags(trim($_POST["class_course"]));
        $classsem = strip_tags(trim($_POST["class_sem"]));
        $duplicate=mysqli_query($con,"select * from class where course='$co' and sem='$se'");
        if (mysqli_num_rows($duplicate)>0)
        {
           
        }
        else{
            $query = "INSERT INTO class (course,sem) VALUES('$classcourse','$classsem')";
            $result = mysqli_query($con, $query);
            
            if ($result ===true) {
                return true;
            }else{
                return false;
            }
        }

	
	}

	// insert student 
	if (isset($_POST['stdname'])) {
		$stdname = strip_tags(trim($_POST["stdname"]));
		$stdreg = strip_tags(trim($_POST["stdreg"]));
		$stdph = strip_tags(trim($_POST["stdph"]));
		$stdclass = strip_tags(trim($_POST["stdclass"]));


		$query = "INSERT INTO student_info (name,reg_no,phone,class_id) VALUES('$stdname','$stdreg','$stdph','$stdclass')";
		$result = mysqli_query($con, $query);
		
		if ($result ===true) {
		    return true;
		}else{
		    return false;
		}
	}
	
	// insert the staff
	if (isset($_POST['staffname'])) {
		$staffname=strip_tags(trim($_POST["staffname"]));
		$staffemail=strip_tags(trim($_POST["staffemail"]));
		$staffph=strip_tags(trim($_POST["staffph"]));	

		$count = count($_POST["staffsub"]);
		//Getting post values
		$staffsub=$_POST["staffsub"];	
		$staffclass=$_POST["staffclass"];

		if($count >=0)
		{
			for($i=0; $i<$count; $i++)
			{
				if(trim($_POST["staffsub"][$i] != ''))
				{
				$sql =mysqli_query($con,"INSERT INTO staff(name,email,phone,sub,class_id) VALUES('$staffname','$staffemail','$staffph','$staffsub[$i]','$staffclass[$i]')");
				}
			}
		echo "<script>alert('Added successfully');</script>";
		}
		else
		{
		echo "<script>alert('Please enter skill');</script>";
		}
	}


	// Counting No fo skilss

?>