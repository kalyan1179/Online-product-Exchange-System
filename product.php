<?php require 'connect.inc.php'; 
	session_start();
	if(isset($_SESSION['id'])){
		if(isset($_GET['ids'])){
			$bn = $_GET['ids'];
		if(isset($_POST['atw'])){
			$uid = $_SESSION['id'];
			$qt = "INSERT INTO `wishlist`(`wpid`, `wuid`) VALUES ('$bn','$uid')";
			mysqli_query($conn,$qt);

?>
<script type="text/javascript">
var url = window.location.href;

window.location.href=url;</script>
<?php
		}
			$qr = "SELECT * FROM `product` WHERE pid = '$bn'";
			$rr = mysqli_query($conn,$qr);
			$mn = "";
			while($ro = mysqli_fetch_assoc($rr)){
				$rt = $ro['uid']; $mn = $ro['uid'];
				$_SESSION['rid']=$mn;
			$qq = "SELECT  * FROM `user` WHERE uid='$rt'";
			$r1 = mysqli_query($conn,$qq);
			$row1 = mysqli_fetch_assoc($r1);

	?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Product Page</title>
	<style type="text/css">
		html
		{
			scroll-behavior: smooth;
		}
		body{
			/*width: 1226px;*/
			/*background: rgba(0,200,200,0.5);*/
			background: rgba(20,20,20,0.9);

			/*background: white;*/
			/*background: url("SD_Images/Image1.jpg");background-attachment: fixed;background-repeat: no-repeat;background-size:cover;
			/*margin: 0px;*/
		}
		.nav
		{
			/*position: fixed;*/
			background-color: rgba(0,20,20,0.1);
			height: 75px;
			width: 100%;
			margin-top: 0px;
			color: white;
			/*/margin-left: 5px;/*/
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
			/*/background-color: red;/*/
		}
		.nav a:hover{
			text-decoration: underline;
			color:lightgoldenrodyellow;
			cursor:pointer;
			font-size: 14px;
		}
		.search{
			border: 0px;
			width: 250px;
			height: 30px;
			float: right;
			margin-top:  22px;
			/*/position: fixed;*/
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
		div {
  			word-wrap: break-word;
  			text-overflow: clip;
		}
		.white
		{
			width:65%;border: 0px solid white;margin:10px 0 0 15px;background: rgba(255,255,255,0.9);
		}
		.white .x{
			float: left;
		}
	</style>
</head>
<body>
	<div class="nav" >
		<a href="home.php"><img src="premiumlogo/logo.jpg" style="width: 250px;height: 75px;margin-top: 0px;"></a>
		<!-- <button><a href="login.html">Login</a></button> -->
		<a href="profile.php" id="profile" onclick="document.location=this.id+'.php';return false;">
		<img src="SD_Images/avatarprofile.jpg" style="float: right;height: 24px;width: 25px;margin-top: 23px;margin-right: 15px;border-radius:50px;">
		</a>
		<!-- <div style="height: 0px;float: right;"> -->
		<a href="aboutus.html" style="text-decoration: none; font-size: 18px;float: right;margin-top: 24px;margin-right: 15px;">About Us</a>
    	 <a href="contactus.php" style="text-decoration: none; font-size: 18px;float: right;margin-top: 24px;margin-right: 15px;">Contact Us</a>
    	 <a href="wishlist.php" style="text-decoration: none; font-size: 18px;float: right;margin-top: 24px;margin-right: 15px;">Wishlist</a>

      		<a href="m.php"> <img src="SD_Images/messagew.png" style="float: right;height: 35px;width: 30px;margin-top: 20px;margin-right: 25px;"></a>

			<img src="SD_Images/search.png" style="float: right;height: 35px;width: 30px;margin-top: 20px;margin-right: 25px;">
			<input class="search" type="search" name="search" placeholder="Search here..." style="color: grey;">
		<!-- </div> -->
		<!-- <p style="float: right;color: white;font-size: 18px;margin-top: 24px;margin-right: 5px;">Search:</p> -->
	</div>
	<div style="background:rgba(0,111,121,0.9); ;border-radius: 15px; color:white;float: right;width: 30%;margin:10px 25px 0 5px;border: 1px solid white;height: 80px;">
		<p style="font-size: 25px;margin: 5px 0 0 10px;"><!-- Price: ₹10000 --><?php echo "₹".$ro['price'];?></p>
		<div style="width: 100%;padding: 5px;margin-left: 4px;font-size: 14px; ">
			<p style="float: left;text-overflow: clip;width: 280px;word-wrap: unset;color:white;font-size: 15px;"><?php echo "".$row1['city'].",".$row1['state'];?></p> 
			
			<p style="float: right;"><?php echo $ro['date'];?></p> 
		</div>
		<div style="width: 100%;background: rgba(255,255,255,0.9);border-radius: 15px;padding: 5px;font-size: 15px; margin-top: 40px;color: black;">
			<!-- <p style="font-weight: bold;">S</p> -->
			<h1 style="text-align: center;font-weight: bold;font-size: 28px;font-family: serif;">Seller Details</h1>
			<p>
				<?php
					$hi = "SELECT * FROM `user` WHERE uid='$mn'";
					$hj = mysqli_query($conn,$hi);
					while($hk=mysqli_fetch_assoc($hj)){ 
				?>
				<table>
					<tr>
						<th>Name:</th>
						<td style="padding:5px 0 5px 10px;"><?php echo $hk['name'];?></td>
					</tr>
					<tr>
						<th>Contact :</th>
						<td style="padding:5px 0 5px  10px;"><?php echo $hk['phone no'];?></td>
					</tr>
					<tr>
						<th>Email-id:</th>
						<td style="padding:5px 0 5px  10px;"><?php echo $hk['email'];?></td>
					</tr>
					<tr>
						<th>Address:</th>
						<td style="padding:5px 0 5px  10px;word-break: break-word;"><?php echo $hk['address'];?></td>
					</tr>
					<tr>
						<th>City:</th>
						<td style="padding:5px 0 5px  10px;"><?php echo $hk['city'];?></td>
					</tr>
					<tr>
						<th>State:</th>
						<td style="padding:5px 0 5px  10px;"><?php echo $hk['state'];?></td>
					</tr>
				</table>









				<!-- Name: <?php echo $hk['name'];?> <br>
				Phone No:<?php echo $hk['phone no'];?><br>
				Email:<?php echo $hk['email'];?><br>
				Address:<?php echo $hk['address'];?><br> -->
				<?php } ?>
			</p>
		</div>
		<?php if($_SESSION['id'] != $rt){?>
			<a href="ml.php"><button style="height: 60px; margin: 20px 0 0 0%;background:white ;padding: 10px;width: 100%;border: 0; border-radius: 10px;font-size: 25px;font-weight: bold; color: rgba(5,186,7,0.8);">MESSAGE SELLER</button></a>
			
			<?php }
				if($_SESSION['id'] == $rt && $ro['sold']==0){
			?>
			<a href="setsold.php?ids=<?php echo $bn;?>"><button style="height: 60px; margin: 20px 0 0 0%;background:white ;padding: 10px;width: 100%;border: 0; border-radius: 10px;font-size: 25px;font-weight: bold; color: rgba(5,186,7,0.8);">THIS PRODUCT IS SOLD</button></a>		
			<?php } ?>		
	</div>
	<div class="white" >
		<div >
			<!-- <img src="SD_Images/Image3.png" style="height: 350px;width: 400px;margin-left: 220px;border: 0px; ">	 -->
			<div class="container" style="width: 100%;margin: 0px 0 0 0px; ">
  <!-- <h2>Carousel Example</h2>   -->
  <div id="myCarousel" class="carousel slide"  >
    <!-- Indicators -->
    <ol class="carousel-indicators">
    	<?php 
    		$z = "SELECT * FROM `images` WHERE pid = '$bn' order by `id`";
    		$z1 = mysqli_query($conn,$z);
    		$cou = mysqli_num_rows($z1);
    		for($i=0 ;$i<$cou;$i++){
    			if(!$i){$act = "active";}else $act = "";

    	?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $i;?>" class=<?php echo $act;?> ></li>
      <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li> -->
  			<?php }?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="height: 500px;vertical-align: 50% margin: 0px;">
    <?php 
    	$j=0;
    		while($rt = mysqli_fetch_assoc($z1)){
$p=$rt['name'];
$act="";
    if(!$j){$act = "active";}
    echo('
      <div class="item '.$act.'" >
       <img src="uploads/'.$p.'" alt="Unable to load" style="width:650px;height:500px;margin-left:100px;">
      </div>
    ');
	
    	$j++;}
    ?>  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <!-- <span class="sr-only">Previous</span> -->
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <!-- <span class="sr-only">Next</span> -->
    </a>
  <!-- </div> -->
</div>
		</div>
		<hr>
		<?php
			$n = $_SESSION['id'];
			if($mn!=$n){


			$j = "SELECT * FROM `wishlist` where wpid = '$bn' and wuid = '$n'";
			$rf = mysqli_query($conn,$j);
			if(mysqli_num_rows($rf)==0){
		?>
		<form action="" method="post">
		<button name="atw" type="submit" style="background: #2A65EA;color: white; float: right;margin:5px 5px 0 0;border: 0px;font-size: 15px;font-weight: bold;padding: 0 5px 0 5px; width: 130px;height: 50px;">ADD TO WISHLIST</button>
	</form>
	<?php
}else{
	?>
	<a href="k.php?id=<?=$bn?>&i=1"><button name="atw" type="submit" style="background: #f0050A;color: white; float: right;margin:5px 5px 0 0;border: 0px;font-size: 15px;font-weight: bold;padding: 0 5px 0 5px; width: 130px;height: 50px;">REMOVE FROM WISHLIST</button></a>
	<?php
}}
	?>
		<img src="SD_Images/shar1.png" style="float: right;margin:15px 15px 0 0;height: 30px;" onclick="Copy();">
		<div  style="width: 75%;/*color: black;*/ font-size: 25px;font-weight: bold;"><?php echo $ro['pname'];?></div>
		<div  style="margin:5px 0 0 0px;font-size: 20px;font-weight: bold;">
				DESCRIPTION: 
		</div>
		<br>
		<div  style="margin:0px 0 0 50px;font-size:15px;">
				<!-- <p>Samsung Galaxy S10<br>3GB RAM<br>48 pixel Back Camera & 16 pixel Rear Camera<br>3 months old. </p> -->
				<?php echo $ro['description'];?>
		</div>
	</div>

<label>Copied Link:</label>
<input class="cc" style="width: 90%;float: right;margin: -2px 0 0 0 ;">

</body>
</html>
	<?php 
	}
	}
	}
	else{
		?>
		<script type="text/javascript">
			alert("Login first");
			window.location.href="login.php";
		</script>
		<?php
	}

?>
<script>
        function Copy() {
            var url = window.location.href;
            console.log(url);
            $('.cc').val(url);
            $('.cc').select();
  document.execCommand("copy");
  alert("URL Copied to Clip Board.");
}
</script>