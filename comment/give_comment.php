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
				<li ><a href="../loan/loan_home.php" class="btn btn-outline-success mr-sm-2">loan</a></li>
				<li ><a href="give_comment.php" class="btn btn-outline-success mr-sm-2 active">Comment</a></li>	
				<li ><a href="../about.php" class="btn btn-outline-success mr-sm-2">About</a></li>
				<li ><a href="../contact_us.php" class="btn btn-outline-success mr-sm-2">Contact Us</a></li>
				
			</ul>	
		</div>
	</header>
	<div class="container jumbotron">
		<form class="form form-group" method="post" action="insert_comment.php">
			<h2>we are happy you are here</h2>
			<input type="text" name="name" class="form-control col-sm-4" placeholder="write your full name?" required="true">
			<input type="text" name="id" class="form-control col-sm-4" placeholder="write your ID?" required="true">
			<textarea type="textarea" name="user_comment" rows="5" class="form-control col-sm-4" placeholder="write your comment?" required="true"></textarea><br>
			<input type="submit" name="comment" value="comment" class="btn btn-success">
		</form>
	</div>
</body>
</html>