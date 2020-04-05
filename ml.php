<?php  
$servername = "localhost";
$username = "kalyan";
$password = "";
$dbname = "sd";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
session_start();
		$s = $_SESSION['id'];
		$r = $_SESSION['rid'];
		$k = "";
		$y = "SELECT * FROM `message` where (uidr = '$r' and uids = '$s') or( uidr = '$s' and uids = '$r') ";
		$u = mysqli_query($conn,$y);
		if(mysqli_num_rows($u)==0){
$x = "INSERT INTO `message`(`uids`, `uidr`, `msg`) VALUES ('$s','$r','$k')";
$bj = mysqli_query($conn,$x);
?>
<?php
}
?>

<script type="text/javascript">
	window.location.href="m.php?rid=<?php echo $r;?>";
</script>
