<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>tracking form </title>
</head>
<style>
body
{
	background-color: black;
	background:url(card.jpg);
	background-repeat: no-repeat;
	background-position: top;
	background-attachment: fixed;
	background-size: 1550px 760px;
	overflow: hidden;
}
h1
{
    margin-top: 50px;
    margin-bottom: 50px;
    margin-right: 150px;
    margin-left: 520px;
	font-size: 50px;
	text-decoration: underline;
}
form{
	background: rgb(0, 0, 0); 
    background: rgba(0, 0, 0, 0.5);
    color: white;
	width: 450px;
	height: 380px;
	font-family: cursive;
	align-content: center;
	border-radius: 0px;
	box-sizing: border-box;
	border: 1px solid black;
    margin-top: 50px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 520px;
	padding: 10px 10px 10px 70px;
}
form:hover
{
	background-color: white;
	opacity: 0.8;
	color: black;
}
a
{
	background: rgb(0, 0, 0); 
    background: rgba(0, 0, 0, 0.5);
	position: center;
	margin-top: 50px;
	font-size: 30px;
	color: white;
}
#submit
{
	height: 30px;
	width: 70px;
	border-radius: 10px;
	font-family: cursive;
}
</style>
<body>
<h1> Enter today's expenses</h1>
<form action="" method="POST">  
<div class="form-group">
<label for="date">DATE</label>
<input type="text" name="date"><br><br>
</div>
<div class="form-group">
<label for="groceries">GROCERIES</label>
<input type="text" name="groceries"><br><br>
</div>
<div class="form-group">
<label for="transportation">TRANSPORTATION</label>
<input type="text" name="transportation"><br><br>
</div>
<div class="form-group">
<label for="medicines">MEDICINES</label> 
<input type="text" name="medicines"><br><br>
</div>
<div class="form-group">
<label for="childcare">CHILDCARE</label>
<input type="text" name="childcare"><br><br>
</div>
<div class="form-group">
<label for="bills">BILLS</label>
<input type="text" name="bills"><br><br>
</div>
<div class="form-group">
<label for="others">OTHERS</label>
<input type="text" name="others"><br><br>
</div>
<input type="submit" id= "submit"name="submit"><br><br>
<a href="display.php">check the record here</a><br><br>
</form>
</body>
</html>


<?php
if(isset($_POST['submit']))
{
$da = $_POST['date'];
$gr = $_POST['groceries'];
$tr = $_POST['transportation'];
$me = $_POST['medicines'];
$ch = $_POST['childcare'];
$bi = $_POST['bills'];
$ot = $_POST['others'];
$to = $gr + $tr + $me + $ch + $bi + $ot;

if($da!="" && $gr!="" && $tr!="" && $me!="" && $ch!="" && $bi!="" && $ot!="" && $to!="")
{
$query = "INSERT INTO EXPENSE VALUES ('$da','$gr','$tr','$me','$ch','$bi','$ot','$to')";
$data = mysqli_query($conn,$query);

if($data)
{
	echo "success";
}
}
else
{
	echo "failed";
}
}
?>