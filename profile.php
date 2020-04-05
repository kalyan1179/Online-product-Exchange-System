<?php 
// require 'connect.inc.php';
$servername="localhost";
	$username="root";
	$password="";
	$dbname="sd";
  #create connection
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	session_start();
	if(isset($_SESSION['id'])){
		$uid = $_SESSION['id'];
		$q = "SELECT * FROM `user` WHERE uid = '$uid'";
		$res = mysqli_query($conn,$q);
		if(mysqli_num_rows($res)==1){
			$data = mysqli_fetch_assoc($res);
			if($data['gender']=='M'){
				$data['gender']="Male";
			}
			elseif($data['gender']=='F'){
				$data['gender']="Female";
			}
			else{
				$data['gender']="Not Mentioned";
			}
		}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<link rel="stylesheet" type="text/css" href="sty-profile.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
	<style type="text/css">
	/* The side navigation menu */
	/*.active, .btn:hover {
 		background-color: #666;
  		color: white;
	}
*/
	/*a{
		height:50px;
		margin:0 0 10px 0;
	}*/

	.w3-sidebar{
		display:block;
		background-color:black;
	}

	.w3-sidebar  a{
		height:30px;
		display:block;
		background-color:#111;
		color:white;
		font-family: verdana;
		/*margin:0 0 10px 0;*/
		 padding: 15px;
	}
	.w3-sidebar a:hover {
  		background-color: #ccc;
  		text-decoration:none;
  		color:black;
  		font-weight:bold;
	}

 	.w3-sidebar a.active {
		  /*background-color: #4CAF50;*/
		  background-color:#666;
		  color: white;
	}

	<script>
 /*Add active class to the current button (highlight it)*/
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
  

	</style>
</head>
<body style="width:100%;">
	<div class="nav" >
		<a href="home.php" id="home" onclick="document.location=this.id+'.php';return false;">
		<img src="premiumlogo/logo.jpg" style="width: 250px;height: 75px;margin-top: 0px;">
		<!-- <button><a href="login.html">Login</a></button> -->
		<!-- <img src="SD_Images/avatarprofile.jpg" style="float: right;height: 24px;width: 25px;margin-top: 23px;margin-right: 15px;border-radius:25px;"> -->
		<!-- <div style="height: 0px;float: right;"> -->
      	<a href="logout.php" style="text-decoration: none; font-size: 18px;float: right;margin-top: 24px;margin-right: 15px;">Log out</a>

      	<a href="aboutus.html" style="text-decoration: none; font-size: 18px;float: right;margin-top: 24px;margin-right: 15px;">About Us</a>
      	<a href="contactus.php" style="text-decoration: none; font-size: 18px;float: right;margin-top: 24px;margin-right: 15px;">Contact Us</a>
		<a href="m.php"> <img src="SD_Images/messagew.png" style="float: right;height: 35px;width: 30px;margin-top: 20px;margin-right: 25px;"></a>
	</div>

	<div class="w3-sidebar " style="width:250px;float:left;">
		<a href="profile.php" class="active">Profile</a><hr style="margin: 0;">
		<a href="editprofile.php">Edit Profile or Password</a><hr style="margin: 0;">
		<a href="uploadedproducts.php">My Uploads</a><hr style="margin: 0;">
		<a href="sold.php">My Sold Products</a><hr style="margin: 0;">
		<!-- <a href="#">Bought</a><hr style="margin: 0;"> -->
		<a href="wishlist.php">My Wishlist</a><hr style="margin: 0;">
	</div>


	<!-- <div class="w3-container w3-dark-grey">
	<h1>My Page</h1>
	</div>

	class="w3-bar-item w3-button w3-border-bottom
	
	<div class="w3-container">
	<p>Use the w3-color class to change the background color of the sidebar.</p>
	<p>If you want an active/current link, to let the user know which page he/she is on, add the w3-color class to one of the links as well.</p>
	</div> -->
	<div style="margin-left:250px;">
	<div class="w3-container" style="background:url(shop.jpg);background-size:cover;height:580px;margin-top: -60px;">
	  <div class="data">
		<table cellpadding="10" class="table" style="padding-top: 0px;">
				<tr>
				<td>NAME:</td>
				<td><?php echo $data['name'];?></td>
				</tr>
				<tr>
				<td>USERNAME: </td>
				<td><?php echo $data['username'];?></td>	
				</tr>
				<tr>
				<td>EMAIL ID:</td>
				<td><?php echo $data['email'];?></td>
				</tr>
				<tr>
				<td>GENDER:</td>
				<td><?php echo $data['gender'];?></td>
				</tr>
				<tr>
				<td>PHONE NUMBER:</td>
				<td><?php echo $data['phone no'];?></td>
				</tr>
				<tr>
				<td>STATE:</td>
				<td><?php echo $data['state'];?></td>
				</tr>
				<tr>
				<td>CITY:</td>
				<td><?php echo $data['city'];?></td>
				</tr>
				<tr>
				<td>ADDRESS:</td>
				<td><?php echo $data['address'];?></td>
				</tr>
	 	</table> 

	</div>

  </div>

 </div>

</body>

</html>
<?php 
}
else{
	?>
<script type="text/javascript">
	alert("login first");
	window.location.href="login.php";
</script>
	<?php }
 ?>
