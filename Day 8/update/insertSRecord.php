<?php

$connection=mysqli_connect("localhost","root","","db_internship");
if($_POST){

	$id=$_POST['txt1'];
	$name=$_POST['txt2'];
	$gender=$_POST['txt3'];
	$mobileNo=$_POST['txt4'];

   $q=mysqli_query($connection,
   "insert into tbl_stu(student_id ,student_name ,student_gender ,student_mobile) values('$id','$name','$gender','$mobileNo')")or die(mysqli_error($connection));
}

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insert Records Page</title>
</head>
<body>


	<form method="post">
		<table border="1px">
			<tr>
				<td>Student-Id</td>
				<td><input type="text" name="txt1"></td>
			</tr>

			<tr>
				<td>Student-Name</td>
				<td><input type="text" name="txt2"></td>
			</tr>

			<tr>
				<td>Student-Gender</td>
				<td>Male<input type="radio" name="gender">
					Female<input type="radio" name="gender"></td>
			</tr>

			
			<tr>
				<td>Student-MobileNo</td>
				<td><input type="number" name="txt4"></td>
			</tr>

			<tr>
				<td><input type="submit"></td>
			</tr>

		

		</table>
		 <a href='stu_table.php'> Display Records</a>;
	</form>

</body>
</html>
