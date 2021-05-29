<!DOCTYPE html>
<html>
<head>
	<title>Mizan-Tepi university</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body style="background-image: url('image/bg9.jpg'); background-size: 100%">

	<header class="navbar bg-dark navbar-static-top">
		<div class="container">	
			<ul class="nav navbar float-left">
				<li ><a href="index.php" class="btn btn-light btn-outline-light mr-sm-2">home</a></li>
				<li ><a href="searchpage.php" class="btn btn-outline-danger mr-sm-2 active">Search</a></li>
				<li ><a href="circulation/circulation.php" class="btn btn-outline-light mr-sm-2">Circulation</a></li>
				<li ><a href="loan/loan_home.php" class="btn btn-outline-success mr-sm-2">loan</a></li>
				<li ><a href="comment/give_comment.php" class="btn btn-outline-success mr-sm-2">Comment</a></li>	
				<li ><a href="about.php" class="btn btn-outline-success mr-sm-2">About</a></li>
				<li ><a href="contact_us.php" class="btn btn-outline-success mr-sm-2">Contact Us</a></li>
			</ul>	
		</div>
	</header>
	<div class="jumbotron col-sm-10 container" id="search" style="opacity: 0.9">
		<a href="admin/login.php"> <button class="btn btn-light float-right h5">admin</button></a>
		<img src="image/mtu.jpg" class="rounded-circle" alt="logo" height="200px" width="200px"> <br> <br>
		<P><b>Hint:</b>select your collage or  school then search the book by title,author or year of publication or <br>click all books button to display all books</P>
	    <form method="post" action="user/search.php" class="form-inline">
	    	<select name="collage" class="form-control col-sm-3 mr-sm-3">
  				<option selected="" value="none">--select your collage/school--</option>
  				<option value="fb">collage of FB</option>
				<option value="agriculture">collage of agriculture</option>
				<option value="health">collage of health science</option>
				<option value="social">social science and humanity</option>
				<option value="law">school of law</option>	
  			</select>
			<select name="search_type" class="form-control col-sm-2 text-success">
				<option selected="">--search by--</option>
				<option value="title">title</option>
				<option value="author">author</option>
				<option value="year of publication">year of publication</option>
			</select>
			<nav class="navbar">
				<input class="form-control mr-sm-2 " type="Search" placeholder="Search here" name="item">
				<button class="btn btn-success" type="submit" name="submit" value="submit">Search</button>
			</nav> 
	    </form>
	    <form method="post" action="user/display.php" class="form-inline">
	    	<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#all_books">all books</button>
			<div id="all_books" class="collapse container"><br>
				<p><b>note: </b>choose your collage from the list then click submit button to display all books</p>
				<select name="collage" class="form-control col-sm-3 mr-sm-3 bg-light text-danger">
	  				<option value="fb">collage of FB</option>
					<option value="agriculture">collage of agriculture</option>
					<option value="health">collage of health science</option>
					<option value="social">social science and humanity</option>
					<option value="law">school of law</option>	
	  			</select>
	  			<button class="btn btn-info" type="submit" name="all" value="all">submit</button>
			</div>
	    </form>
  	</div>
</body>
</html>