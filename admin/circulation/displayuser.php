<html>
<head>
	<title>Mizan-Tepi university</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
	<script src="../../bootstrap/js/jquery.js"></script>
    <script src="../../bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body>
	<?php
	include "../../conn.php";
		if (isset($_POST['return'])) {

			$hour=date("h");
			$hour+=1;
			if ($hour>12) {
				$hour=$hour-12;
			}
			$now=date("$hour:i:sa");

			$item=$_POST['id_item'];
			$sql="select * from user where user_id like '%$item%' ";
			$result=mysqli_query($conn,$sql) or die(mysql_error());
			echo "<div class='container'>";
			if (empty($item)) {
				echo "<div class='jumbotron'>"."<p class='h2'>empty search</p>";
				echo "<a href='../adminhome.php'><button class='btn btn-primary'>home</button><a>"."</div>";
			}
			else{
				if (mysqli_num_rows($result)>0) {
					echo "<table class='table table-bordered table-striped'>";
					echo "<tr class='bg-dark text-white'><th>Date</th><th class='text-danger'>ID</th> <th>time_issued</th> <th>return_time</th><th>book title</th><th>status</th>";
					while ($row=mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>".$row['date']."</td>"."<td class='text-dark bg-warning'>".$row['user_id']."</td>"."<td>".$row['time_issued']."</td>"."<td>".$row['return_time']."</td>"."<td>".$row['book_title']."</td>";
						if (($now>$row['return_time'] ) or (date("d/m/y")>$row['date'])) {
								echo "<td class='bg-danger text-light'>time was passed</td>";
							}
						else{
							echo "<td class='text-success'>not yet</td>";
						}
						echo "<td><a href='return.php?del_id=".$row['user_id']."'  class='btn btn-success'>delete</a></td></tr>";

					}
					echo "</table>";
					echo "<a href='../adminhome.php'><button class='btn btn-primary'>home</button><a>";
					
				}
				else{
					echo "<div class='jumbotron'>"."<p class='h2'>not found</p>";
					echo "<a href='../adminhome.php'><button class='btn btn-primary'>home</button><a>"."</div>";
				}
				echo "</div>";
			}	
		}

		if (isset($_POST['who_take'])) {

			$hour=date("h");
			$hour+=1;
			if ($hour>12) {
				$hour=$hour-12;
			}
			$now=date("$hour:i:sa");
			$item=$_POST['title_item'];
			$sql="select * from user where book_title like '%$item%'";
			$result=mysqli_query($conn,$sql) or die(mysql_error());
			echo "<div class='container'>";
			if (empty($item)) {
				echo "<div class='jumbotron'>"."<p class='h2'>empty search</p>";
				echo "<a href='../adminhome.php'><button class='btn btn-primary'>home</button><a>"."</div>";
			}
			else{
				if (mysqli_num_rows($result)>0) {
					echo "<table class='table table-bordered table-striped'>";
					echo "<tr class='bg-dark text-white'><th>Date</th><th>ID</th> <th>time_issued</th> <th>return_time</th><th>book title</th><th>status</th>";
					while ($row=mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>".$row['date']."</td>"."<td>".$row['user_id']."</td>"."<td>".$row['time_issued']."</td>"."<td>".$row['return_time']."</td>"."<td>".$row['book_title']."</td>";
						if (($now>$row['return_time']) or (date("d/m/y")>$row['date'])) {
								echo "<td class='bg-danger text-light'>time was passed</td>";
							}
						else{
							echo "<td class='text-success'>not yet</td></tr>";
						}
					}
					echo "</table>";
					echo "<a href='../adminhome.php'><button class='btn btn-primary float-right'>home</button><a>";
				}
				else{
					echo "<div class='jumbotron'>"."<p class='h2'>not found</p>";
					echo "<a href='../adminhome.php'><button class='btn btn-primary'>home</button><a>"."</div>";
				}
			}
			
			echo "</div>";
		}
	 ?>
</body>
</html>