<?php
session_start();
include("../db/dbconfig.php");
$a=$_SESSION['loginstatus'];
$e=$_SESSION['useremail']; 
if($a==1)
{

}
else
{
header('location:../user/');
}

$query="SELECT * FROM user WHERE email='$e'";
$iquery=mysql_query($query,$conn);
$result=mysql_fetch_assoc($iquery);
$balance=$result['balance'];
$fname=$result['fname'];
$lname=$result['lname'];
$contact=$result['contact'];  

 if (isset($_POST['update']))
{
	$n_fname=$_POST['fname'];
	$n_lname=$_POST['lname'];
	$n_password=$_POST['password'];
	$n_cpassword=$_POST['cpassword'];

	$u_query="UPDATE user SET fname='$n_fname',lname='$n_lname',password='$n_password' WHERE email='$e' ";
	$e_query=mysql_query($u_query,$conn);
	if($e_query)
	{
		?>
 <script type="text/javascript">
    	alert("Update Successfully");
    	
</script>

 	<?php

	}
else
{
	?>
 <script type="text/javascript">
    	alert("Update Failed");
    	
</script>

 	<?php
}

}

if (isset($_POST['submit'])) 
{
	$r_contact=$_POST['contact'];
	$r_amount=$_POST['amount'];



	if ($r_amount>$balance)
	 {

		?>
 <script type="text/javascript">
    	alert("Insufficient balance or invalid amount");
    	window.location="useraccount.php"
    	
</script>

 	<?php

	}
	else
	{


//fetching balance samne wale ka


	$r_query="SELECT * FROM user WHERE contact = '$r_contact' ";
	$r_exe=mysql_query($r_query,$conn);
	$r_result=mysql_fetch_assoc($r_exe);
	$r_balance=$r_result['balance'];

//adding samne wala ka balance

	$r_bal=$r_balance+$r_amount;

	// uska balnace update karna 

	$nn="UPDATE user SET balance='$r_bal' WHERE contact='$r_contact'";
	$nr=mysql_query($nn,$conn);

	if ($nr) 
	{
		?>
 <script type="text/javascript">
    	alert("Paid Successfully");
    	
</script>

 	<?php
	}
	else
	{
		?>
 <script type="text/javascript">
    	alert("payment Failed");
    	
</script>

 	<?php
	}

	//apne mei se paise substract krneka

	$my_balance=$balance-$r_amount;

	//apna update krne ka
{
	$nn1="UPDATE user SET balance='$my_balance' WHERE email='$e'";
	$nr1=mysql_query($nn1,$conn);

	if ($nr1) 
	{
		?>
 <script type="text/javascript">
    	alert("Deducted Successfully");
    	window.location="useraccount.php"
    	
</script>

 	<?php
	}
	else
	{
		?>
 <script type="text/javascript">
    	alert("Deduction Failed");
    	
</script>

 	<?php
	}
	}
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Acoount</title>
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
<nav class="navbar navbar-inverse ">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">HI <?php echo $fname  ?></a>
		
		</div>
	<div>
	<div class="collapse navbar-collapse" id="mynavbar">
		<ul class="nav navbar-nav navbar-right" >
			<li><a href="logout.php">Logout</a></li>
			
						
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


<div class="container" style="margin-top: 7%;">
	<center>
	<h2>Your Account</h2></center>
	<br>

	</div>	
<div class="container">
  
 
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#balance">Balance</a></li>
    <li><a data-toggle="tab" href="#pay">Pay</a></li>
    <li><a data-toggle="tab" href="#update">Update</a></li>
    <li><a data-toggle="tab" href="#feedback">Feedback</a></li>
  </ul>

  <div class="tab-content">
    <div id="balance" class="tab-pane fade in active">
      <h3>Your Balance</h3>
      <p>Rs <?php echo "$balance"; ?>/-</p>
    </div>

    <div id="pay" class="tab-pane fade">
      <h3>New Transaction</h3>
      <form method="POST">
      	<div class="row">
      		<div class="col-sm-10 from-group">
      			<input type="number" name="contact" class="form-control" placeholder="TO" autofocus="" required="">
      			
      		</div>
      		
      	</div>
      	<br>
      	<div class="row">
      		<div class="col-sm-10 from-group">
      			<input type="number" name="amount" class="form-control" placeholder="Amount to be paid" autofocus="" required="">
      			
      		</div>
      		
      	</div>
      		<br>
      	<div class="row">
      		<div class="col-sm-10 from-group">
      			<input type="submit" name="submit" class="form-control btn btn-primary" value="PAY">
      			
      		</div>
      		
      	</div>
      </form>
     
    </div>

    <div id="update" class="tab-pane fade">
      <h3>Update Your Info</h3>
     <form method="POST">
      	<div class="row">
      		<div class="col-sm-10 from-group">
      			<input type="text" name="fname" class="form-control" placeholder="First name"  required="" value="<?php echo $fname ?>">
      			
      		</div>
      		
      	</div>
      	<br>
      	<div class="row">
      		<div class="col-sm-10 from-group">
      			<input type="text" name="lname" class="form-control" placeholder="last name" value="<?php echo $lname ?>" required="">
      			
      		</div>
      		
      	</div>
      	
      	<br>

      	<div class="row">
      		<div class="col-sm-10 from-group">
      			<input type="password" name="password" class="form-control" placeholder="Set New Password" autofocus="" required="">
      			
      		</div>
      		
      	</div>
      		<br>

      		<div class="row">
      		<div class="col-sm-10 from-group">
      			<input type="password" name="cpassword" class="form-control" placeholder="Confirm New Password" autofocus="" required="">
      			
      		</div>
      		
      	</div>
      	<br>
      	<div class="row">
      		<div class="col-sm-10 from-group">
      			<input type="submit" name="update" class="form-control btn btn-primary" value="Update">

      			
      		</div>
      		
      	</div>

      </form>
    </div>

    <div id="feedback" class="tab-pane fade">
      <h3>Feedback</h3>
     <form method="POST">
      	<div class="row">
      		<div class="col-sm-10 from-group">
      			<textarea name="Feedback" class="form-control" placeholder="Your Feedback HERE" style="resize: vertical;">
      				
      			</textarea>
      		</div>
      	</div>
      	<br>
      		<div class="row">
      			<div class="col-sm-10 from-group">
      				<input type="submit" name="feeback_btn" class="btn btn-danger form-control">
      				
      			</div>
      			
      		</div>	
      </form>
    </div>

  </div>
</div>


</div>

<br><br><br><br><br><br>
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
