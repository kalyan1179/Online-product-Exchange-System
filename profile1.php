<?php require 'connect.inc.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<!-- <link rel="stylesheet" type="text/css" href="sty-profile.css"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
	<style type="text/css">
	/* The side navigation menu */
	/*.active, .btn:hover {
 		background-color: #666;
  		color: white;
	}

	a{
		height:50px;
		margin:0 0 10px 0;
	}*/
	html
		{
			scroll-behavior: smooth;
		}
		body{
			/*background: rgb(38, 39, 41);*/
			background:url(SD_Images/shop.jpg);background-size: cover;
			/*background:grey;*/
			margin: 0px;
		}
		.nav
		{
			/*position: fixed;*/
			background-color: rgba(0,0,0,0);
			height: 75px;
			/*width: 101.5%;*/
			margin-top: 0px;
			color: white;
			/*margin-left: 0px;*/
			padding:0px;
		}
		.nav a{
			font-size: 18px;float: right;margin-top: 24px;margin-right: 35px;color: white;
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
			/*font-size: 14px;*/
		}
		.search{
			border: 0px;
			width: 250px;
			height: 30px;
			float: right;
			margin-top:  22px;
			/*position: fixed;*/
			/*background-color: rgb(255, 255, 255);*/
			background-color:beige;
			border-radius: 25px;
		}
		#info {
  			height: 100%;
  			background-color: rgb(74, 72, 67);
  			padding-top: 3px;
		}
		.topnav{
		/*background-color: indianred;*/
    	background-color:darkred;
  		max-width: 100%;
  		margin-top:0px;
		height:70px;
		}
		.topnav button{
			  margin-top: 0px;
			  margin-bottom: 0px;
			  padding-left: 18px;
			  /*padding: 0px;*/
			  height:70px;
			  outline: none;
			  border:none;
			  background:transparent;
			  /*border-right:1.5px solid black;*/
			  padding-right:13px;
			  font-size:20px;
			  font-family: vardana; 
			  color:white;
			  text-shadow: 3.5px 3.5px 10px black;
			}

		.topnav button:hover{
		  display:inline-block;
		  background-color:black;
		  color:white;
		  height:70px;
		  cursor:pointer;
		  outline: none;
		  border:none;
		  padding-right:10px;
		  font-size:  20px;
		  font-family: vardana;
		  text-shadow: 3.5px 3.5px 10px tomato; 

		}

		.buttons2 button{
			  padding-left:18px;
			  height:60px;
			  width:100px;
			  border:none;
			  outline:none;
			  background-color:darkred;
			  padding-right:13px;
			  font-size:20px;
			  font-family: vardana; 
			  color:white;
			  text-shadow: 3.5px 3.5px 10px black;
			}

		.buttons2 button:hover{
		  display:inline-block;
		  background-color:black;
		  color:white;
		  height:60px;
		  outline:none;
		  border:none;
		  padding-right:10px;
		  font-size:  20px;
		  font-family: vardana;
		  text-shadow: 3.5px 3.5px 10px tomato; 

		}

		.buttons21{
				 margin-top:0%;
				 margin-left:40%;
				 float:left;
		}

		.buttons22{
				 margin-top:2.5%;
				 margin-left:50%;
		}

		table{
			  font-family:Calibri; 
			  color:black; 
			  font-size: 1.1em; 
			  font-weight: bold; 
			  /*background-color:#efcca2;*/
			  /*background-color:lightsteelblue; */
			  /*background-color:darkkhaki;*/
			  background-color:beige;
			  border-collapse: collapse;
			  border-radius:10px;
			  /*border: 2px solid black;*/
			  margin-top:40px;
		}
		td{
			padding: 8px;
		}
		.main-footer{
			 color:white;
			 font-size:20px;
		  	 font-family:vardana;
		}
	.w3-sidebar  a{
		height:50px;
		display:block;
		background-color:violet;
		color:white;
		/*margin:0 0 10px 0;*/
		 padding: 15px;
	}
	.w3-sidebar a:hover {
  		background-color: #ccc;
	}

 	.w3-sidebar a.active {
		  /*background-color: #4CAF50;*/
		  background-color:#666;
		  color: white;
	}

	</style>
