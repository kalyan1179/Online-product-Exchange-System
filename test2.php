<?php require 'connect.inc.php'; ?>
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
			background: rgb(38, 39, 41);
			margin: 0px;
		}
		.nav
		{
			/*position: fixed;*/
			background-color: black;
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
		.search{
			border: 0px;
			width: 250px;
			height: 30px;
			float: right;
			margin-top:  22px;
			/*position: fixed;*/
			background-color: rgb(255, 255, 255);
			border-radius: 5px;
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
			width: 280px;height: 500px;background: white; margin-top: 30px;margin-bottom: 10px;margin-left: 20px;border-radius: 10px;
		}
		.test
		{
			width: 1000px;
			overflow-x: auto;
		}
	</style>
</head>
<body style="width: 1226px;">
	<div class="nav" >
		<img src="premiumlogo/logo.jpg" style="width: 250px;height: 75px;margin-top: 0px;">
		<!-- <button><a href="login.html">Login</a></button> -->
		<img src="SD_Images/avatarprofile.jpg" style="float: right;height: 24px;width: 25px;margin-top: 23px;margin-right: 15px;">
		<!-- <div style="height: 0px;float: right;"> -->
		<p style="font-size: 18px;float: right;margin-top: 24px;margin-right: 15px;">About Us</p>
			<img src="SD_Images/search.png" style="float: right;height: 35px;width: 30px;margin-top: 20px;margin-right: 25px;">
			<input class="search" type="search" name="search" placeholder="Search here..." style="color: grey;">
		<!-- </div> -->
		<!-- <p style="float: right;color: white;font-size: 18px;margin-top: 24px;margin-right: 5px;">Search:</p> -->
	</div>
	<div class="test">
		<div class="divbox">
			<img src="SD_Images/Image3.png" style="width: 100%;height: 50%; border-radius: 10px 10px 0 0;">
			<div style="width: 280px;">
				<div style="width: 280px;height: 20px;padding: 5px;margin-left: 0px;/*text-overflow: clip;*/font-weight: bolder;font-size: 18px;">Samsung Galaxy 15</div>
			</div>
		</div>
		<div class="divbox">
			<img src="SD_Images/Image3.png" style="width: 100%;height: 50%; border-radius: 10px 10px 0 0;">
			<div style="width: 280px;">
				<div style="width: 280px;height: 20px;padding: 5px;margin-left: 0px;/*text-overflow: clip;*/font-weight: bolder;font-size: 18px;">Samsung Galaxy 15</div>
			</div>
		</div>
		<div class="divbox">
			<img src="SD_Images/Image3.png" style="width: 100%;height: 50%; border-radius: 10px 10px 0 0;">
			<div style="width: 280px;">
				<div style="width: 280px;height: 20px;padding: 5px;margin-left: 0px;/*text-overflow: clip;*/font-weight: bolder;font-size: 18px;">Samsung Galaxy 15</div>
			</div>
		</div>
		<div class="divbox">
			<img src="SD_Images/Image3.png" style="width: 100%;height: 50%; border-radius: 10px 10px 0 0;">
			<div style="width: 280px;">
				<div style="width: 280px;height: 20px;padding: 5px;margin-left: 0px;/*text-overflow: clip;*/font-weight: bolder;font-size: 18px;">Samsung Galaxy 15</div>
			</div>
		</div>
		<div class="divbox">
			<img src="SD_Images/Image3.png" style="width: 100%;height: 50%; border-radius: 10px 10px 0 0;">
			<div style="width: 280px;">
				<div style="width: 280px;height: 20px;padding: 5px;margin-left: 0px;/*text-overflow: clip;*/font-weight: bolder;font-size: 18px;">Samsung Galaxy 15</div>
			</div>
		</div>
	</div>
	
	
	
	


</body>
</html>


