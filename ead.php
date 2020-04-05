<?php
session_start();
require 'connect.inc.php';
if(isset($_POST['lg'])){
    $username = $_POST['username'];

    $password = $_POST['password'];
// $_SESSION['sname']=$name;
// $_SESSION['id']=$user_id;
    $name = $_SESSION['aid'];
$query = "UPDATE `admin` set adminname='$username' , password='$password' where adminname='$name'";
$result=mysqli_query($conn,$query);
?>
  <!-- <script type="text/javascript">window.location.href="admin.php"</script> -->
<?php 

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>UpdateAdminDetails</title>
	
	<style type="text/css">
		body{
	margin:0;
	padding:0;
	font-family: sans-serif;
	/*background: #090000;*/
	/*background: url("SD_Images/bg1.jpg");*/
	background-image: url('SD_Images/bg5.jpe');
	background-size: cover;
}

.loginbox pre{
	/*margin-top:6%;
	margin-left:6.5%;*/
	font-family: sans-serif;
	font-weight: bold;
	font-size:19.05px;
	color: #000;
}
.loginbox{
	width:420px;
	height:520px;
	/*background: #123;*/
	color: grey;margin: 8% 0 0 35%;
	/*top:40%;
	left:20%;
	float: left;
	position: absolute;
	transform: translate(-50%,-35%);*/
	box-sizing:border-box;
	/*border: 1px solid white;*/
  	padding: 60px 35px;
  	font-size: 18px;
  	/*box-shadow: 5px 10px 8px #888888;*/
}

.loginbox Label{
	margin: 0;
	padding: 0;
	font-weight: bold;
	color: rgba(255,255,255,0.8);
}

.loginbox input{
	width: 100%;
	margin-bottom: 15px;
}

.loginbox input[type="text"],input[type="password"]
{
	border:none;
	border-bottom:2px solid lightgrey;
	background: transparent;
	outline:none;
	height: 40px;
	color:#fff;
	font-size: 14px;
}

.loginbox input[type="submit"]
{
	outline: none;
	border:none;
	background-color:tomato;
	/*box-shadow:5px 5px 15px 1px tomato;*/
	height: 40px;
	color: #fff;
	font-size: 17px;
	border-radius:25px;
}

.loginbox input[type="submit"]:hover
{
	cursor:pointer;
	background:seagreen;
	/*box-shadow:5px 5px 15px 1px seagreen;*/
	color:#fff;
}

.signupbox{
	width:520px;
	height:520px;
	/*background: #123;*/
	color: grey;
	top:40%;
	left:65.0%;
	float: left;
	position: absolute;
	transform: translate(-50%,-35%);
	box-sizing:border-box;
	/*border: 1px solid white;*/
	border-left:5px solid lightgrey;
  	padding: 65px 70px;
  	padding-left: 100px;
  	font-size: 18px;
 }

.signupbox p{
	/*margin-top:100px;*/
	/*margin-left:6.5%;*/
	font-family: verdana;
	/*font-weight: bold;*/
	font-size:19.05px;
	/*color: #000;*/
	color: rgba(0,250,255,0.9);
}
 .signupbox input[type="submit"]
{
	outline: none;
	border:none;
	background-color:tomato;
	/*box-shadow:5px 5px 15px 1px tomato;*/
	height: 40px;
	width:60%;
	margin-left:90px;
	color: #fff;
	font-size: 17px;margin-top: 5px;
	border-radius:25px;
}

.signupbox input[type="submit"]:hover
{
	cursor:pointer;
	background:seagreen;
	color:#fff;
	/*box-shadow:5px 5px 15px 1px seagreen;*/
}
	</style>
</head>
<body>
	<div class="loginbox">
		<p><h1 style="color:tomato;font-family:times new roman;font-style:italic;font-weight: bold;font-stretch:ultra-expanded;margin-bottom: 15px;">Update Details</h1></p> 
	<form action="" method="POST">
		<LABEL>User Name:  </LABEL> 	
		<input type="text" name="username" placeholder="Enter UserName"></input>
		<br><br>
		<label>Password:</label>
		<input type="Password" name="password" placeholder="Enter Password"></input>
		<br><br><br>
		<!-- <input type="submit" name="submit" formaction="profile.php" value="LOGIN"> -->
		<button type="submit" name="lg" style="outline: none;border: 0px;border-radius: 25px;width: 60%;height: 40px;background: tomato;color: white;margin-left: 90px;" >UPDATE</button>
	</form>
   </div>
   <!-- <div class="signupbox">
   	<p><h1 style="color:tomato;font-family:times new roman;font-style:italic;font-weight: bold;font-stretch:ultra-expanded;font-size: 32px;text-align: center;margin-top: 125px; ">Don't have an account?</h1></p>
   
   		
    	 <form>
		
			<input type="submit" name="submit" value="CREATE AN ACCOUNT" formaction="signup.php" target="_blank">
	</form>
   </div> -->
</body>
</html>