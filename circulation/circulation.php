<!DOCTYPE html>
<html>
<head>
	<title>Mizan-Tepi university</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body style="background-image: url('../image/bg9.jpg'); background-size: 100%">
	<header class="navbar bg-dark navbar-static-top">
		<div class="container">	
			<ul class="nav navbar float-left">
				<li ><a href="../index.php" class="btn btn-light btn-outline-light mr-sm-2">home</a></li>
				<li ><a href="../searchpage.php" class="btn btn-outline-danger mr-sm-2">Search</a></li>
				<li ><a href="circulation.php" class="btn btn-outline-light mr-sm-2 active">Circulation</a></li>
				<li ><a href="../loan/loan_home.php" class="btn btn-outline-success mr-sm-2">loan</a></li>
				<li ><a href="../comment/give_comment.php" class="btn btn-outline-success mr-sm-2">Comment</a></li>	
				<li ><a href="../about.php" class="btn btn-outline-success mr-sm-2">About</a></li>
				<li ><a href="../contact_us.php" class="btn btn-outline-success mr-sm-2">Contact Us</a></li>
				
			</ul>	
		</div>
	</header>
	<div class=" bg-light jumbotron col-sm-8 container " id="search" style="opacity: 0.9">
		<P><b>Hint:</b>search the book by title,author or year of publication you want to take</P>
	    <form method="post" action="display_circulation_books.php" class="form-inline">
			<select name="search_type" class="form-control col-sm-2 text-success">
				<option selected="" value="none">--search by--</option>
				<option value="title">title</option>
				<option value="author">author</option>
				<option value="year of publication">year of publication</option>
			</select>
			<nav class="navbar">
				<input class="form-control mr-sm-2 " type="Search" placeholder="Search here" name="item">
				<button class="btn btn-info" type="submit" name="submit" value="submit">Search</button>
			</nav> 
	    </form>
	    <!--<br><p class="h4 text-danger">click <b>return book</b> button To return book and click <b>who took</b> to see who and when took the book</p>
	    <form method="post" action="displayuser.php" class="form-inline">
	    	<button type="button" class="btn btn-warning mr-sm-3" data-toggle="collapse" data-target="#return">return book</button>
	    	<button type="button" class="btn btn-dark" data-toggle="collapse" data-target="#who_take">who took</button>
			<div id="return" class="collapse container"><br>
				<p class="text-dark h3">type the user ID and submit</p>
				<input class="form-control mr-sm-2 " type="Search" placeholder="Search here" name="id_item">
	  			<button class="btn btn-outline-success" type="submit" name="return" value="return">submit</button>
			</div>
			<div id="who_take" class="collapse container"><br>
				<p class="text-dark h3">type the book title</p>
				<input class="form-control mr-sm-2 " type="Search" placeholder="Search here" name="title_item">
	  			<button class="btn btn-outline-info" type="submit" name="who_take" value="See">submit</button>
			</div>
		</form>-->
  	</div>
</body>
</html>