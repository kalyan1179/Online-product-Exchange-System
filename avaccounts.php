<?php 
	require 'connect.inc.php';
	session_start();
	if(isset($_SESSION['aid'])){
		$q="SELECT * FROM `user`";
		$r = mysqli_query($conn,$q);
		
			?>
				<!DOCTYPE html>
				<html>
				<head>
					<title></title>
					<style type="text/css">
						td,th
						{
							border-bottom: 1px solid black;
							text-align: center;
							border-right: 1px solid black;
							padding: 0 3px 0 3px;
						}
						tr:nth-child(even) {background-color: #f2f2f2;}
					</style>
				</head>
				<body>
					<table style="border: 1px solid;width: 80%;margin-left: 10%; ">
						<tr>
							<th>NAME</th>
							<th>USERNAME</th>
							<th>EMAIL</th>
							<th>PHONE NUMBER</th>
							<th>GENDER</th>
							<th>ADDRESS</th>
							<th>CITY</th>
							<th>STATE</th>	
						</tr>
				<?php 
					while($data = mysqli_fetch_assoc($r)){
				?>
					<tr >
							<td><?php echo $data['name'];?></td>
							<td><?php echo $data['username'];?></td>
							<td><?php echo $data['email'];?></td>
							<td><?php echo $data['phone no'];?></td>
							<td><?php echo $data['gender'];?></td>
							<td><?php echo $data['address'];?></td>
							<td><?php echo $data['city'];?></td>
							<td><?php echo $data['state'];?></td>	
						</tr>
					<?php } ?>
					</table>
				</body>
				</html>
			<?php
		
	}
	else{

		?>
<script type="text/javascript">
	alert("login first");
	window.location.href="alogin.php";
</script>
	<?php 
	}

?>