<?php session_start(); ?>
<html>
<head>
	<title>Mizan-Tepi university</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body>
	<?php
	include "../conn.php";
	echo "<div class='container jumbotron'> ";
	echo "<p class='h2'>are you sure you want to take??</p"."<br>";
	echo "<form method='post'>";
	echo "<input type='submit' name='yes' value='yes' class='btn btn-danger'>"." or ";
	echo "<input type='submit' name='no' value='no' class='btn btn-info'>";
	echo "</form";
	echo "</div>";
	if (isset($_GET['submit'])) {
			$date=$_GET['date'];
			$id=$_GET['id'];
			$t_time=$_GET['taking_time'];
			$r_time=$_GET['return_time'];
			$title=$_SESSION['title'];
			$total=$_SESSION['quantity'];
			$total=$total-1;
			echo "<div class='container jumbotron'>";
			echo "<label class='h2'> selected book: ".$_SESSION['title']."<br>";
			echo "<label class='h2'> taken time ".$t_time.'<br>';
			$time_issued=date('h:i:sa');
			$hour=date("h");
			$hour=$hour+$r_time+1;
			if($hour>12){
				$hour-=12;
			}
			$r_time=date("$hour:i:sa");
			echo "<label class='h2'> return time ".$r_time."<br><br>";
			echo "</div>";

	if (isset($_POST['yes'])) {
		
			$sql="insert into user(date,user_id,time_issued,return_time,book_title) values('$date','$id','$t_time','$r_time','$title')";
			mysqli_query($conn,$sql) or die(mysql_error());

			$sql="update circulation_books set quantity='$total' where book_title='$title'";
			mysqli_query($conn,$sql);
			header("location:circulation.php");
		}
		}
	if (isset($_POST['no'])) {
		header("location:circulation.php");
	}
	 ?>
</body>
</html>