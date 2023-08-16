<!DOCTYPE html>
<html>
<head>
	<title>show table</title>
</head>
<body>
<?php
include ('connection.php');
$sql ="select * from reg";
$data =mysqli_query($con,$sql);
$total=mysqli_num_rows($data);
if ($total=mysqli_num_rows($data)) {
	?>
	<table border="2">
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>message</th>
<th>delete</th>
<th>update</th>
</tr>
	<?php
	while ($result = mysqli_fetch_array($data)) {
		echo "
			<tr>
				<td>".$result['id']."</td>
				<td>".$result['name1']."</td>
				<td>".$result['email']."</td>
				<td>".$result['message']."</td>
				<td><a href='update.php?id=$result[id] & name1=$result[name1] & email=$result[email] & message=$result[message]'> update </a></td>
				<td><a href='delete.php?id=$result[id] '>delete </a></td>
			</tr>
		";
	}
}
else
{
 	echo "no record found";
}
?>
</table>
</body>
</html>
 