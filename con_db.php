<?php
define ('db_user','root');
define ('db_password','');
define ('db_host','localhost');
define ('db_name','registration');
define ('db_port','3307');

$conn = mysqli_connect (db_host,db_user,db_password,db_name,db_port);
$result = mysqli_query ($conn, "select * from user");
while ($row = mysqli_fetch_array ($result)){
	foreach ($row as $key => $value){
		echo "$key => $value <br>\n";
	}
}
mysqli_free_result($result);
mysqli_close($conn);


?>