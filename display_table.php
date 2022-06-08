<?php
include 'conn.php';

echo "<table border='1'><tr><th>Id</th><th>First name</th><th>Last name</th>";
echo "<th>Emaile</th><th>Password</th><th>Registration date</th></tr>";

$result = mysqli_query ($conn,$sql="select * from user");
	while ($row = mysqli_fetch_row ($result)){
		echo "<tr>";
		foreach ($row as $cell)
				echo "<td>$cell</td>";
			echo "</tr>";
	}
	
mysqli_free_result($result);
?>