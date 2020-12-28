<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ssm tech";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "connection successfull";
}
else
{
	echo "connection failed".mysql_connect_error();
}
?>