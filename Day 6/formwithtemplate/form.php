<?php
	$connection=mysqli_connect("localhost","root","","db_internship");
	if($_POST){
      $id=$_POST['txt1'];
	 $password=$_POST['txt2'];		
		$q=mysqli_query($connection ,
		"insert into tbl_login(user_id ,password )  values('$id','$password')")or die(mysqli_error($connection));

		echo "<script >alert('Login record added')</script>";
	}




?> 


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<title>Registration form </title>
	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	
	<div class="container">
		<div class="form-body">
			<div class="button-box">
				   <div id="btn"  class="divbtn"></div>
			<button type="button" class="input-btn" id="loginbtn">Login</button>
			<button type="button" class="input-btn" id="registerbtn">Register</button>
		    </div>

			<div class="social-media">
				<i class="fab fa-facebook-f"></i>
				<i class="fab fa-twitter"></i>
				<i class="fab fa-whatsapp"></i>
			</div>


			<div class="form-box" >
				<form class="form-con" id="login" method="post">
				
                    <i class="fas fa-check" id="fachecks"></i>
				
				<input type="text" id="name" placeholder="User id" class="input  input-txt" name="txt1">

				
                <i class="fas fa-check" id="rfas"></i>
				<input type="password" id="password" placeholder="Enter Password" class="input input-txt " name="txt2" >
				<input type="checkbox" name="" ><span>Remember Password</span>
				<input type="submit" id="lbtn" class=" input-button" value="Log In">
			    </form>

			    <form class="form-con register" id="register" method="post" action="db.php">
			    <i class="fas fa-check" id="regname"></i>
				<input type="text" id="rname" placeholder="User id" class="input  input-txt" name="txt3">

				<i class="fas fa-check" id="regpass"></i>
				<input type="password" id="rpassword"  placeholder="Enter Password" class="input input-txt " name="txt4" >

				<i class="fas fa-check" id="regemail"></i>
				<input type="email" id="email" placeholder="Email" class="input" name="txt5">
				<input type="checkbox"  ><span>I agree the terms and conditions</span>
				<input  type="submit" id="rbtn" class=" input-button" value="Register">
			    </form>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="script.js">
		
		
	</script>
    


    

</body>
</html>