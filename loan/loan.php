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

<?php 
	if (isset($_POST['loan'])) {
		$name=$_POST['name'];
		$id=$_POST['id'];
		$age=$_POST['age'];
		$sex=$_POST['sex'];
		$entrance=$_POST['entrance'];
		$faculity=$_POST['faculity'];
		$dept=$_POST['dept'];
		$due_date=$_POST['due_date'];
		$title=$_SESSION['title'];

		$sql="insert into loan(name,user_id,age,sex,1st_enrollment_date,faculity,school_or_prog_or_dept,due_date,book_title) values('$name','$id','$age','$sex','$entrance','$faculity','$dept','$due_date','$title')";
		mysqli_query($conn,$sql) or die(mysql_error());

		$id=$_SESSION['circulation_book'];
		$sql="select * from circulation_books where roll_no='$id'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
		$total=$row['quantity'];
		$title=$row['book_title'];
		$total-=1;
		$sql="update circulation_books set quantity='$total' where book_title='$title'";
		mysqli_query($conn,$sql);



		header("location:loan_home.php");

	}
 ?>