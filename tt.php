<?php
// require 'connect.inc.php';
session_start();
$servername = "localhost";
$username1 = "root";
$password = "";
$dbname = "sd";
// echo "De";
// Create connection
$conn = mysqli_connect($servername, $username1, $password, $dbname);
// require 'signup.php';
$name = $_GET['username'];
if(isset($_SESSION['id'])){
	$rt = $_SESSION['id'];
$q = "SELECT * FROM `user` WHERE username = '$name' and uid<>'$rt'";	
}
else{
$q = "SELECT * FROM `user` WHERE username = '$name'";
}
$r = mysqli_query($conn,$q);
if(mysqli_num_rows($r)>0) echo "User Name Already Exists";
else echo "";
// echo mysqli_num_rows($r);

?>
