<?php
$conn = mysql_connect("localhost","root","");
if($conn == null){
	die("Error With Database Connection");
	return;
}
mysql_select_db ("elearningportal", $conn);
?>