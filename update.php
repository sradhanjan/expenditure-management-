<?php
include("connection.php");
error_reporting(0);
$da = $_GET['da'];
$gr = $_GET['gr'];
$tr = $_GET['tr'];
$me = $_GET['me'];
$ch = $_GET['ch'];
$bi = $_GET['bi'];
$ot = $_GET['ot'];
$to = $gr + $tr + $me + $ch + $bi + $ot;
?>
<!DOCTYPE html>
<html>
<head>
	<title>update page</title>
</head>
<style>
body
{
	background-color: rgb(255, 184, 79);
}
h2
{
	font-size: 40px;
	font-family: sans-serif;
	text-decoration: underline;
}
form{
	background-color: white;
	width: 450px;
	height: 340px;
	font-family: sans-serif;
	align-content: center;
	border-radius: 0px;
	box-sizing: border-box;
	border: 1px solid black;
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 520px;
	padding: 25px 10px 10px 70px;
}
a
{
	position: center;
	font-size: 30px;
	background-color: yellow;
}
#submit
{
	background-color: black;
	color: white;
	font-size: 20px;
}
</style>
<body>

<h2 align="center">Please update your details</h2>
<form action="" method="POST">  
<div class="form-group">
<label for="name">DATE</label>
<input type="text" value = "<?php echo"$da"?>"name="date"><br><br>
</div>
<div class="form-group">
<label for="email">GROCERIES</label>
<input type="text" value = "<?php echo"$gr"?>"name="groceries"><br><br>
</div>
<div class="form-group">
<label for="password">TRANSPORTATION</label>
<input type="text" value = "<?php echo"$tr"?>"name="transportation"><br><br>
</div>
<div class="form-group">
<label for="contact">MEDICINES</label> 
<input type="text" value = "<?php echo"$me"?>"name="medicines"><br><br>
</div>
</div>
<div class="form-group">
<label for="address">CHILDCARE</label>
<input type="text" value = "<?php echo"$ch"?>"name="childcare"><br><br>
</div>
<div class="form-group">
<label for="address">BILLS</label>
<input type="text" value = "<?php echo"$bi"?>"name="bills"><br><br>
</div>
<div class="form-group">
<label for="address">OTHERS</label>
<input type="text" value = "<?php echo"$ot"?>"name="others"><br><br>
</div>
<div class="form-group">
<label for="address">TOTAL</label>
<input type="text" value = "<?php echo"$to"?>"name="total"><br><br>
</div>
<input type="submit" id="submit" name="submit" value="update details">
</form>
<a href="display.php" align ="center">check the table here</a>
</body>
</html>

<?php
if (isset($_POST['submit']))
{
	$da = $_POST['date'];
	$gr = $_POST['groceries'];
	$tr = $_POST['transportation'];
	$me = $_POST['medicines'];
	$ch = $_POST['childcare'];
	$bi = $_POST['bills'];
	$ot = $_POST['others'];
	$to = $_POST['total'];
$query = "UPDATE EXPENSE SET date = '$da', groceries = '$gr', transportation ='$tr',medicines = '$me',childcare = '$ch',bills = '$bi',others = '$ot' ,total = '$to' WHERE date = '$da' ";

$data = mysqli_query($conn,$query);

if ($data)
{
	echo "<script>alert('Record Updated')</script>";
}
else
{
	echo "Failed to Update";
}
}
?>