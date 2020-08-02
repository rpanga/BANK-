<?php 
session_start(); 
include("../db/dbconfig.php");
if(isset($_POST['Login']))

	{
 	$email=$_POST['email'];
 	$password=$_POST['password'];

	$query= "SELECT * FROM user WHERE email='$email' AND password = '$password'";
	$iquery=mysql_query($query);
	$a=mysql_num_rows($iquery) ;
	if ($a==1)
 		{

 	//conditions verified
 			$_SESSION['loginstatus']=1;
 			$_SESSION['useremail']=$email;

	?>
 	<script type="text/javascript">
    	
    	 window.location="useraccount.php";
	</script>

 	<?php
 }
else
	{

  	?>
 	<script type="text/javascript">
    	alert("Username or password Incorrect");
 
	</script>
	<?php
	}
 	
 
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
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
<nav class="navbar navbar-inverse navbar-fixed-top">
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
	<h2>Login </h2>
	<br>
		<form method="POST">
		
			
				
			

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 form-group">
					<input type="email" name="email" placeholder="Enter Your Email" class="form-control" required>
					
				</div>
				
			</div>

			
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 form-group">
					<input type="password" name="password" placeholder="Enter a new password" class="form-control" required>
					
				</div>
			</div>

			

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 form-group">
					<input type="submit" name="Login" class="btn btn-primary form-control" value="LOGIN" >
					
				</div>
			</div>
		</form>

</div>
</center>

</body>
</html>