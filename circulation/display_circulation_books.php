<htmL>
	<head>
		<title>mizan-tepi university</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	</head>
<body style="background-image: url('../image/bg6.jpg'); background-size: 100%">
<?php 
	include "../conn.php";
	$item=$_POST['item'];
	$type=$_POST['search_type'];
	$table='';
	
//function used for retrive data from database

	function retrive($result){
		while($row = mysqli_fetch_assoc($result)) {
			echo "<div class='jumbotron container col-sm-5 h3' style='opacity:0.8'>";
			echo "<ul style='list-style:none;'>";
			echo "<li> <b class='text-success'>title:&nbsp&nbsp</b> ".$row['book_title']."</li>";
			echo "<li> <b class='text-success'>author/editor:&nbsp&nbsp</b> ".$row['author']."</li>";
			echo "<li> <b class='text-success'>call no:&nbsp&nbsp</b> ".$row['call_no']."</li>";
			echo "<li> <b class='text-success'>edition:&nbsp&nbsp</b> ".$row['edition']."</li>";
			echo "<li> <b class='text-success'>year:&nbsp&nbsp</b> ".$row['year_of_publication']."</li>";
			echo "<li> <b class='text-success'>acc_no:&nbsp&nbsp</b> ".$row['acc_no']."</li>";
			echo "</ul>";
			echo "<b>shelfmark:&nbsp&nbsp</b>"."<pre class='text-info h2'>".$row['shelfmark']."</pre>";
			echo "<li class='btn btn-danger'> <a href='lending_library.php?lend=".$row['roll_no']."'class='text-white h5' style='text-decoration:none;'>take book</a> </li>";
			echo "<a href='circulation.php'><button class='btn btn-primary float-right'>home</button><a>";
			echo "</div>";
			}
		if (mysqli_num_rows($result)==0) {
			echo "<div class='container jumbotron text-success'>";
			echo "<h1>item not found! <a  href='circulation.php'class ='btn btn-dark text-white'>try again</a></h1>";
			echo "</div>";
		}
	}
	if (empty($item)) {
		echo "<div class='container jumbotron text-danger'>";
		echo "<h1>empty search! <a  href='circulation.php'class ='btn btn-primary text-white'>try again</a></h1>";
		echo "</div>";
	}
	else{
	//function to display books from specified collage and table
		function display($name){
			global $conn,$item,$type;
				if($type=='title'){
					$sql="select * from circulation_books where book_title like '%$item%' ";
					$result=mysqli_query($conn,$sql);
					echo "<h1 class='container bg-light'>related book from <b class='text-success'>$name</b> </h1>";
					retrive($result);
				}
				if($type=='author'){
					$sql="select * from circulation_books where author like '%$item%' ";
					$result=mysqli_query($conn,$sql);
					echo "<h1 class='container bg-light'>related book from <b class='text-success'>$name</b> </h1>";
					retrive($result);
				}
				if($type=='year of publication'){
					$sql="select * from circulation_books where year_of_publication like '%$item%' ";
					$result=mysqli_query($conn,$sql);
					echo "<h1 class='container bg-light'>related book from <b class='text-success'>$name</b> </h1>";
					retrive($result);
				}
				if ($type=='none') {
					echo "<div class='jumbotron container text-success h2'>";
					echo " <p>select search_type first</p>";
					echo "<a href='circulation.php'><button class='btn btn-primary'>try again</button></a>";
					echo "</div>";
				}	
			}
			
			$name="circulation";
			display($name);
	}
 ?>
 </body>
 </htmL>