<?php 
// require 'connect.inc.php';
$servername = "localhost";
$username = "kalyan";
$password = "";
$dbname = "sd";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
session_start();
if(isset($_SESSION['id'])){
	$s = $_SESSION['id'];
	$r = $_GET['rid'];
	$tu = "SELECT * FROM `user` WHERE uid in (SELECT distinct uids FROM `message` WHERE (uidr = '$s' or uids = '$s') order by `date`) and uid <> '$s' union SELECT * FROM `user` WHERE uid in (SELECT distinct uidr FROM `message` WHERE (uidr = '$s' or uids = '$s') order by `date`) and uid <> '$s'";
	$io = mysqli_query($conn,$tu);
	if(mysqli_num_rows($io)>0){
	while($rowt = mysqli_fetch_assoc($io)){
		$mk = $rowt['uid'];
		if($mk == $r){
			$colors = "red";
		}
		else{
			$colors = "rgba(20,20,20,0.6)";
		}
	?>
		<div class="names" style="width: 100%;height: 70px;background: <?php echo $colors;?>;margin-top: 1px;" onclick="window.location.href='m.php?rid=<?php echo $mk;?>'">
			<img src="SD_Images/avatarprofile.jpg" style="border-radius: 50%;height: 50px;width: 50px;float: left;margin-top: 10px;">
			<p style="padding-left: 5px;font-size: 17px; margin-top: 20px;float: left;text-overflow: hidden;color: white;word-break:all;">
			<?php echo $rowt['name'];?>
				
			</p>
		</div>
		<?php
	}
	}
	
	}
	

?>