<body >
	<div style=" padding-top: 0px;margin-bottom:  0px;">
	<div class="nav" >
		<img src="premiumlogo/logo.jpg" style="width: 250px;height: 75px;margin-top: 0px;">
		<!-- <button><a href="login.html">Login</a></button> -->
		<!-- <img src="SD_Images/avatarprofile.jpg" style="float: right;height: 24px;width: 25px;margin-top: 23px;margin-right: 15px;border-radius:25px;"> -->
		<div style="height: 0px;float: right;">
      <a href="#" >About Us</a>
    <a href="#" >Contact Us</a>
			<a href="#" class="w3-bar-item w3-button w3-border-bottom">Profile</a>
	<a href="#" class="w3-bar-item w3-button w3-border-bottom">Edit Profile</a>
	<a href="#" class="w3-bar-item w3-button w3-border-bottom">Sold</a>
	<a href="#" class="w3-bar-item w3-button w3-border-bottom">Bought</a>
	<a href="#" class="w3-bar-item w3-button w3-border-bottom">Wishlist</a>
	</div>

	<!-- <div class="w3-sidebar " style="width: 250px; background: none;">
	<a href="#" class="w3-bar-item w3-button w3-border-bottom">Profile</a>
	<a href="#" class="w3-bar-item w3-button w3-border-bottom">Edit Profile</a>
	<a href="#" class="w3-bar-item w3-button w3-border-bottom">Sold</a>
	<a href="#" class="w3-bar-item w3-button w3-border-bottom">Bought</a>
	<a href="#" class="w3-bar-item w3-button w3-border-bottom">Wishlist</a>
	</div> -->

	<div >

	<!-- <div class="w3-container w3-dark-grey">
	<h1>My Page</h1>
	</div>

	<div class="w3-container">
	<p>Use the w3-color class to change the background color of the sidebar.</p>
	<p>If you want an active/current link, to let the user know which page he/she is on, add the w3-color class to one of the links as well.</p>
	</div> -->
	<div class="w3-container" style="" >
		<div >
		<table cellpadding="10" border="0px"   align="center" style=" background: rgba(255,255,255,0.6);color:black ;font-size: 20px;/*rgba(255,255,255,1)*/;margin: 0px 0 0 55%;">
				<tr>
				<td>NAME</td>
				<td>:</td>
				<td style="padding-left: 35px;">RAMDEV BABA</td>
				</tr>
				<tr>
				<td>USERNAME </td>
				<td>:</td>
				<td style="padding-left: 35px;">RAMDEV</td>	
				</tr>
				<tr>
				<td>EMAIL ID</td>
				<td>:</td>

				<td style="padding-left: 35px;">ramdevpatanjalai@gmail.com</td>
				</tr>
				<tr>
				<td>GENDER</td>
				<td>:</td>

				<td style="padding-left: 35px;">male</td>
				</tr>
				<tr>
				<td>MOBILLE</td>
				<td>:</td>

				<td style="padding-left: 35px;">9000700409</td>
				</tr>
				<tr>
				<td>STATE</td>
				<td>:</td>

				<td style="padding-left: 35px;">Andhra Pradesh</td>
				</tr>
				<tr>
				<td>CITY</td>
				<td>:</td>

				<td style="padding-left: 35px;">Razam</td>
				</tr>
				<tr>
				<td>ADDRESS</td>
				<td >:</td>

				<td style="padding-left: 35px;">Opp. Axis bank Road,<br> beside Balji Restaurant,<br> Razam, <br>Andhra Pradesh 532127</td>
				</tr>
		</table>
	</div>

  </div>

</div>
      </div>
</body>

<script>
// Add active class to the current button (highlight it)
	var header = document.getElementById("myDIV");
	var btns = header.getElementsByClassName("btn");
	for (var i = 0; i < btns.length; i++) {
	  btns[i].addEventListener("click", function() {
	  var current = document.getElementsByClassName("active");
	  current[0].className = current[0].className.replace(" active", "");
	  this.className += " active";
	  });
	}
</script>

</html>

