<?php 
	session_start();
 ?>
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
	include '../conn.php';
		if (isset($_GET['lend'])) {
			$sql="select * from circulation_books where roll_no=$_GET[lend]";
			$result=mysqli_query($conn,$sql) or die(mysql_error());
			$row=mysqli_fetch_assoc($result);
			$total=$row['quantity'];
			$_SESSION['title']=$row['book_title'];
			$_SESSION['quantity']=$row['quantity'];
			$title=$_SESSION['title'];
			$time_issued=date('h:i:sa');
			$hour=date("h");
			$hour+=1;
			if ($hour>12) {
				$hour=$hour-12;
			}
			if ($total>0) {
				echo "<div class='container jumbotron'>";
				echo "<form class='form-group' action='check.php'>";
				echo "<label>Date</label>";
				echo "<input class='form-control col-sm-3' type='text' name='date' value='".date("d/m/y")."'>";
				echo "<label>User ID</label>";
				echo "<input class='form-control col-sm-3' type='text' name='id' required='true'>";
				echo "<label>Time issued</label>";
				echo "<input class='form-control col-sm-3' type='text' name='taking_time' value='".date("$hour:i:sa")."'>";
				echo "<label>select return time after hour? </label>";
				echo "<select class='form-control col-sm-1' name='return_time'><option value='1'>1</option><option value='2'>2</option> <option value='3'>3</option></select>";
				echo "<br><input type='submit' name='submit' value='take' class='btn btn-success'>";
				echo "</form>";
				echo "</div>";
			}
			else{
				echo "<div class='container h2'>";
				echo "all " ."<label class='text-danger'> ".$row['book_title']." </label> "."book <br> are taken wait few minute";
				$sql="select * from user where book_title='$title'";
				$result=mysqli_query($conn,$sql) or die(mysql_error());
				echo "<div><table class='table table-bordered table-striped'>";
				echo "<tr class='bg-dark text-white'><th>Date</th><th>ID</th> <th>time_issued</th> <th>return_time</th><th>status</th>";
				$hour=date("h");
				$hour+=1;
				if ($hour>12) {
					$hour=$hour-12;
				}
				$now=date("$hour:i:sa");
				while ($row=mysqli_fetch_assoc($result)) {

					echo "<tr>";
					echo "<td>".$row['date']."</td>"."<td>".$row['user_id']."</td>"."<td>".$row['time_issued']."</td>"."<td>".$row['return_time']."</td>";	

					if ($now>$row['return_time'] or (date("d/m/y")>$row['date'])) {
								echo "<td class='bg-danger text-light'>time was passed</td>";
					}
					else{
						echo "<td class='text-success'>not yet</td></tr>";
					}
				}
				echo "</table></div>";

				echo "<a href='circulation.php'><button class='btn btn-primary float-right'>home</button><a>";

				echo "</div>";

			}
		}
	 ?>
</body>
</html>