<?php

//DB connection
$connection=mysqli_connect("localhost","root","","db_internship");

//Query
// to perform display operation select query is fire
$q=mysqli_query($connection,
           "select * from  tbl_student")or die(mysqli_error($connection));


// fetch 1st row fetch data as a numerical error
$row=mysqli_fetch_row($q);
// debug
print_r($row);
echo "<br>";
echo "<br>";

echo $row[0].$row[1].$row[2].$row[3].$row[4].$row[5].$row[6].$row[7];


// numerical and associative data given to us 
$row=mysqli_fetch_array($q);
echo "<pre>";
print_r($row);
echo "</pre>";

echo $row['student_id'].$row['student_name'].$row['student_gender'];