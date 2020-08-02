<!DOCTYPE html>
<html>
<head>
	<title></title>
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

<style type="text/css">
body
{
	position: relative;
}
#section1
	{
		padding-top: 50px;
		height: 500px;
		color:#fff;
		background:#1e88fa;
	}
	#section2
	{
		padding-top: 50px;
		height: 500px;
		color:purple;
		background:#lightblue;
	}
	#section3
	{
		padding-top: 50px;
		height: 500px;
		color:black;
		background:orange;
	}
	#section41
	{
		padding-top: 50px;
		height: 500px;
		color:black;
		background:pink;

	}
	#section42
	{
		padding-top: 50px;
		height: 500px;
		color:black;
		background:grey;
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
			<a class="navbar-brand" href="#">website name</a>
		
		</div>
	<div>
	<div class="collapse navbar-collapse" id="mynavbar">
		<ul class="nav navbar-nav">
			<li><a href="#section1">section 1</a></li>
			<li><a href="#section2">section 2</a></li>
			<li><a href="#section3">section 3</a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">section 4<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#section41">section 4-1</a></li>
						<li><a href="#section42">section 4-2</a></li>
					</ul>
							
						</li>
						
					</ul>
					
				
			
		
		</div>
	 </div> 
</div>
</nav>

	<div id="section1" style="margin-top: 60px;">
		<h1>section 1</h1>
	</div>
	<div id="section2">
		<h1>section 2</h1>
	</div>
	<div id="section3">
		<h1>section 3</h1>
	</div>
	<div id="section41">
		<h1>section 41 submenu 1</h1>
	</div>
	<div id="section42">
		<h1>section 42 submenu 2</h1>
	</div>
	
	

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
</body>
</html>