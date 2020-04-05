<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sd";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// echo $_SESSION['id'];
if(isset($_SESSION['id'])){
	$url = "";
	$id = $_SESSION['id'];
	if(isset($_GET['id'])){
		$pid = $_GET['id'];
		$p = "DELETE FROM `wishlist` where wpid = '$pid' and wuid = '$id'";
		mysqli_query($conn,$p);
		if(isset($_GET['i'])){
			$url = "product.php?ids=".$pid;
		}
		else{
			$url = "wishlist.php";
		}
		?>
		<?php
	}
}
?>

<script type="text/javascript">
	window.location.href="<?php echo $url;?>";
</script>
