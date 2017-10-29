<?php
	$con = include('DBConnect.php');
	$test = new DatabaseConnect;
	$con  = $test->connect();

	$category = $_POST['category'];
	$amount = $_POST['amount'];
	$price = $_POST['price'];
	$quality = $_POST['quality'];
	$deadline = $_POST['deadline'];
	

	$sql = "INSERT INTO `fruit_manager` (category, amount, price, quality, deadline) VALUES ('$category' , '$amount' , '$price' , '$quality' , '$deadline')";
	$flag = mysqli_query($con , $sql);
	if($flag)
		echo 'Successful!';
	else
		echo 'Failed!';
	
	$test->close($con);

	echo '<meta http-equiv=REFRESH CONTENT=1;url=index_insert.php>';
?>