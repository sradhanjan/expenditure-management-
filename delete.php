<?php
include("connection.php");
error_reporting(0);

$date = $_GET['da'];
$query = "DELETE FROM EXPENSE WHERE DATE = '$date'";

$data = mysqli_query($conn,$query);

if($data)
{
	echo "<script>alert('Record has been deleted')</script>";
?>
<META HTTP-EQIV="Refresh" CONTENT ="0;URL=http://localhost/internship/display.php">
<?php
}
else
{
	echo "Failed to delete record";
}
?>