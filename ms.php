<?php 
// require 'connect.inc.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sd";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
session_start();
if(isset($_SESSION['id'])){
	$s = $_SESSION['id'];
	$r = $_GET['rid'];	
	$qm = "SELECT * FROM `message` where (uids = '$s' and uidr = '$r') or (uids = '$r' and uidr = '$s') order by `date` desc";
	$res = mysqli_query($conn,$qm);
	// $bj = mysqli_num_rows($res);

	while($rows = mysqli_fetch_assoc($res)){
		if($rows['msg']!=""){
		if($rows['uids']==$s){
		?>
		<div style="width: 100%;padding:10px 0 0 0;" class="sender">
			
			<div style="float: right;max-width: 41%;background: rgba(200, 200, 200 , 0.4);color: white;border-radius: 5px;margin-top:10px;margin-right: 25px;min-width: 100px; ">
				<p style="padding:0 5px 0 5px;margin: 2px 0 2px 0 ;font-size: 125%;color: rgba(250,250,250,0.8);">
					<?php echo $rows['msg']; ?>
				</p>
				<p style="float: right;font-size: 11px;;margin:0 1px 0 4px;"><?php echo $rows['date']; ?></p>
			</div>
		</div>
		<?php
	}
	else{
		?>
		<div style="width: 100%;padding:10px 0 0 0;" class="other">
			
			<div style="float: left;max-width: 41%;background: rgba(200, 200, 200 , 0.4);color: white;border-radius: 5px;margin-top:10px;margin-left: 25px;min-width: 100px; ">
				<p style="padding:0 5px 0 5px;margin: 2px 0 2px 0 ;font-size: 125%;color: rgba(250,250,250,0.8);">
					<?php echo $rows['msg']; ?>
				</p>
				<p style="float: right;font-size: 11px;margin:0 2px 0 2px;"><?php echo $rows['date']; ?></p>
			</div>
		</div>
		<?php
	}
}
	}
}
?>
