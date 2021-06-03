<?php

$host="localhost";
$username="root";
$passwd="";
$dbname="db_internship";
// connection function
$connection=mysqli_connect($host, $username ,$passwd , $dbname);

$q=mysqli_query($connection,
	   "insert into tbl_student(student_name ,student_gender) values('amatullah','female')") 
         or die("Error".mysqli_error($connection));

         if($q){
         	echo "<script>alert('Record added')</script>";
         }

	