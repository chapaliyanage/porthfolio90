<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
<form action="" method="get">
	<input type="text" name="id" placeholder="id" value="<?php echo $_GET['id']; ?>"><br><br>
	<input type="text" name="name1" placeholder="name" value="<?php echo $_GET['name1']; ?>"><br><br>
	<input type="email" name="email" placeholder="email" value="<?php echo $_GET['email']; ?>" ><br><br>
	<textarea name="message" id="message" name="message" cols="30" rows="10" class="box message" placeholder="message"></textarea><br><br>
	<input type="submit" name="submit" value="update">
</form>
<?php
error_reporting(0);
include ('connection.php');
if ($_GET['submit'])
{
	$id = $_GET['id'];
	$name1 = $_GET['name1'];
	$email = $_GET['email'];
	$message = $_GET['message'];
 	$sql="UPDATE reg SET name1='$name1' , email='$email' , message='$message'   WHERE id='$id'";
 	$data=mysqli_query($con, $sql);
 	if ($data) {
 		//echo "record update";
 		header('location:show.php');
 	}
 	else{
 		echo "not update";
 	}
}
else
{
	echo "click on  button to save the change";
}
?>
</body>
</html>