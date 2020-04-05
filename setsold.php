<?php
	require 'connect.inc.php';
	session_start();
	if(isset($_GET['ids'])){
		$jn = $_GET['ids'];
	$tg = "UPDATE `product` set sold = 1 where pid = '$jn'";
	mysqli_query($conn,$tg);
	?>
	<script type="text/javascript">
		window.location.href="sold.php";
	</script>
	<?php

	}
?>