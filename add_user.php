<?php
include 'conn.php';

$sql="insert into user (first_name,last_name,email,pass_word,registration_date)
values ('$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[pass_word]','$_POST[registration_date]')";
	if (!mysqli_query($conn,$sql)){
		die ('Error: ' .mysqli_error());
	}
	echo "1 record succesfully added...";
?>