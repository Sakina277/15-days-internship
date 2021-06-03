<?php
$host="localhost";
$username="root";
$passwd="";
$dbname="db_internship";

$connection=mysqli_connect($host,$username,$passwd,$dbname);
if($_POST){
	$name=$_POST['txt1'];
	$gender=$_POST['txt2'];
	$mobile=$_POST['txt3'];

	$q=mysqli_query($connection,
		"insert into tbl_students(student_name ,student_gender ,student_mobile) values('$name','$gender','$mobile')")or die("error".mysqli_error($connection));
}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form page</title>
</head>

<body>
<form method="post">
   <table border="1" style="border-collapse: collapse;">
   	<tr>
   		<td>Name:<input type="text" name="txt1"></td>
   	</tr>

   	<tr>
   		<td>Gender:-<select name="txt2">
   			       <option>Male</option>
   			       <option>Female</option>
   		</select>
   		</td>
   	</tr>

   	<tr>
   		<td>Mobile Number<input type="number" name="txt3">
   		</td>
   	</tr>

   	<tr>
   		<td><input type="submit" name="">
   		</td>
   	</tr>
   	

   </table>
</form>
</body>

</html>



