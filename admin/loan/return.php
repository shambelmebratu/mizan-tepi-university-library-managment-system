<html>
<head>
	<title>Mizan-Tepi university</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
	<script src="../../bootstrap/js/jquery.js"></script>
    <script src="../../bootstrap/js/bootstrap.bundle.js"></script>
</head>
<html>

<?php
include "../../conn.php";
	echo "<div class='container jumbotron'> ";
	echo "<p class='h2'>are you sure?</p"."<br>";
	echo "<form method='post'>";
	echo "<input type='submit' name='yes' value='yes' class='btn btn-danger'>"." or ";
	echo "<input type='submit' name='no' value='no' class='btn btn-info'>";
	echo "</form";
	echo "</div>";
	if (isset($_POST['yes'])) {
		if (isset($_GET['del_id'])) {
			$sql="select * from loan where book_title='$_GET[del_id]'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($result)or die(mysql_error());
			$title=$_GET['del_id'];
			$qry="select * from circulation_books where booK_title='$title'";
			$result2=mysqli_query($conn,$qry);
			$row2=mysqli_fetch_assoc($result2);
			$b_title=$row2['book_title'];
			$total=$row2['quantity'];
			if($b_title==$title){
				$total=$row2['quantity'];
				$total+=1;
				$update_sql="update circulation_books set quantity='$total' where book_title='$b_title'";
				mysqli_query($conn,$update_sql);
			}
		}

		$del_row="delete from loan where book_title='$_GET[del_id]'";
		mysqli_query($conn,$del_row) or die(mysql_error());
		header("location:../adminhome.php");

	}
	if (isset($_POST['no'])) {
		header("location:../adminhome.php");
	}
 ?>