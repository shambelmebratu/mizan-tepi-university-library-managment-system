<?php session_start(); 
include "../conn.php";?>
<html>
<head>
	<title>Mizan-Tepi university</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
</head>

<header class="navbar bg-dark navbar-static-top">
	<div class="container">	
		<ul class="nav navbar float-left">
			<li ><a href="../index.php" class="btn btn-light btn-outline-light mr-sm-2">home</a></li>
			<li ><a href="../searchpage.php" class="btn btn-outline-danger mr-sm-2">Search</a></li>
			<li ><a href="../circulation/circulation.php" class="btn btn-outline-light mr-sm-2">Circulation</a></li>
			<li ><a href="loan_home.php" class="btn btn-outline-success mr-sm-2">loan</a></li>
			<li ><a href="../comment/give_comment.php" class="btn btn-outline-success mr-sm-2">Comment</a></li>	
			<li ><a href="#" class="btn btn-outline-success mr-sm-2">About</a></li>
			<li ><a href="#" class="btn btn-outline-success mr-sm-2">Contact Us</a></li>
			
		</ul>	
	</div>
</header>
<?php
	$title=$_SESSION['title'];
	echo "<div class='container h2'>";
	$sql="select * from user where book_title='$title'";
	$result=mysqli_query($conn,$sql) or die(mysql_error());
	$hour=date("h");
	$hour+=1;
	if ($hour>12) {
		$hour=$hour-12;
	}
	$now=date("$hour:i:sa");
	echo "<label class='text-danger'> ".$title." </label> "."book taken";
	if (mysqli_num_rows($result)>0) {
		echo "<label>now  in library</label>";
		echo "<div><table class='table table-bordered table-striped'>";
		echo "<tr class='bg-dark text-white'><th>Date</th><th>ID</th> <th>time_issued</th> <th>return_time</th><th>status</th>";
		while ($row=mysqli_fetch_assoc($result)) {

		echo "<tr>";
		echo "<td>".$row['date']."</td>"."<td>".$row['user_id']."</td>"."<td>".$row['time_issued']."</td>"."<td>".$row['return_time']."</td>";	

		if (($now>$row['return_time'] )or (date("d/m/y")>$row['date'])) {
					echo "<td class='bg-danger text-light'>time was passed</td>";
		}
		else{
			echo "<td class='text-success'>not yet</td></tr>";
		}
		echo "</table></div>";
	}
	}
	
	
	echo "</div>";


	echo "<div class='container h2'>";
	$sql="select * from loan where book_title like '$title'";
	$result=mysqli_query($conn,$sql) or die(mysql_error());
	$date=date("Y-m-d");
	if (mysqli_num_rows($result)>0) {
		echo "<br>borrowed ";
		echo "<table class='table table-bordered table-striped'>";
		echo "<tr class='bg-dark text-white'><th>Name</th><th>ID</th> <th>Age</th> <th>Sex</th><th>1st enrollement</th><th>faculity</th><th>school/dept/prog</th><th>due_date</th><th>status</th>";
		while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$row['name']."</td>"."<td>".$row['user_id']."</td>"."<td>".$row['age']."</td>"."<td>".$row['sex']."</td>"."<td>".$row['1st_enrollment_date']."</td>"."<td>".$row['faculity']."</td>"."<td>".$row['school_or_prog_or_dept']."</td>"."<td class='bg-warning'>".$row['due_date']."</td>";
			if ($date>$row['due_date']) {
					echo "<td class='bg-danger text-light'>time was passed</td>";
				}
			else{
				echo "<td class='text-success'>not yet</td></tr>";
			}
		}
		echo "</table>";
	}
	echo "</div>";
 ?>