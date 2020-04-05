<?php
	require 'connect.inc.php';
	session_start();
	if(isset($_SESSION['aid'])){
		$q = "SELECT * from `category`";
		$r = mysqli_query($conn,$q);
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
			<style type="text/css">
				tr,th{
					border-bottom: 2px solid black;text-align: center;
				}
				body{
					background: tomato;font-size: 30px;color: white	;
				}
			</style>
		</head>
		<body>
			<table style="border: 2px solid black;margin: 8% 0 0 35%;width: 300px;">
				<tr>
					<th style="color: darkblue">Category</th>
				</tr>
				<?php
					while($d=mysqli_fetch_assoc($r)){
				?>
				<tr>
					<td><?php echo $d['cname'];?></td>
				</tr>
				<?php
				}
				?>
			</table>
		</body>
		</html>
		<?php
	}

?>