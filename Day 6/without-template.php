<?php

	$connection=mysqli_connect("localhost","root","","db_internship");
	if($_POST){
      $id=$_POST['txt1'];
		$name=$_POST['txt2'];
		$gender=$_POST['txt3'];
		$dob=$_POST['txt4'];
			$email=$_POST['txt5'];
				$mobile=$_POST['txt6'];
					$address=$_POST['txt7'];
						$password=$_POST['txt8'];
							$pincode=$_POST['txt9'];
								$pmobile=$_POST['txt10'];

		$q=mysqli_query($connection ,
		"insert into tbl_student(student_id ,student_name, student_gender	,student_dob, student_email,student_mobile ,student_address	,student_password, student_pincode ,student_pmobile)  values('$id','$name','$gender','$dob','$email','$mobile','$address','$password','$pincode','$pmobile')")or die(mysqli_error($connection));
	}








?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Table Student</title>
	
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Student-Id:-<input type="text" name="txt1"></td>
			</tr>

			<tr>
				<td>Student-Name:-<input type="text" name="txt2"></td>
			</tr>

			<tr>
				<td>Student-Gender:-<select name="txt3">
					<option>Male</option>
					<option>Female</option>
				</select></td>
			</tr>

			<tr>
				<td>Student-DOB:-<input type="date" name="txt4"></td>
			</tr>

			<tr>
				<td>Student-Email:-<input type="email" name="txt5"></td>
			</tr>

			<tr>
				<td>Student-MobileNo:-<input type="number" name="txt6"></td>
			</tr>

			<tr>
				<td>Student-Address:-<input type="text" name="txt7"></td>
			</tr>

			<tr>
				<td>Student-Password:-<input type="password" name="txt8"></td>
			</tr>

			<tr>
				<td>Student-pincode:-<input type="number" name="txt9"></td>
			</tr>


			<tr>
				<td>Student-parentMobNo:-<input type="number" name="txt10"></td>
			</tr>

			<tr>
				<td><input type="submit" name="txt11"></td>
			</tr>


		</table>
	</form>

</body>
</html>