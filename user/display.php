<html>
<head>
	<title>Mizan-Tepi university</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body style="background-image: url('../image/bg5.jpg'); background-size: 100%;">
	<?php 
	if (isset($_POST['all'])) {
	include "../conn.php";
//function used for retrive data from database

	function retrive($result){
		echo "<div class='container' style='opacity: 0.9'>";
		echo "<table class='table table-striped bg-dark text-warning'><tr>";
		echo "<tr class='bg-danger text-white'><th>title</th><th>author</th><th>acc no</th><th>edition</th><th>year</th><th>ISBN</th><th>call no</th><th>publisher</th><th>place</th><th>shelfmark</th></tr>";
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$row['book_title']."</td>";
			echo "<td>".$row['author']."</td>";
			echo "<td>".$row['acc_no']."</td>";
			echo "<td>".$row['edition']."</td>";
			echo "<td>".$row['year_of_publication']."</td>";
			echo "<td>".$row['ISBN']."</td>";
			echo "<td>".$row['call_no']."</td>";
			echo "<td>".$row['publisher_name']."</td>";
			echo "<td>".$row['place_of_publication']."</td>";
			echo "<td>".$row['shelfmark']."</td>";
			echo "</tr>";
		}
		echo "</table>";
		echo "<a href='../searchpage.php'><button class='btn btn-primary'>home</button><a>";
		echo "</div>";
	}
	function display($collage,$table,$name){
		global $conn;
	//fb collage books
		if ($collage==$collage) {
			$sql="select * from $table order by book_title ASC";
			$result=mysqli_query($conn,$sql);
			echo "<h1 class='container bg-light'> list of books in <i class='text-warning'>$name</i> collage </h1>";
			retrive($result);
		}
	}
	$collage=$_POST['collage'];
	switch ($collage) {
		case 'fb':
			$table='fb';
			$name="FB";
			display($collage,$table,$name);
			break;
		case 'agriculture':
			$table='agriculture';
			$name="Agriculture";
			display($collage,$table,$name);
			break;
		case 'health':
			$table='health';
			$name="Health";
			display($collage,$table,$name);
			break;
		case 'social':
			$table='social_and_humanity';
			$name="Social and Humanity";
			display($collage,$table,$name);
			break;
		case 'law':
			$table='law';
			$name="Law";
			display($collage,$table,$name);
			break;
	}
	}
?>
</body>
</html>