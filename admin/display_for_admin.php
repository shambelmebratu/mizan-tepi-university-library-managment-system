 <?php session_start();
	if ($_SESSION['password']=="" ) {
		header("location:login.php");
	} ?>
 <html>
 <head>
	<title>Mizan-Tepi university</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<script src="../bootstrap/js/jquery.js"></script>
	<script src="../bootstrap/js/bootstrap.bundle.js"></script>
</head>
 <body style="background-image: url('../image/bg6.jpg');background-size: 100%;opacity: 0.8">

 	<?php 
	include "../conn.php";
	$item=$_POST['item'];
	$type=$_POST['search_type'];
	$collage=$_POST['collage'];
	
//function used for retrive data from database

	function retrive($result){
		while($row = mysqli_fetch_assoc($result)) {
			echo "<div class='jumbotron container col-sm-5 h4'>";
			echo "<ul style='list-style:none;'>";
			echo "<li> <b class='text-info'>title:&nbsp&nbsp</b> ".$row['book_title']."</li>";
			echo "<li> <b class='text-info'>author/editor:&nbsp&nbsp</b> ".$row['author']."</li>";
			echo "<li> <b class='text-info'>acc_no:&nbsp&nbsp</b> ".$row['acc_no']."</li>";
			echo "<li> <b class='text-info'>edition:&nbsp&nbsp</b> ".$row['edition']."</li>";
			echo "<li> <b class='text-info'>year:&nbsp&nbsp</b> ".$row['year_of_publication']."</li>";
			echo "<li> <b class='text-info'>ISBN:&nbsp&nbsp</b> ".$row['ISBN']."</li>";
			echo "<li> <b class='text-info'>call no:&nbsp&nbsp</b> ".$row['call_no']."</li>";
			echo "<li> <b class='text-info'>publisher name:&nbsp&nbsp</b> ".$row['publisher_name']."</li>";
			echo "<li> <b class='text-info'>place of publication:&nbsp&nbsp</b> ".$row['place_of_publication']."</li>";
			echo "</ul>";
			echo "<b>shelfmark:&nbsp&nbsp</b>"."<pre class='text-warning h2'>".$row['shelfmark']."</pre>";
			echo "<li class='btn btn-danger'> <a href='update.php?update_shelfmark=".$row['roll_no']."'class='text-white h5' style='text-decoration:none;'>update shelfmark</a> </li>";
			echo "<a href='adminhome.php'><button class='btn btn-primary float-right'>home</button><a>";
			echo "</div>";
			}
		if (mysqli_num_rows($result)==0) {
			echo "<div class='container jumbotron text-success'>";
			echo "<h1>not found! <a  href='adminhome.php'class ='btn btn-dark text-white'>try again</a></h1>";
			echo "</div>";
		}
	}
	if (empty($item)) {
		echo "<div class='container jumbotron text-danger'>";
		echo "<h1>empty search! <a  href='adminhome.php'class ='btn btn-primary text-white'>try again</a></h1>";
		echo "</div>";
	}
	else{
	//function to display books from specified collage and table
		function display($collage,$table,$name){
			global $conn,$item,$type;
			if ($collage==$collage) {
				if($type=='title'){
					$sql="select * from $table where book_title like '%$item%' ";
					$result=mysqli_query($conn,$sql);
					echo "<h1 class='container bg-light'>related book from <b class='text-success'>$name</b> collage </h1>";
					retrive($result);
				}
				if($type=='author'){
					$sql="select * from $table where author like '%$item%' ";
					$result=mysqli_query($conn,$sql);
					echo "<h1 class='container bg-light'>related book from <b class='text-success'>$name</b> collage </h1>";
					retrive($result);
				}
				if($type=='year of publication'){
					$sql="select * from $table where year_of_publication like '%$item%' ";
					$result=mysqli_query($conn,$sql);
					echo "<h1 class='container bg-light'>related book from <b class='text-success'>$name</b> collage </h1>";
					retrive($result);
				}
			}	
		}
		switch ($collage) {
			case 'fb':
				$table='fb';
				$name="FB";
				$_SESSION['collage']=$collage;
				display($collage,$table,$name);
				break;
			case 'agriculture':
				$table='agriculture';
				$name="Agriculture";
				$_SESSION['collage']=$collage;
				display($collage,$table,$name);
				break;
			case 'health':
				$table='health';
				$name="Health";
				$_SESSION['collage']=$collage;
				display($collage,$table,$name);
				break;
			case 'social':
				$table='social_and_humanity';
				$name="Social and Humanity";
				$_SESSION['collage']=$collage;
				display($collage,$table,$name);
				break;
			case 'law':
				$table='law';
				$name="Law";
				$_SESSION['collage']=$collage;
				display($collage,$table,$name);
				break;
			default:
				echo "<div class='jumbotron container text-success h2'>";
				echo " <p>select collage or search_type first</p>";
				echo "<a href='../index.php'><button class='btn btn-primary'>try again</button></a>";
				echo "</div>";
				break;
		}
	}
 ?>
 </body>
 </html>
