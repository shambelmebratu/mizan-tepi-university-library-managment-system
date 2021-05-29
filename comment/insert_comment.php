<head>
	<title>Mizan-Tepi university</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
</head>

<?php
	include "../conn.php";
	if (isset($_POST['comment'])) {
		$comment=$_POST['user_comment'];
		$name=$_POST['name'];
		$id=$_POST['id'];

		$sql="insert into comment(name,user_id,comment) values('$name','$id','$comment')";
		mysqli_query($conn,$sql) or die(mysql_error());
		header("location:../index.php");
	}

 ?>