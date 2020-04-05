<?php
require 'connect.inc.php';
session_start();
if(isset($_SESSION['aid'])){
	if(isset($_POST['a'])){
		$d = $_POST['c'];
		$q = "INSERT INTO `category` (`cname`) values ('$d') ";
		mysqli_query($conn,$q);
		?>
		<script type="text/javascript">
			window.location.href="admin.php";
		</script>
		<?php
	}
	if(isset($_POST['r'])){
		$d = $_POST['c'];
		$q = "DELETE FROM `category` where cname = '$d'";
		mysqli_query($conn,$q);
		?>
		<script type="text/javascript">
			window.location.href="admin.php";
		</script>
		<?php
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background: tomato;
		}
	</style>
</head>
<body>
	<form method="post" style="margin:10% 0 0 25%;padding: 8%;font-size: 25px;">
		<label style="color: black">Category:</label>
		<input type="text" name="c" style="border: none;">
		<br>
		<button type="submit" name="a" style="background: yellow;border: none;margin: 50PX 0 0 80px;padding:0 20px 0 20px; ">ADD</button>
		<button type="submit" name="r" style="background: yellow;border: none;margin: 20PX 0 0 60px;padding:0 20px 0 20px; ">REMOVE</button>
	</form>
</body>
</html>