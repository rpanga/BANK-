<?php
$flag=0;
include("../db/dbconfig.php");

if(isset($_POST['submit']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $gender=$_POST['gender'];
  $branch=$_POST['branch'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  $balance=1000;

  //checking whether password is same or not

 if($password!=$cpassword)
 {
 	$flag=1;
 	?>
 <script type="text/javascript">
    	alert("password do not match");
    	// window.location="../";
</script>

 	<?php
 }

// checking existence of email in database

$e="SELECT * FROM user WHERE email='$email'";
$eres=mysql_query($e,$conn);
$ec=mysql_num_rows($eres);
if($ec>0)
{
	$flag=1
	?>
 	<script type="text/javascript">
    	alert("User with same email already exists");
    	window.location="../reg/";
</script>

	<?php
}

// checking existence of contact in database

$p="SELECT * FROM user WHERE contact='$contact'";
$pres=mysql_query($p,$conn);
$pc=mysql_num_rows($pres);
if(pc>0)
{
	$flag=1
	?>
 	<script type="text/javascript">
    	alert("User with same phone number already exists");
    	window.location="../reg/";
</script>

	<?php
}


$iq="INSERT INTO user (fname,lname,email,contact,gender,branch,password,balance) VALUES ('$fname','$lname','$email','$contact','$gender','$branch','$password','$balance')";
if($flag==0)
{
	$r=mysql_query($iq,$conn);
}
if($r)
{
	?>
    <script type="text/javascript">
    	alert("Registered");
    	 window.location="../";
</script>
	<?php
}
else
{
	?>
    <script type="text/javascript">
    	alert("not Registered");
    	 window.location="../reg/";
</script>
	<?php


}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<!-- META encoding  -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale =1">
	<meta name="description" content="website description" >
	<meta name="keyword" content="xyz,abc">
 	

 	<!-- Bootstrap CDN -->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- CDN END-->

<!-- icon -->
<link rel="icon" type="image/png" href="img/logo.png">
<!-- icon end -->


</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">REDDY BANK</a>
		
		</div>
	<div>
	<div class="collapse navbar-collapse" id="mynavbar">
		<ul class="nav navbar-nav navbar-right" >
			<li><a href="../">Home</a></li>
			
						
					</ul>
					
				
			
		
		</div>
	 </div> 
</div>
</nav>

	
	

<!-- smooth scroll code -->
<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

   // Add smooth scrolling on all links inside the navbar
  $("#mynavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>
<!-- smooth scroll code ends -->

<center>
<div class="container" style="margin-top: 7%;">
	<h2>Sign Up For an Account</h2>
	<br>
		<form method="POST">
		
			<div class="row">
			
	

				<div class="col-sm-6 col-sm-offset-3 form-group">
					<input type="text" name="fname" placeholder="Enter Your Firstname" class="form-control" required>
					
				</div>
				
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 form-group">
					<input type="text" name="lname" placeholder="Enter Your lastname" class="form-control" required>
					
				</div>
				
			</div>

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 form-group">
					<input type="email" name="email" placeholder="Enter Your Email" class="form-control" required>
					
				</div>
				
			</div>

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 form-group">
					<input type="number" name="contact" placeholder="Enter Your contact number" class="form-control" required>
					
				</div>
				
			</div>

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 form-group">
				<select name="gender" class="form-control">
					<option value="" disabled selected="">SELECT GENDER</option>
					<option value="M">MALE</option>
					<option value="F">FEMALE</option>

					
			</select>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 form-group">
				<select name="branch" class="form-control">
					<option value="" disabled selected="">SELECT BRANCH</option>
					<option value="0">ANDHERI</option>
					<option value="1">BANDRA</option>
					<option value="2">WORLI</option>
					<option value="3">MAHIM</option>


					
			</select>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 form-group">
					<input type="password" name="password" placeholder="Enter a new password" class="form-control" required>
					
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 form-group">
					<input type="password" name="cpassword" placeholder="Confirm password" class="form-control" required>
					
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 form-group">
					<input type="submit" name="submit" class="btn btn-primary form-control" >
					
				</div>
			</div>
		</form>

</div>
</center>

<nav id="footer" style="background-color: black; color: white; padding: 10px;">
	<div class="container">
		<div class="pull-left">
			<p>2018.&copyAll Rights Reserved. Designed and coded by Rahul Panga</p>
			<a href="" target="_blank">Rahul Panga</a> 
		</div>
		<div class="pull-right"> 
			&copyMRM
		</div>
	</div>
	
</nav>
</body>
</html>
