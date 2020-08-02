<!DOCTYPE html>
<html>
<head>
	<title>Reddy Bank</title>
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

<!-- fontawesome CDN -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<!-- fontawesome CDN ends -->

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- CDN END-->

<!-- icon -->
<link rel="icon" type="image/png" href="img/logo.png">
<!-- icon end -->



<style type="text/css">
	body
	{
		position: relative;
	}
	.btn2{
		color: white;
		background: #685c5c;
		border-radius: 100px;
		text-transform: uppercase;
		border: 2px solid white;
	}
	.jumbotron
	{
		background: #685c5c;
		color: white;
		margin-top: 1%;
		padding: 17%;
	}
	.content
	{
		text-align: justify;
		font-size: 110%;
	}
	.sizer
	{
		font-size: 260%;
		color:blue;
	}

</style>
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
			<a class="navbar-brand" href="#">Reddy</a>
		
		</div>
	<div>
	<div class="collapse navbar-collapse" id="mynavbar">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#home">Home</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#services">Services</a></li>
			<li><a href="#maps">Location</a></li>

				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">User<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="reg/">Signup</a></li>
						<li><a href="user/">Login</a></li>
					</ul>
							
						</li>
						
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

<div class="jumbotron text-center container-fluid" id="home" style="margin-bottom: 0px;">
	<div class="row">
		<center>
		<div class="col-sm-6 col-sm-offset-3">
			<h2 style="padding: 1%;">REDDY BANK</h2>
			<h2 style="padding: 1%;">Your Online Bank Buddy</h2>
			<a href="reg/">
				<button class="btn btn-promary btn2">Sign up</button></a>
			<a href="user/">	<button class="btn btn-promary btn2">login</button>

			</a>
		</div>
		
	</div>
	
</div>
<br><br><br>
<div class=" content container" id="about" >
	<div class="row" >
		<h2 style="margin-top: 5%;">About Us</h2>
		<p>
				 Reddy Bank is India's fourth[2] largest private sector bank, founded by Narsi Reddy Moku in 2004. Reddy Bank is the only Greenfield Bank licence awarded by the RBI in the last one decade. YES BANK is a “Full Service Commercial Bank”, and has steadily built a Corporate, Retail & SME Banking franchise, Financial Markets, Investment Banking, Corporate Finance, Branch Banking, Business and Transaction Banking, and Wealth Management business lines across the country.
			
		</p>
		
	</div>
	
</div>
<hr><br><br>
<div class="container" id="services">
	<h2 style="margin-top: 5%;">Our Services</h2>
	<center>
	<div class="row">
		
		<div class="col-sm-4"><i class="fas fa-money-check-alt sizer"></i>
			<h4>Instant Loans</h4>
			<p>Description Here</p>


		</div>

		
		<div class="col-sm-4"><i class="fas fa-money-check-alt sizer"></i>
			<h4>Instant Loans</h4>
			<p>Description Here</p>
		</div>

		
		
		<div class="col-sm-4"><i class="fas fa-money-check-alt sizer"></i>
			<h4>Instant Loans</h4>
			<p>Description Here</p>


		</div>
	</div>
	<div class="row">
	
		<div class="col-sm-4"><i class="fas fa-money-check-alt sizer"></i>
			<h4>Instant Loans</h4>
			<p>Description Here</p>


		</div>

		
		<div class="col-sm-4"><i class="fas fa-money-check-alt sizer"></i>
			<h4>Instant Loans</h4>
			<p>Description Here</p>
		</div>

		
		
		<div class="col-sm-4"><i class="fas fa-money-check-alt sizer"></i>
			<h4>Instant Loans</h4>
			<p>Description Here</p>


		</div>
	</div>
	<div class="row">
		
		<div class="col-sm-4"><i class="fas fa-money-check-alt sizer"></i>
			<h4>Instant Loans</h4>
			<p>Description Here</p>


		</div>

		
		<div class="col-sm-4"><i class="fas fa-money-check-alt sizer"></i>
			<h4>Instant Loans</h4>
			<p>Description Here</p>
		</div>

		
		
		<div class="col-sm-4"><i class="fas fa-money-check-alt sizer"></i>
			<h4>Instant Loans</h4>
			<p>Description Here</p>


		</div>
	</div>
	</center>
</div>

<hr><br><br>
<!-- lacations maps -->
<div class="container" id="maps" >
	<div class="row">
		<div class="col col-sm-3">
		<h2 style="margin-top: 20%;">Location</h2>
		<p> Satellite Park, <br>Jogeshwari,<br> Mumbai.</p>
		
	</div>
	<div class="col-sm-9">
		<!-- maps -->
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.3411975779627!2d72.85050142697091!3d19.13653640431456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b62cdb76c4ff%3A0x9f9d2671292df7df!2sSatellite+Park!5e0!3m2!1sen!2sin!4v1528348764920" width="600" height="450" frameborder="0" style="border:0;width: 100%;" allowfullscreen></iframe>
	</div>
</div>
</div>



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
