<!DOCTYPE html>
<html>
<head>
	<title>Mizan-Tepi university</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body >
	<header class="navbar bg-dark navbar-static-top">
		<div class="container">
			
			<ul class="nav navbar float-left">
				<li ><a href="index.php" class="btn btn-light btn-outline-primary mr-sm-2 active">home</a></li>
				<li ><a href="searchpage.php" class="btn btn-outline-danger mr-sm-2">Search</a></li>
				<li ><a href="circulation/circulation.php" class="btn btn-outline-light mr-sm-2">Circulation</a></li>
				<li ><a href="loan/loan_home.php" class="btn btn-outline-success mr-sm-2">loan</a></li>
				<li ><a href="comment/give_comment.php" class="btn btn-outline-success mr-sm-2">Comment</a></li>	
				<li ><a href="about.php" class="btn btn-outline-success mr-sm-2">About</a></li>
				<li ><a href="contact_us.php" class="btn btn-outline-success mr-sm-2">Contact Us</a></li>
				
			</ul>
			<li class="nava navbar"><a href="admin/login.php" class="btn btn-outline-info mr-sm-2 float-right">admin</a></li>	
		</div>
	</header>
	<div class="jumbotron col-sm-5 float-left" style="float:left;width: 40%">

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
				 	<img class="d-block w-80" src=image/bg5.jpg alt="First slide">
				</div>
				<div class="carousel-item">
				 	<img class="d-block w-80" src="image/bg4.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
				 	<img class="d-block w-80" src="image/bg3.jpg" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
<div class="float-right container jumbotron" style="float:right;width: 50%">
	<p>
	The website is used to implement search and book lending management,therefore
	The system provided a simple interface for quick book searching, lending and returning. 
	The interface was designed to be mainly used for the common browsers, making the system migration and usage easier.
</p><hr><hr>
	
</div>



</body>
</html>