<?php 
	session_start();
 	include "../conn.php";
 	if(isset($_GET['login'])) {
 		$email=$_GET['email'];
 		$password=$_GET['password'];
 		$sql="select * from librarian";
 		$result=mysqli_query($conn,$sql) or die(mysql_error());
 		while ($row = mysqli_fetch_assoc($result)) {
 			if ($row['email']==$email && $row['password']==$password) {
 				$_SESSION['email']=$row['email'];
 				$_SESSION['password']=$row['password'];
 				$_SESSION['user']=$row['user_name'];
 				header("location:adminhome.php");		
 			}
 		}
 	}
  ?>
 <html>
 	<head>
 		<title>Mizan-Tepi university</title>
 		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
 	</head>
 	<body style="background-image: url('../image/bg3.jpg');background-size: 100%">
 		<div class="jumbotron container float-left col-sm-5 bg-light" style="position: relative;left: 25%;top:150px; opacity: 0.9">
 			<form>
 				<input type="email" name="email" placeholder="email:" class="form-control col-sm-6"> <br>
 				<input type="password" name="password" placeholder="password: " class="form-control col-sm-6">
 				<input type="submit" name="login" value="login" class="btn btn-success">
 			</form>
 			<a href='../index.php'><button class='btn btn-outline-dark float-right'>home</button><a>
 		</div>
 	</body>
 </html>