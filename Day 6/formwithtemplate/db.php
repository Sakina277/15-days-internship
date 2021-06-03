 
	<?php
	$connection1=mysqli_connect("localhost","root","","db_internship");
	if($_POST){
      $id=$_POST['txt3'];
	 $password=$_POST['txt4'];
	 $email=$_POST['txt5'];
		
		$q1=mysqli_query($connection1 ,
	"insert into tbl_register(user_id ,password,email)  values('$id','$password','$email')")or die(mysqli_error($connection1));

		echo "Record added";
	}
			?>


