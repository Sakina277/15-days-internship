<?php
$connection=mysqli_connect("localhost","root","","db_internship");

$id=$_GET['deleteid'];
$q=mysqli_query($connection,
    "delete from tbl_stu")or die(mysqli_error($connection));
if($q){
    echo "<script>window.location='stu_table.php'</script>";
}