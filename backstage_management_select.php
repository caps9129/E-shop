<?php
	$con = include('DBConnect.php');
	$test = new DatabaseConnect;
	$con  = $test->connect();

	$sql  = 'SELECT * FROM fruit_manager';
	$result = mysqli_query($con, $sql)or die("Error: ".mysqli_error($con));
	$num = mysqli_num_rows($result);
	echo '<table class=';
	echo 'table>';
	echo '
			<thead>						
				<tr style="font-weight:bold; ALIGN:center">
					<th>                
						category
					</th>
					<th>
						amount
					</th>
					<th>
						price
					</th>
					<th>
						quality
					</th>
					<th>
						deadline
					</th>
					<th>
						log
					</th>
				</tr>	
			</thead>
			<tbody>';
	
	if ($num > 0){
		for($i = 0 ; $i < $num ; $i++){//
			//取得資料數	
			$row = mysqli_fetch_row($result);
			echo '<tr bgcolor =  #ffe6e6>';
			echo"<td>" . $row[0] . "</td>";
			echo"<td>" . $row[1] . "</td>"; 
			echo"<td>" . $row[2] . "</td>"; 
			echo"<td>" . $row[3] . "</td>";
			echo"<td>" . $row[4] . "</td>"; 
			echo"<td>" . $row[5] . "</td>";  
			echo"</tr>";
		}
	}
	$test->close($con);
?>