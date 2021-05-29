<!DOCTYPE html>
<html>
<body>

<?php
$hr=date("h");
$hr+=1;
echo "The time is " . date("h:i:sa")."<br>";
echo date("Y");

echo date("y-m-d");
//echo date($hr);
echo date("d/m/y");
?><form>
	<input type="text" name="test">
</form>
<?php $test=$_GET['test'] ?>
<?php echo $test; ?>


</body>
</html>