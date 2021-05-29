<!DOCTYPE html>
<html>
<head>
	<title>Mizan-Tepi university</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body>
	<header class="navbar bg-dark navbar-static-top">
		<div class="container">	
			<ul class="nav navbar float-left">
				<li ><a href="../index.php" class="btn btn-light btn-outline-light mr-sm-2">home</a></li>
				<li ><a href="../searchpage.php" class="btn btn-outline-danger mr-sm-2">Search</a></li>
				<li ><a href="../circulation/circulation.php" class="btn btn-outline-light mr-sm-2">Circulation</a></li>
				<li ><a href="loan_home.php" class="btn btn-outline-success mr-sm-2 active">loan</a></li>
				<li ><a href="../comment/give_comment.php" class="btn btn-outline-success mr-sm-2">Comment</a></li>	
				<li ><a href="../about.php" class="btn btn-outline-success mr-sm-2">About</a></li>
				<li ><a href="../contact_us.php" class="btn btn-outline-success mr-sm-2">Contact Us</a></li>
				
			</ul>	
		</div>
	</header>
	<div class="container jumbotron col-sm-8">
		<!--<form method="post" action="display_who_took.php">
			<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#who_loan">who took</button>
			<div id="who_loan" class="collapse container"><br>
				write book title then check
				<input class="form-control mr-sm-2 col-sm-5" type="Search" placeholder="Search here" name="title_item">
				<button class="btn btn-info" type="submit" name="who_loan" value="submit">Check</button>
			</div>
		</form>-->
		<br><p class="h4 text-danger">Click <b class="text-success">Circulation</b> button take book from circulation and <br> Click <b class="text-success">Other</b> button to take book from other place</p> <br>
	    <form method="post" action="display_book.php" class="form-inline">
	    	<button type="button" class="btn btn-warning mr-sm-3" data-toggle="collapse" data-target="#circulation">circulation</button>
	    	<button type="button" class="btn btn-dark" data-toggle="collapse" data-target="#other">other</button>
			<div id="circulation" class="collapse container"><br>
				<select name="search_type1" class="form-control col-sm-2 text-success">
					<option selected="" value="none">--search by--</option>
					<option value="title">title</option>
					<option value="author">author</option>
					<option value="year of publication">year of publication</option>
				</select>
				<input class="form-control mr-sm-2 " type="Search" placeholder="Search here" name="item1">
				<button class="btn btn-info" type="submit" name="search" value="submit">Search</button>
			</div>
			<div id="other" class="collapse container"><br>
				<select name="collage" class="form-control col-sm-3 mr-sm-3 text-danger">
	  				<option selected="" value="none">--select collage/school--</option>
	  				<option value="fb">collage of FB</option>
					<option value="agriculture">collage of agriculture</option>
					<option value="health">collage of health science</option>
					<option value="social">social science and humanity</option>
					<option value="law">school of law</option>
	  			</select>
				<select name="search_type" class="form-control col-sm-2 text-dark">
					<option selected="">--search by--</option>
					<option value="title">title</option>
					<option value="author">author</option>
					<option value="year of publication">year of publication</option>
				</select>
				<input class="form-control mr-sm-2 " type="Search" placeholder="Search here" name="item">
				<button class="btn btn-success" type="submit" name="submit" value="submit">Search</button>
			</div>
		</form>
		
	</div>
</body>
</html>