<!-- sender $_SESSION['id'] -->
<!-- reciever $_SESSION['rid'] -->
<?php require 'connect.inc.php'; 
session_start();
	if(isset($_SESSION['id'])){
		$s = $_SESSION['id'];
		if(isset($_GET['rid'])){
			$_SESSION['rid']=$_GET['rid'];
			$r = $_SESSION['rid'];
		}else{
			$r = "NULL";
		}

		if(isset($_POST['send']) && $_POST['message']!=''){
		echo $_POST['send'];
			$msg = $_POST['message'];
			$qh = "INSERT INTO `message`( `uids`, `uidr`, `msg`) VALUES ('$s','$r','$msg')";
			$res = mysqli_query($conn,$qh);
		}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<!-- <meta http-equiv="refresh" content="5" >  -->
	<style type="text/css">
		html
		{
			scroll-behavior: smooth;
		}
		body{
			/*background: rgb(38, 39, 41);*/
			/*background: url("SD_Images/Image1.jpg");background-attachment: fixed;background-repeat: no-repeat;background-size:cover;
			margin: 0px;*/
background: #ee0979;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ff6a00, #ee0979);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ff6a00, #ee0979); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


background: #A770EF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background:white /*rgba(0,0,0,0.9)*/;
background-image: url(SD_Images/download.jpe);
background-image: url(SD_Images/images.jpe);

		}
		.nav
		{
			/*position: fixed;*/
			/*background-color: black;*/
			height: 60px;
			width: 100%;
			margin-top: 0px;
			color: white;
			/*margin-left: 5px;*/
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
		.divbox{
			float: left;
			width: 280px;height: 350px;background: white; margin-top: 30px;margin-bottom: 10px;margin-left: 20px;border-radius: 10px;
		}
		div {
  			word-wrap: break-word;
  			overflow: hidden;text-overflow: clip;
		}
	</style>
</head>
<body style="width: 100%;height: 580px;">
	<div style="float: left;width: 26%;height:657px;overflow-y: scroll;">	
		<?php
			if(isset($_GET['rid'])){
				$parameter = -2;
			}
			else{
				$parameter = -1;
			}
		?>
		<div style="float: left;width: 50px" onclick="window.location.href='javascript:history.go(<?php echo $parameter;?>)'">
	<!-- <p>Back to Buy Products</p> -->

	<img src="SD_Images/la.png" style="width: 60px;height: 70px;">
</div>
		<div style="width: 70%;height: 70px;background: rgba(200,200,200,0.1);">
				<p style="font-size: 25px;text-align: center;margin: 20px 20px 0 0;color:black ;float: right; ">MESSAGES</p>	
		</div>
		<hr style="margin: 0;">
		<div class="names" >
			
		</div>
		
		<!-- style="width: 100%;height: 70px;background: rgba(20,20,20,0.6);margin-top: 1px;" -->
		

	</div>
	<div   style="float: right;width: 74%;height: 607px;overflow-y: scroll;background-image: url('SD_Images/wallpaper.jpg');padding-bottom: 10px;user-select: inherit;
	">
		<div style="height: 70px;width: 100%;background: #EDEDED;position: fixed;font-size: 30px;padding: 15px;">
			<?php if(isset($_GET['rid'])){?>


			<img src="SD_Images/avatarprofile.jpg" style="border-radius: 50%;height: 50px;width: 50px;float: left;margin-top: -5px;margin-right: 5px;">
			
			<?php 
				}
				else{
					?>
<img src="SD_Images/avatarprofile.jpg" style="float: left; border-radius: 50%;height: 50px;width: 50px;float: left;margin-top: -5px;margin-right: 5px;">
					<?php
				}

				$i =mysqli_fetch_assoc(mysqli_query($conn,"select * from `user` where uid = '$r'"))['name'];
				echo "$i";
			?>



		</div>
		
		<div style="padding-top: 70px; " class="sender">
			
			<!-- <div style="float: right;max-width: 41%;background: rgba(200, 200, 200 , 0.4);color: white;border-radius: 5px;margin-top:10px;margin-right: 25px;min-width: 100px; ">
				<p style="padding-left: 5px;margin: 2px 0 2px 0 ;font-size: 125%;color: rgba(250,250,250,0.8);">
					hi
				</p>
				<p style="float: right;font-size: 9px;margin-right: 2px;">29-01-2020 11:27</p>
			</div> -->
		</div>
		<!-- <hr style="background: : black;"> -->
		
	</div>
		<div id="scroll" style="bottom: 0%;width: 74%;/*height: 50px;*/bottom: 0px;float: right;background: rgba(255,255,255,1);scroll-behavior: smooth;">
			<form method="POST" style="height: 50px;">
				
			<input type="text" name="message" style="height: 80%;width: 92%;border-radius: 21px;margin: 5px 0 0 10px;border: 0px;padding: 3px;font-size: 18px;background: rgba(20,20,20,0.3);">
			<button type="submit" name="send"  style="float: right; height: 32px;width:50px;margin: 8px 15px 0 0;border: 0; background: white;"><img src="SD_Images/sendi.png" style="float: right; height: 32px;width:50px;margin: -3px -8px 0 0px;"></button>
			</form>
		</div>
</body>
</html>
<?php
}
else{
	?>
<script type="text/javascript">
	alert("Login First!!");
	window.location.href="login.php";
</script>
	<?php
}
?>

<script>
	function f(){
		// $('#scroll').scrollTop($('#scroll')[0].scrollHeight);
		// $("#scroll").animate({ scrollTop: $('#scroll').prop("scrollHeight")}, 100);
		$("#scroll").animate({scrollTop: $('#scroll')[0].scrollHeight - $('#scroll')[0].clientHeight}, 1000);

	}
	// f();
</script>
<script type="text/javascript">
	// $('.sender').load("ms.php");
	$(".sender").load('ms.php?rid=<?php echo $r?>');
	$(".names").load('names.php?rid=<?php echo $r?>');
	setInterval(function(){$(".sender").load('ms.php?rid=<?php echo $r?>')}, 1000);
	setInterval(function(){$(".names").load('names.php?rid=<?php echo $r?>')}, 1000);

	// $('.other').load("mr.php");

</script>
