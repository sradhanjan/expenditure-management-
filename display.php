<!DOCTYPE html>
<html>
<head>
	<title>display page</title>
</head>
<style>
body
{
	background-image: linear-gradient(to left, white,gray);
}

table
{
	
	margin-top: 50px;
    margin-bottom: 100px;
    margin-right: 100px;
    margin-left: 350px;
    font-family: cursive;
    font-size: 20px;
    
}

</style>
<body>
<h1 align="center">THESE ARE THE RECORDS OF EXPENSE</h1>
<table border = "2" cellspacing="7">
<tr>
<th>DATE</th>
<th>GROCERIES</th>
<th>TRANSPORTATION</th>
<th>MEDICINES</th>
<th>CHILDCARE</th>
<th>BILLS</th>
<th>OTHERS</th>
<th>TOTAL</th>
<th colspan="2" align="center">OPERATIONS</th>
</tr>
	
<?php
error_reporting(0);
include("connection.php");
$query = "SELECT * FROM EXPENSE";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


echo $result['date'];
echo $result['groceries'];
echo $result['transportation'];
echo $result['medicines'];
echo $result['childcare'];
echo $result['bills'];
echo $result['others'];
echo $result['total'];

//echo $total;

if($total!=0)
{
	$result = mysqli_fetch_assoc($data);
	while($result=mysqli_fetch_assoc($data))
	//echo "database has records";
	{
		echo "
		<tr>
		<td>".$result['date']."</td>
		<td>".$result['groceries']."</td>
		<td>".$result['transportation']."</td>
		<td>".$result['medicines']."</td>
		<td>".$result['childcare']."</td>
		<td>".$result['bills']."</td>
		<td>".$result['others']."</td>
		<td>".$result['total']."</td>
		<td><a href = 'update.php?da=$result[date] & gr=$result[groceries] & tr=$result[transportation] & me=$result[medicines] & ch=$result[childcare] & bi=$result[bills] & ot=$result[others] & to=$result[total] ' >Update</a></td>
		
		<td><a href = 'delete.php?da=$result[date]' onclick = 'return checkdelete()'>Delete</a></td>
		</tr>
		";
	}
}
else
{
	echo "no records found";
}
?>
</table>
<script>
	function checkdelete()
{
	return confirm ('Are you sure you want to delete your record');
}
</script>
</body>
</html>