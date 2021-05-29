<?php 
	include "../conn.php";
	if (isset($_POST['insert'])) {
		$acc_no=$_POST['acc_no'];
		$title=$_POST['title'];
		$author=$_POST['author'];
		$edition=$_POST['edition'];
		$year=$_POST['year'];
		$isbn=$_POST['isbn'];
		$call_no=$_POST['call_no'];
		$publisher=$_POST['publisher'];
		$place=$_POST['place'];
		$shelfmark=$_POST['shelfmark'];
		$collage=$_POST['collage'];
		
		function insert($collage,$table){
			global $conn,$acc_no,$title,$author,$edition,$year,$isbn,$call_no,$publisher,$place,$shelfmark;
			if($collage==$collage){
				$sql="insert into $table(acc_no,book_title,author,edition,year_of_publication,ISBN,call_no,publisher_name,place_of_publication,shelfmark) values('$acc_no','$title','$author','$edition','$year','$isbn','$call_no','$publisher','$place','$shelfmark')";
				mysqli_query($conn,$sql) or die(mysql_error());
				header("location:adminhome.php");
			}
		}

		switch ($collage) {
			case 'fb':
				$table='fb';
				insert($collage,$table);
				break;
			case 'agriculture':
				$table='agriculture';
				insert($collage,$table);
				break;
			case 'health':
				$table='health';
				insert($collage,$table);
				break;
			case 'social':
				$table='social_and_humanity';
				insert($collage,$table);
				break;
			case 'law':
				$table='law';
				insert($collage,$table);
				break;
		}
	}
	if (isset($_POST['add'])) {
		$acc_no=$_POST['acc_no'];
		$title=$_POST['title'];
		$author=$_POST['author'];
		$edition=$_POST['edition'];
		$year=$_POST['year'];
		$isbn=$_POST['isbn'];
		$call_no=$_POST['call_no'];
		$publisher=$_POST['publisher'];
		$place=$_POST['place'];
		$shelfmark=$_POST['shelfmark'];
		$quantity=$_POST['quantity'];

		$sql="insert into circulation_books(acc_no,book_title,author,edition,year_of_publication,ISBN,call_no,publisher_name,place_of_publication,shelfmark,quantity) values('$acc_no','$title','$author','$edition','$year','$isbn','$call_no','$publisher','$place','$shelfmark','$quantity')";
		mysqli_query($conn,$sql) or die(mysql_error());
		header("location:adminhome.php");
		
	}

 ?>