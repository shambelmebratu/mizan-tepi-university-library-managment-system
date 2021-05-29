<html>
<head>
	<title>Mizan-Tepi university</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
	<script src="../../bootstrap/js/jquery.js"></script>
    <script src="../../bootstrap/js/bootstrap.bundle.js"></script>
</head>
<?php 
	include "../../conn.php";
	$date=date("Y-m-d");
	if (isset($_POST['retrive'])) {

			$hour=date("h");
			$hour+=1;
			if ($hour>12) {
				$hour=$hour-12;
			}
			$now=date("$hour:i:sa");

			$item=$_POST['user_id'];
			$sql="select * from loan where user_id like '%$item%' ";
			$result=mysqli_query($conn,$sql) or die(mysql_error());
			echo "<div class='container'>";
			if (empty($item)) {
				echo "<div class='jumbotron'>"."<p class='h2'>empty search</p>";
				echo "<a href='../adminhome.php'><button class='btn btn-primary'>home</button><a>"."</div>";
			}
			else{
				if (mysqli_num_rows($result)>0) {
					echo "<table class='table table-bordered table-striped'>";
					echo "<tr class='bg-dark text-white'><th>Name</th><th>ID</th> <th>Age</th> <th>Sex</th><th>1st enrollement</th><th>faculity</th><th>school/dept/prog</th><th>due_date</th><th>Title</th><th>status</th>";
						while ($row=mysqli_fetch_assoc($result)) {
							echo "<tr>";
							echo "<td>".$row['name']."</td>"."<td>".$row['user_id']."</td>"."<td>".$row['age']."</td>"."<td>".$row['sex']."</td>"."<td>".$row['1st_enrollment_date']."</td>"."<td>".$row['faculity']."</td>"."<td>".$row['school_or_prog_or_dept']."</td>"."<td class='bg-warning'>".$row['due_date']."</td>"."<td>".$row['book_title']."</td>";
							if ($date>$row['due_date']) {
								echo "<td class='bg-danger text-light'>time was passed</td>";
							}
						else{
							echo "<td class='text-success'>not yet</td>";
						}
							echo "<td><a href='return.php?del_id=".$row['book_title']."'  class='btn btn-success'>delete</a></td></tr>";

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


	if (isset($_POST['who_loan'])) {
		$item=$_POST['title_item'];
		$sql="select * from loan where book_title like '%$item%'";
		$result=mysqli_query($conn,$sql) or die(mysql_error());
		echo "<div class='container'>";
		echo "<label class='h2'> <b>Today: </b>".date("Y-m-d")."</label>";
		if (empty($item)) {
			echo "<div class='jumbotron'>"."<p class='h2'>empty search</p>";
			echo "<a href='loan_home.php'><button class='btn btn-primary'>home</button><a>"."</div>";
		}
		else{
			if (mysqli_num_rows($result)>0) {
				echo "<table class='table table-bordered table-striped'>";
				echo "<tr class='bg-dark text-white'><th>Name</th><th>ID</th> <th>Age</th> <th>Sex</th><th>1st enrollement</th><th>faculity</th><th>school/dept/prog</th><th>due_date</th><th>Title</th><th>status</th>";
				while ($row=mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$row['name']."</td>"."<td>".$row['user_id']."</td>"."<td>".$row['age']."</td>"."<td>".$row['sex']."</td>"."<td>".$row['1st_enrollment_date']."</td>"."<td>".$row['faculity']."</td>"."<td>".$row['school_or_prog_or_dept']."</td>"."<td class='bg-warning'>".$row['due_date']."</td>"."<td>".$row['book_title']."</td>";
					if ($date>$row['due_date']) {
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