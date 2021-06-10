<?php

$connection=mysqli_connect("localhost","root","","db_internship");
$q=mysqli_query($connection,
    "select * from tbl_stu")or die(mysqli_error($connection));
    $i=0;

   echo "<table border='1'>";
   echo "<th>Id</th>";
   echo "<th>Name</th>";
   echo "<th>Gender</th>";
   echo "<th>Mobile No</th>";
   echo "<th colspan=2>Action</th>";
   
   while($row=mysqli_fetch_array($q)){
    $i++;
   	echo "<tr>";
   	echo "<td>{$i}</td>";
   	echo "<td>{$row['student_name']}</td>";
   	echo "<td>{$row['student_gender']}</td>";
   	echo "<td>{$row['student_mobile']}</td>";
    echo "<td><a href='edit.php?id={$row["student_id"]}'>Edit</a></td>";
    echo "<td><a href='delet.php?deleteid={$row["student_id"]}'>Delete</a></td>";
   	echo "</tr>";
   }
   echo "</table>";
   echo "<a href='insertSRecord.php'>Add Records</a>";