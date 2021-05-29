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
<body>
	<?php 
	if (isset($_GET['lend'])) {
		$_SESSION['circulation_book']=$_GET['lend'];
		$sql="select * from circulation_books where roll_no='$_GET[lend]'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
		$_SESSION['title']=$row['book_title'];
		$total=$row['quantity'];
		$title=$row['book_title'];
		if ($total<=0) {
			header("location:alltook.php");
		}
	}

	 if (isset($_GET['take'])) {
	 	$table=$_SESSION['table'];
		$sql="select * from $table where roll_no='$_GET[take]'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
		$_SESSION['title']=$row['book_title'];	
	}
?>
	<div class="container jumbotron col-sm-8">
		<?php echo "<label class='h2'><b> you select: </b>". $row['book_title']."</label>"; ?>
		<hr><label class="h3 text-primary">fill the form below to take the book </label> <hr>
		<form class="form form-group" method="post" action="loan.php">
			Name: <input type="text" name="name" class="form-control col-sm-4" placeholder="full name?" required="true">
			ID: <input type="text" name="id" class="form-control col-sm-4" placeholder="ID?" required="true">
			AGE: <input type="text" name="age" class="form-control col-sm-4" placeholder="age?" required="true"><br>
			Gender:
			<div class="form-check">
				<label class="form-check-label" >
					<input class="form-check-input" type="checkbox" value="male" name="sex">male
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox" value="female" name="sex">female
				</label>
			</div><br>
			first enrollment date:
			<input type="date" name="entrance" class="form-control col-sm-4" placeholder="first enrollment date?" required="true">
			Faculity: <input type="text" name="faculity" class="form-control col-sm-4" placeholder="faculity?" required="true">
			School/dept/prog: <input type="text" name="dept" class="form-control col-sm-4" placeholder="school/dept/prog?" required="true">

			<label>DUE DATE</label>
			<input type="date" name="due_date" class="form-control col-sm-4" placeholder="first enrollment date?" required="true">
			
			<input type="submit" name="loan" value="loan" class="btn btn-success" required="true">
		</form>

		<a href="loan_home.php"><button class="btn btn-primary float-right">Home</button><a>
	</div>
</body>
</html>