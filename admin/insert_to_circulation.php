<?php 
	session_start();
	if ($_SESSION['password']=="" ) {
		header("location:login.php");
	}
 ?>
 <html>
 <head>
 	<title>Mizan-Tepi university</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
 </head>
 <body style="background-image: url('../image/bg6.jpg'); background-size: 100%;opacity: 0.9">
 	<div class="jumbotron container">
 		<a href="adminhome.php"><button class="btn btn-info mr-sm-4">home</button></a><br><br>
 		<form action="insert.php" method="post" class="form form-hori">
 			<div class="form-group">
 				<label for="acc_no"> <b>acc no:</b> </label>
 				<input type="text" name="acc_no" id="acc_no" class="form-control col-sm-5" required='true'>	
 			</div>
 			<div class="form-group">
 				<label for="book title"> <b>book title:</b> </label>
 				<input type="text" name="title" id="book title" class="form-control col-sm-5" required='true'>	
 			</div>
 			<div class="form-group">
 				<label for="author"> <b>author/editor:</b> </label>
 				<input type="text" name="author" id="author" class="form-control col-sm-5" required='true'>	
 			</div>
 			<div class="form-group">
 				<label for="edition"> <b>edition:</b> </label>
 				<input type="text" name="edition" id="edition" class="form-control col-sm-5" required='true'>	
 			</div>
 			<div class="form-group">
 				<label for="year"> <b>year of publication:</b> </label>
 				<input type="text" name="year" id="year" class="form-control col-sm-5" required='true'>	
 			</div>
 			<div class="form-group">
 				<label for="isbn"> <b>ISBN:</b> </label>
 				<input type="text" name="isbn" id="isbn" class="form-control col-sm-5" required='true'>	
 			</div>
 			<div class="form-group">
 				<label for="call_no"><b>call no:</b> </label>
 				<input type="text" name="call_no" id="call_no" class="form-control col-sm-5" required='true'>	
 			</div>
 			<div class="form-group">
 				<label for="publisher"> <b>publisher name:</b> </label>
 				<input type="text" name="publisher" id="publisher" class="form-control col-sm-5" required='true'>	
 			<div class="form-group">
 				<label for="place"> <b>place of publication:</b> </label>
 				<input type="text" name="place" id="place" class="form-control col-sm-5" required='true'>	
 			</div>
 			<div class="form-group">
 				<label for="shelfmark"> <b>shelfmark:</b> </label>
 				<textarea name="shelfmark" id="shelfmark" class="form-control col-sm-5" rows="5" required='true'></textarea>
 			</div>
 			<div class="form-group">
 				<label for="quantity"> <b>quantity:</b> </label>
 				<input type="text" name="quantity" id="quantity" class="form-control col-sm-1" required='true'>
 			</div>
 			<input type="submit" name="add" value="INSERT" class="btn btn-success">	
 		</form>
 		<div class="float-right">
 			<?php echo "<p>(".$_SESSION['user'].")</p>"; ?>
 			<form>
	 			<input type="submit" name="logout" value="logout" class="btn btn-danger">
	 		</form>	
	 		<?php 
	 			if (isset($_GET['logout'])) {
	 				session_destroy();
	 				header("location:login.php");
	 			}
	 		 ?>
 		</div>
 	</div>
 </body>
 </html>