<?php

$connection=mysqli_connect("localhost","root","","db_internship");
if($_POST){

	$id=$_POST['txt1'];
	$name=$_POST['txt2'];
	$gender=$_POST['txt3'];
	$mobileNo=$_POST['txt4'];

   $q=mysqli_query($connection,
   "insert into tbl_user(user_id ,user_name ,user_gender ,user_mobile) values('$id','$name','$gender','$mobileNo')")or die(mysqli_error($connection));
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
				<td>User-Id</td>
				<td><input type="text" name="txt1"></td>
			</tr>

			<tr>
				<td>User-Name</td>
				<td><input type="text" name="txt2"></td>
			</tr>

			<tr>
				<td>User-Gender</td>
				<td><select name="txt3">
					<option>Male</option>
					<option>Female</option>
				</select></td>
			</tr>

			
			<tr>
				<td>User-MobileNo</td>
				<td><input type="number" name="txt4"></td>
			</tr>

			<tr>
				<td><input type="submit"></td>
			</tr>

		

		</table>
		 <a href='table.php'> Display Records</a>;
	</form>

</body>
</html>
