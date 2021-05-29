<?php 
	session_start();
	include "../conn.php";
	if ($_SESSION['password']=="" ) {
		header("location:login.php");
	}
 ?>
<html>
<head>
	<title>Mizan-Tepi university</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<script src="../bootstrap/js/jquery.js"></script>
	<script src="../bootstrap/js/bootstrap.bundle.js"></script>
<body style="background-image: url(../image/bg4.jpg);background-size: 100%">
	<header class="navbar bg-dark navbar-static-top">
		<div class="container">
			
			<ul class="nav navbar float-left">
				<li ><a href="admin.php" class="btn btn-outline-success mr-sm-2" data-toggle="collapse" data-target="#insert">Insert new book?</a></li>
				<li ><button type="button" class="btn btn-outline-warning mr-sm-2" data-toggle="collapse" data-target="#update">Update or edit</button></li>
				<li ><button type="button" class="btn btn-outline-success mr-sm-2" data-toggle="collapse" data-target="#search">Circulation</
				<li ><button type="button" class="btn btn-outline-success mr-sm-2" data-toggle="collapse" data-target="#loan">Loan?</button></li>
				<li ><button type="button" class="btn btn-outline-success mr-sm-2" data-toggle="collapse" data-target="#comment">Comment</button></li>	
				
			</ul>
			<li style="list-style: none;">
				<div class="float-right">
		 			<?php echo "<p class='text-white'>(".$_SESSION['user'].")</p>"; ?>
		 			<form>
			 			<input type="submit" name="logout" value="logout" class="btn btn-danger">
			 		</form>	
			 		<?php 
			 			if (isset($_GET['logout'])) {
			 				session_destroy();
			 				header("location:login.php");
			 			}
			 		 ?>
		 		</div>
		 	</li>	
		</div>
	</header>


	<div class="container jumbotron bg-light" style="opacity: 0.9">
		<h1><?php echo "<p> Hello! ".$_SESSION['user']."</p>"; ?></h1>



		<div id="insert" class="collapse" style="opacity: 0.9">
	    	<a href="insert_to_circulation.php"><button type="button" class="btn btn-outline-warning mr-sm-3" data-toggle="collapse" data-target="#circulation">Circulation</button></a>
	    	<a href="admin.php"><button type="button" class="btn btn-outline-success" data-toggle="collapse" data-target="#other">Other</button></a>
	  	</div>





		<div id="search" class="collapse" style="opacity: 0.9">
		    <br><p class="h4 text-danger">click <b>return book</b> button To return book and click <b>who took</b> to see who and when took the book</p>
		    <form method="post" action="circulation/displayuser.php" class="form-inline">
		    	<button type="button" class="btn btn-warning mr-sm-3" data-toggle="collapse" data-target="#return_loan">Return</button>
		    	<button type="button" class="btn btn-dark" data-toggle="collapse" data-target="#who_loan">who took</button>
				<div id="return_loan" class="collapse container"><br>
					<p class="text-dark h3">type the user <b class="text-danger">ID</b> and submit</p>
					<input class="form-control mr-sm-2 " type="Search" placeholder="Search here" name="id_item">
		  			<button class="btn btn-outline-success" type="submit" name="return" value="return">submit</button>
				</div>
				<div id="who_loan" class="collapse container"><br>
					<p class="text-dark h3">type the <b class="text-danger">Book Title</b></p>
					<input class="form-control mr-sm-2 " type="Search" placeholder="Search here" name="title_item">
		  			<button class="btn btn-outline-info" type="submit" name="who_take" value="See">submit</button>
				</div>
			</form>
	  	</div>



	  	<div id="loan" class="collapse container" style="opacity: 0.9">
		    <br><p class="h4 text-success">click <b>return book</b> button To return borrowed book and <b>who took</b> to see who and when is the due date of the book</p>
		    <form method="post" action="loan/display_who_took.php" class="form-inline">
		    	<button type="button" class="btn btn-outline-primary mr-sm-3" data-toggle="collapse" data-target="#return">return book</button>
		    	<button type="button" class="btn btn-outline-danger" data-toggle="collapse" data-target="#who_take">who took</button>
				<div id="return" class="collapse container"><br>
					<p class="text-dark h3">type the user <b class="text-danger">ID</b> and submit</p>
					<input class="form-control mr-sm-2 " type="Search" placeholder="Search here" name="user_id">
		  			<button class="btn btn-outline-success" type="submit" name="retrive" value="retrive">submit</button>
				</div>
				<div id="who_take" class="collapse container"><br>
					<p class="text-dark h3">type the <b class="text-danger">Book Title</b></p>
					<input class="form-control mr-sm-2 col-sm-5" type="Search" placeholder="Search here" name="title_item">
					<button class="btn btn-info" type="submit" name="who_loan" value="submit">Check</button>
				</div>
			</form>
	  	</div>





		<form method="post" action="loan/display_who_took.php">
			<div id="who_loan" class="collapse container"><br>
				write book title then check
				<input class="form-control mr-sm-2 col-sm-5" type="Search" placeholder="Search here" name="title_item">
				<button class="btn btn-info" type="submit" name="who_loan" value="submit">Check</button>
			</div>
		</form>
 		<form method="post" action="display_for_admin.php" class="form-inline"> <br><br>
			<div id="update" class="collapse container"><br>
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
		<div id="comment" class="collapse"><br>
			<?php
				$sql="select * from comment";
				$result=mysqli_query($conn,$sql)  or die(mysqli_error());
				if (mysqli_num_rows($result)>0) {
					while ($row=mysqli_fetch_assoc($result)) {
						echo "<ul style='list-style:none;'>";
						echo "<li><b class='text-info'>name: "."</b>".$row['name']."</li>";
						echo "<li><b class='text-info'>ID: "."</b>".$row['user_id']."</li>";
						echo "<li><b class='text-info'>comment: "."</b>"."<pre>".$row['comment']."</pre></li>";
						echo "<li class='btn btn-danger'> <a href='adminhome.php?del=".$row['roll_no']."'class='text-white h5' style='text-decoration:none;'>delete</a> </li>";
						echo "</ul>";
					}
				}
				else{
					echo "<label class='h3 text-primary'>no comment!</label>";
				}
				if (isset($_GET['del'])) {
					$sql2="delete from comment where roll_no='$_GET[del]'";
					mysqli_query($conn,$sql2);
					header("location:adminhome.php");
				}
			 ?>
		</div>
	</div>
</body>
</html>