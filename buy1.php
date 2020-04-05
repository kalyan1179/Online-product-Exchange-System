<?php require 'connect.inc.php'; 
	session_start();
	if(isset($_SESSION['id'])){
		$tyui = $_SESSION['id'];
		$q = "SELECT * FROM `product` where uid <> '$tyui'";
		$r = mysqli_query($conn,$q);
	
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<style type="text/css">
		html
		{
			scroll-behavior: smooth;
		}
		body{
			/*background: rgba(0,0,0,0.1);/*(38, 39, 41);*/
			background: url("SD_Images/bg1.jpg");background-size:cover;background-attachment: fixed;
			/*background-repeat: no-repeat;margin: 0px;*/
			
				/*background: rgba(0,200,200,0.8);*/

/*
background: #A770EF; 
background: -webkit-linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);  
background: linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF); 
*/
		}
		.nav 
		{
			/*position: fixed;*/
			background-color:rgba(0,20,20,0); /*rgba(50,50,50,0.9);*/
			/*background:  #06263D;*/
			height: 75px;
			width: 100%;
			margin-top: 0px;
			color: white;
			/*margin-left: 5px;*/
		}
		.nav button
		{
			margin-left: 20px;
			margin-top: 22px;
			margin-right: 10px;
			background-color: rgb(38, 39, 41);
			float: right;
			border: 0px;
			font-size: 18px;
			border: 1px groove white
		}
		a{
			text-decoration: none;
			color: white;
			/*background-color: red;*/
		}

		.nav a:hover{
			text-decoration: underline;
			color:lightgoldenrodyellow;
			cursor:pointer;
			font-size: 14px;
		}
		.search{
			border: 0px;
			width: 250px;
			height: 30px;
			float: right;
			margin-top:  22px;
			/*position: fixed;*/
			background-color: rgb(255, 255, 255);
			border-radius: 25px;
		}
		#info {
  			height: 100%;
  			background-color: rgb(74, 72, 67);
  			padding-top: 3px;
		}
		.box{
			margin-top: 10px; 
			height: 500px;
			background-color: black;
		}
		.divbox{
			float: left;
			width: 280px;height: 360px;background: white; margin-top: 30px;margin-bottom: 10px;margin-left: 45px;border-radius: 10px;/*border: 2px solid rgb(50,50,50);
			/*padding: 0 12px;*/
		}
		div {
  			word-wrap: break-word;
  			overflow: hidden;text-overflow: clip;
		}
	</style>
</head>
<body style="width: 100%;">
	<div class="nav" >
		<!-- <img src="premiumlogo/logo.jpg" style="width: 250px;height: 75px;margin-top: 0px;"> -->
		<!-- <button><a href="login.html">Login</a></button> -->
		<a href="profile.php" id="profile" onclick="document.location=this.id+'.php';return false;">
		<img src="SD_Images/avatarprofile.jpg" style="float: right;height: 24px;width: 25px;margin-top: 23px;margin-right: 15px;border-radius:50px">
		</a>
		<!-- <div style="height: 0px;float: right;"> -->
		 <a href="aboutus.html" style="font-size: 18px;float: right;margin-top: 24px;margin-right: 15px; color: black;">About Us</a>
    	 <a href="contactus.php" style="font-size: 18px;float: right;margin-top: 24px;margin-right: 15px;color: black;">Contact Us</a>

			<img src="SD_Images/search.png" style="float: right;height: 35px;width: 30px;margin-top: 20px;margin-right: 25px;">
			<input class="search" type="search" name="search" placeholder="Search here..." style="color: grey;">
		<!-- </div> -->
		<!-- <p style="float: right;color: white;font-size: 18px;margin-top: 24px;margin-right: 5px;">Search:</p> -->
	</div>
	<a href="categories.php"> <div style="text-decoration: none; width: 250px;height: 50px;background: black;color: white;font-size: 20px;padding : 10px 0 0 45px;">
		View Categories
	</div></a>
	
		<?php
			while ($row = mysqli_fetch_assoc($r)) {
				# code...
				$rt = $row['uid'];
			$qq = "SELECT  * FROM `user` WHERE uid='$rt'";
			$r1 = mysqli_query($conn,$qq);
			$row1 = mysqli_fetch_assoc($r1);
			$cv = $row['pid'];
			$qw = "SELECT min(id) as d,name FROM `images` where pid = '$cv'";
			$r2 = mysqli_query($conn,$qw);
			$row2 = mysqli_fetch_assoc($r2);
			$b=$row2['d'];
		 ?>

		<a href="product.php?ids=<?php echo "".$cv; ?>" style="color: black;">
	<div class="divbox">
		<!-- <img src="SD_Images/Image5.jpe" style="width: 100%;height: 200px; border-radius: 10px 10px 0 0;"> -->
		
		<img src="uploads/<?php echo "".$row2['name'] ;?>" style="width: 100%;height: 200px; border-radius: 10px 10px 0 0;">
		<div style="width: 280px;">
			<div style="width: 280px;height:50px; padding-left: 5px;padding-right: 5px; margin-left: 0px;font-weight:bold;font-size: 16px;"><?php echo $row['pname'];?></div>
			
			<div style="width: 280px;padding-left:5px; margin-left: 0px;font-weight: bold;font-size: 18px;float: left;">
				<!-- $10,000 -->
				<?php echo "₹".$row['price'];?>
			</div>
			<!-- <p style="float: left;">27-01-2020</p> -->
			<div style="width: 280px;padding-left:  5px;height: 40px; margin-left: 0px;/*font-weight: bold;*/font-size: 15px;word-wrap: break-word;
  			overflow: hidden;text-overflow: clip;"><?php echo $row['description'];?></div>
			<div style="width: 180px;float: left; padding: 5px;margin-left: 0px;font-size: 14px; "><?php echo $row1['city'].",".$row1['state'];?>
</div>
<div style="float: right;width: 100px;padding: 5px;">
	
			<p style="float: right;margin-top: 5px;"><?php echo $row['date'];?></p> </div>
</div>
			<!-- <p style="padding: 5px;">Vizag</p> -->
			
		</div>
	</div>
	</a>

	 <?php
	}}else{
		?>
		<script type="text/javascript">
			alert("Login first");
			window.location.href="login.php";
		</script>
		<?php
	}

?>
	
	


</body>
</html>


