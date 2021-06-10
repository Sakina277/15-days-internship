<?php

$connection=mysqli_connect("localhost","root","","db_internship");   
   $editid=$_GET['id'];
   $editq=mysqli_query($connection,
    "select * from tbl_stu where student_id='{$editid}'")or die(mysqli_error($connection));
    
    $editdata=mysqli_fetch_array($editq);
    if($_POST){
        $id=$_POST['txt1'];
        $name=$_POST['txt2'];
        $gender=$_POST['gender'];
        $mobileNo=$_POST['txt4'];
        $uq=mysqli_query($connection,
            "update tbl_stu  student_id='{$id}',student_name='{$name}',student_gender='{$gender}',student_mobile='{$mobileNo}'where student_id='{$editid}'")or die(mysqli_error($connection));
        if($uq){
            echo "<script>alert('record updated');window.location='stu_table.php';</script>";
        }

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
                <td><input type="text" name="txt1" value="<?php echo  $editdata['student_id']?>"></td>
            </tr>

            <tr>
                <td>Student-Name</td>
                <td><input type="text" name="txt2" value="<?php echo  $editdata['student_name']?>"></td>
            </tr>
            <tr>
                <td>Student-Gender</td>
                <td>Male<input type="radio" name="gender"  <?php
                 if($editdata["student_gender"]=='Male'){
                    echo 'checked';
                 }
                    ?>  value="Male">
                Female<input type="radio" name="gender"
                <?php
                 if($editdata["student_gender"]=='Female'){
                    echo 'checked';
                 }
                    ?> value="Female"></td>
            </tr>

            
            
            <tr>
                <td>Student-MobileNo</td>
                <td><input type="number" name="txt4" value="<?php echo  $editdata['student_mobile']?>"></td>></td>
            </tr>

            <tr>
                <td><input type="submit"></td>
            </tr>

        

        </table>
         <a href='stu_table.php'> Display Records</a>;
    </form>

</body>
</html>
