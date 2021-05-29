 <?php 
	session_start();
	if ($_SESSION['password']=="" ) {
		header("location:login.php");
	}
	include "../conn.php";
	?>

 <html>
 <head>
	<title>Mizan-Tepi university</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<script src="../bootstrap/js/jquery.js"></script>
	<script src="../bootstrap/js/bootstrap.bundle.js"></script>
</head>
 <body  style="background-image: url('../image/bg9.jpg');background-size: 100%;opacity: 0.8">
 	<form method="post">
		<div class="jumbotron container">
			<h2><i><b class="text-danger">Write the new shelfmark below then click update.....</i></b></h2>
			<div class="form-group">
 				<textarea name="update_text" id="shelfmark" class="form-control col-sm-5" rows="5"></textarea>
 			</div>
 			<input type="submit" name="update" value="update" class="btn btn-success">
		</div>
	</form>
	<?php
	$collage=$_SESSION['collage'];
	function update($collage,$table){
		global $conn,$collage;
		if ($collage==$collage) {
			if (isset($_POST['update'])) {
				$update_text=$_POST['update_text'];
				$sql="update $table set shelfmark='$update_text' where roll_no='$_GET[update_shelfmark]'";
				$result=mysqli_query($conn,$sql);
				header("location:adminhome.php");
			}	
		}
	}

	switch ($collage) {
		case 'fb':
			$table='fb';
			update($collage,$table);
			break;
		case 'agriculture':
			$table='agriculture';
			update($collage,$table);
			break;
		case 'health':
			$table='health';
			update($collage,$table);
			break;
		case 'social':
			$table='social_and_humanity';
			update($collage,$table);
			break;
		case 'law':
			$table='law';
			update($collage,$table);
			break;

		default:
			echo "select collage first";
			break;
	}
?>
 </body>
 </html>
	