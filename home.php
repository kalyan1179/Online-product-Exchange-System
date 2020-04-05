<?php require 'connect.inc.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<style type="text/css">
		html
		{
			scroll-behavior: smooth;
		}
		body{
			background: black;
			margin: 0px;
		}
		.nav
		{
			/*position: fixed;*/
			background-color: rgb(38, 39, 41);
			height: 75px;
			width: 100%;
			margin-top: 0px;
			color: white;
		}
		.nav button
		{
			/*margin-left: 20px;*/
			margin-left:5px;
			margin-top: 22px;
			/*margin-right: 10px;*/
			margin-right:5px;
			background-color: rgb(38, 39, 41);
			float: right;
			border: none;
			outline:none;
			font-size: 18px;
			/*border: 1px groove white*/
		}
		a{
			text-decoration: none;
			color: white;
			/*background-color: red;*/
		}

		.nav a:hover{
			text-decoration:underline;
			color:lightgoldenrodyellow;
			cursor:pointer;
			font-size:16px;
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
	</style>
</head>
<body style="width: 100%;">
	<div class="nav" >
		<img src="premiumlogo/logo.jpg" style="width: 250px;height: 75px;margin-top: 0px;">
		<?php
			session_start();
			if(isset($_SESSION['id'])){
				?>
					<a href="profile.php" id="profile" onclick="document.location=this.id+'.php';return false;">
		<img src="SD_Images/avatarprofile.jpg" style="float: right;height: 24px;width: 25px;margin: 23px 20px 0 10px;border-radius:50px">
		</a>
				<?php
			}
			else{
		?>
		<a href="signup.php" style="font-size:18px"><button style="margin-right: 10px">SignUp</button></a>
		<a href="login.php" style="font-size:18px;"><button style="margin-right: -1px;">SignIn</button></a>
		<a href="alogin.php" style="text-decoration: none; font-size: 18px;float: right;margin-top: 24px;margin-right: 10px;">Admin</a>

		<?php
	}
		?>
		<!-- <div style="height: 0px;float: right;"> -->
		<a href="aboutus.html" style="text-decoration: none; font-size: 18px;float: right;margin-top: 24px;margin-right: 20px;">About Us</a>
		<a href="contactus.php" style="text-decoration: none;font-size: 18px;float: right;margin-top: 24px;margin-right: 20px;">Contact Us</a>
		<a href="m.php"> <img src="SD_Images/messagew.png" style="float: right;height: 35px;width: 30px;margin-top: 20px;margin-right: 25px;"></a>
			<!-- <img src="SD_Images/search.png" style="float: right;height: 35px;width: 30px;margin-top: 20px;margin-right: 25px;">
			<input class="search" type="search" name="search" placeholder="Search here..." style="color: grey;">
 -->		<img src="SD_Images/search.png" onclick="getInputValue();" style="float: right;height: 35px;width: 30px;margin-top: 20px;margin-right: 25px;">
			<input id="myInput"  type="text" class="search" name="search" placeholder="Search here..." style="color: grey;">
	</div>

<div class="container" style="width: 100%;margin: 0px 0 0 0px; ">
  <!-- <h2>Carousel Example</h2>   -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="height: 500px;vertical-align: 50% margin: 0px;">
      <div class="item active" >
       <a href="buy.php"> <img src="SD_Images/Image1.jpg" alt="lady" style="width:100%;height: 900px;margin-top: -350px;"></a>
      </div>

      <div class="item">
       <a href="buy.php"> <img src="SD_Images/Image2.jpg" alt="products" style="width:100%;height: 900px;"></a>
      </div>
    
      <div class="item">
       <a href="buy.php">  <img src="SD_Images/Image4.jpg" alt="Suit case" style="width:100%;height: 900px;margin-top: -370px"></a>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  <!-- </div> -->
</div>
	<!-- <img src="SD_Images/arrow-down.gif" style="width: 80px;height: 60px;margin-left: 47%;"> -->
	<!-- <a href="#info"><img src="SD_Images/arrow-down.gif" onclick="document.getElementById('info').scrollIntoView();" style="width: 80px;height: 60px;margin-left: 47%;margin-top: 10px;"></a> -->
	<img src="SD_Images/arrow-down.gif" onclick="document.getElementById('info').scrollIntoView();" style="width: 80px;height: 60px;margin-left: 47%;margin-top: 10px;">
</div>

<div id="info">
	<div class="box">
		<div style="width: 50%; float: left;">
		<p style="font-size: 50px;color: white;margin-left: 20px;padding-top: 130px;background: black;border:0px;">Want to buy Something?</p><!-- <img src="SD_Images/world.jpe" style="height: 50px;width: 50px;"> -->
		<!-- <button style="border: 1px solid white;margin-left: 40%;width: 150px;font-size: 60px;color: white;background: black;">BUY</button> -->
		<p style="font-size: 26px;color: white;margin-left: 156px;padding-top: 30px;background: black;border:0px;">We are always open.</p>
		<a href="buy.php"><img src="SD_Images/buy.png" style="margin-left: 25% ;height:70px; width: 250px;border-radius: 10px; "></a>
 		</div>	
 		<div style="float: right;">
 			<img src="SD_Images/buy.gif" style="width: 500px;height: 300px;margin-top: 100px;margin-right: 100px;">
 		</div>
	</div>
	<div class="box" >
		<div style="width: 50%;float: left;">
 			<img src="SD_Images/sell.gif" style="width: 400px;height: 400px;margin-top: 100px;margin-left:  100px;">
 		</div>
		<div style="width: 50%;float: right;">
 			<p style=" font-size: 50px;color: white;margin-top: 100px;padding-top: 30px;background: black;border: 0px;">Tired of using your Product?<br>Sell Here.</p>
		<!-- <img src="SD_Images/timetosell.png" style="margin-left: 35%"> -->
		<a href="sell.php"><button style="border: 0px solid white;background:#db0510;margin-left: 30px; width: 180px;height: 55px;color: white; font-size: 30px; font-family: sans-serif;margin-top: 15px;border-radius: 10px;">Sell now</button></a>

 		</div>	
	</div>
</div>
	<div style="height: 100px;background: black;">
		
	</div>

</body>
</html>


<!-- 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="js/jquery.js" ></script>
Latest compiled and minified CSS
<link rel="stylesheet" href="css/bootstrap.min.css" >

Optional theme
<link rel="stylesheet" href="css/bootstrap-theme.min.css" >

Latest compiled and minified JavaScript
<script src="js/bootstrap.min.js" ></script>

</head>
<body>

</body>
</html> -->
<script>
        function getInputValue(){
            // Selecting the input element and get its value 
            var inputVal = document.getElementById("myInput").value;
            
            // Displaying the value
            // alert(inputVal);
            var x = "search.php?s="+inputVal;
            window.location.href=x;
        }
        function handleSelect(elm)
{
window.location = elm.value;
}
    </script>