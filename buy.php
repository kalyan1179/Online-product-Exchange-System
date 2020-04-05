<?php require 'connect.inc.php'; 
	session_start();
	if(isset($_SESSION['id'])){
		$tyui = $_SESSION['id'];
		$gy="";
    if(isset($_GET['cid'])){
        $gy = $_GET['cid'];
        if($gy!="")
        $q = "SELECT * FROM `product` where uid <> '$tyui' and cid = $gy and sold=0";
    	else{
    		$q = "SELECT * FROM `product` where uid <> '$tyui' and sold = 0";
    	}
      }
      else{
        $q = "SELECT * FROM `product` where uid <> '$tyui' and sold = 0";
      }
      if(isset($_GET['sb'])){
      	$tb = $_GET['sb'];
      	if($tb == 'htl'){
      		$q =$q . " order by price desc";
      	}
      	else if($tb == 'lth'){
      		$q =$q . " order by price asc";
      	}
      	else if($tb == 'one'){
      		$q =$q . " and price < 1000";
      	}
      	else if($tb == 'two'){
      		$q =$q . " and price>=1000 and price<5000";
      	}
      	else if($tb == 'three'){
      		$q =$q . " and price>=5000 and price<10000";
      	}
      	else if($tb == 'four'){
      		$q =$q . " and price>=10000 and price<20000";
      	}
      	else if($tb == 'five'){
      		$q =$q . " and price>=20000 and price<50000";
      	}
      	else{
      		$q =$q . " and price>=50000";

      	}
      }

		$r = mysqli_query($conn,$q);
	
	?><!DOCTYPE html>
<html>
    <head>
        <title>Home page</title>
<!--<link rel="stylesheet" href="commonpage.css">-->
         <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style type="text/css">
		html
		{
			scroll-behavior: smooth;
		}
		body{
			/*background: rgba(0,0,0,0.1);/*(38, 39, 41);*/
			background: url("SD_Images/bg1.jpg");background-size:cover;background-attachment: fixed;
            /*background-color: #a21717;*/
			/*background-repeat: no-repeat;*/
      margin: 0px;
			
				/*background: rgba(0,200,200,0.8);*/

/*
background: #A770EF; 
background: -webkit-linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);  
background: linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF); 
*/
		}
/*
        		a{
			text-decoration: none;
			color: white;
			background-color: red;
		}
*/

/*
		.nav a:hover{
			text-decoration: underline;
			color:lightgoldenrodyellow;
			cursor:pointer;
			font-size: 14px;
		}
*/
        body
{
  /*background-color:#a21717;*/
}		
.nav
{
 /*position: fixed;*/
  /*background-color: #0f0f0e;*/
  height: 75px;
  /*width: 100%;*/
  margin-top: 0px;
    margin-left: -7px;
  color: white;
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

.main-navigation{
  background: rgba(255,255,255,0.2);
  /*height: 50px;*/
}

.nav button
{
			margin-left: 20px;
			margin-top: 22px;
			margin-right: 10px;
			background-color: #0f0f0e;
			float: right;
			border: 0px;
			font-size: 18px;
			border: 1px groove white;
}
li
{
    list-style-type: none;
}
ul
{
     list-style: none;
     padding: 0;
     margin: 0;
     background: #0f0f0e;
}
ul li 
{
     display: block;
     position: relative;
     float: left;
     background: #0f0e0f;
}
li ul 
{ 
     display: none; 
}
ul li a 
{
     display: block;
     padding:15px 1em 1em 1em;
     text-decoration: none;
     white-space: nowrap;
     color: #fff;
     height: 70px;margin-top: 0px;
}
ul li a:hover 
{ 
     background: #f76688; 
}
li:hover > ul 
{
    display: block;
    position: absolute;
}
li:hover li 
{ 
     float: none; 
}
li:hover a 
{ 
      background: #0e0f0f; 
      height: 100%;text-decoration: none;
}
li:hover li a:hover 
{ 
      background: #f76688; 
}
#view:hover{
	background: #f76688; 
}
#view{
	background: rgba(0,0,0,0.2);float: right;height: 60px;font-size: 20px;padding-top: 15px; 
}
.main-navigation li ul li a
{ 
       border-top: 0;
       height: 70px; 
  /*background: rgba(255,255,255,0.2);*/

}
.main-navigation li  
{ 
       /*border-top: 0;*/
       height: 60px; 
  background: rgba(0,0,0,0.2);

}
ul ul ul 
{
      left: 100%;
      top: 0;
}
ul:before,
ul:after 
{
      content: " "; /* 1 */
      display: table; /* 2 */
}
ul:after 
{ 
      clear: both; 
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
			width: 280px;height: 360px;background: white; margin-top: 30px;margin-bottom: 10px;margin-left: 45px;border-radius: 10px;/*border: 2px solid rgb(50,50,50);
			/*padding: 0 12px;*/
		}
		div {
  			word-wrap: break-word;
  			overflow: hidden;text-overflow: clip;
		}
	</style>
    </head>
<body style="width: 100%">
<!--
<div class="nav" >
		<img src="logo1.jpg" style="width: 250px;height: 75px;margin-top: 0px;">
              <img src="avatarprofile.jpg" style="float: right;height: 40px;width: 40px;margin-top: 18px;margin-right: 10px;">
			<img src="search.png" style="float: right;height: 40px;width: 40px;margin-top: 21px; margin-right: 25px;">
			<input class="search" type="search" name="search" placeholder="Search here..." style="color: grey;">
     </div>
-->
    	<div class="nav" >
    		<a href="home.php" id="home" onclick="document.location=this.id+'.php';return false;">
		 <img src="premiumlogo/logo.jpg" style="width: 250px;height: 75px;margin-top: 0px;">
		 </a> 
		<!-- <button><a href="login.html">Login</a></button> -->
		<a href="profile.php" id="profile" onclick="document.location=this.id+'.php';return false;">
		<img src="SD_Images/avatarprofile.jpg" style="float: right;height: 24px;width: 25px;margin-top: 23px;margin-right: 15px;border-radius:50px">
		</a>
		<!-- <div style="height: 0px;float: right;"> -->
		 <a href="aboutus.html" style="text-decoration: none; font-size: 18px;float: right;margin-top: 24px;margin-right: 15px; color: white;">About Us</a>
    	 <a href="contactus.php" style="text-decoration: none; font-size: 18px;float: right;margin-top: 24px;margin-right: 15px;color: white;">Contact Us</a>

			<!-- <form action="" method="POST">
			<img src="SD_Images/search.png" style="float: right;height: 35px;width: 30px;margin-top: 20px;margin-right: 25px;">
			</form> -->
			<img src="SD_Images/search.png" onclick="getInputValue();" style="float: right;height: 35px;width: 30px;margin-top: 20px;margin-right: 25px;">
			<input id="myInput"  type="text" class="search" name="search" placeholder="Search here..." style="color: grey;">
			
		<!-- </div> -->
		<!-- <p style="float: right;color: white;font-size: 18px;margin-top: 24px;margin-right: 5px;">Search:</p> -->
	</div>
<!--
	<a href="categories.php"> <div style="text-decoration: none; width: 250px;height: 50px;background: black;color: white;font-size: 20px;padding : 10px 0 0 45px;">
		View Categories
	</div></a>
-->
<!--        <li><a></a></li>-->
<div style="height: 60px">
	<div id="view" style="" onclick="window.location.href='uvc.php'">
		<a href="uvc.php" style="font-size: 20px;color: black;font-family: cursive;padding:0px 10px 0 10px;text-decoration: none;">...View all</a>
	</div>
	 <ul class="main-navigation" style="font-size: 20px; font-family:cursive;">
	 	<!-- <li style=" "><a href="buy.php">Sort by</a></li> -->
	 	<select onchange="javascript:handleSelect(this)" style="float:left;height: 60px;background: rgba(0,0,0,0.2);border: none;width: 120px;font-size: 20px;color: black; ">
	 		<option>Sort by</option>
	 		<optgroup label="Price:">
	 			
	 		<option value="buy.php?sb=lth&cid=<?php echo $gy;?>"> Low to High</option>
	 		<option value="buy.php?sb=htl&cid=<?php echo $gy;?>"> High to Low</option>
	 		<option value="buy.php?sb=one&cid=<?php echo $gy;?>"> < 1000</option>
	 		<option value="buy.php?sb=two&cid=<?php echo $gy;?>"> 1000 - 5000</option>
	 		<option value="buy.php?sb=three&cid=<?php echo $gy;?>"> 5000 - 10000</option>
	 		<option value="buy.php?sb=four&cid=<?php echo $gy;?>"> 10000 - 20000</option>
	 		<option value="buy.php?sb=five&cid=<?php echo $gy;?>"> 20000 - 50000</option>
	 		<option value="buy.php?sb=six&cid=<?php echo $gy;?>"> > 50000</option>
	 		</optgroup>
	 	</select>
	 	<li><a href="buy.php">All Categories</a></li>
 <?php
 $hu ="SELECT * FROM `category`";
 $okp =mysqli_query($conn,$hu);
 // echo mysqli_num_rows($okp);

 while($jk = mysqli_fetch_assoc($okp)){
 ?>

  <li><a href="buy.php?cid=<?php echo $jk['cid']?>"><?php echo $jk['cname'];?></a></li>
<?php } ?>
    </ul>
</div>
		<?php 
			while ($row = mysqli_fetch_assoc($r)) {
				# code...
				$rt = $row['uid'];

			$qq = "SELECT  * FROM `user` WHERE uid='$rt'";
			$r1 = mysqli_query($conn,$qq);
			$row1 = mysqli_fetch_assoc($r1);
			$cv = $row['pid'];
			$qw = "SELECT min(id) as d,name FROM `images` where pid = '$cv'";
			$r2 = mysqli_query($conn,$qw);
			$row2 = mysqli_fetch_assoc($r2);
			$b=$row2['d'];
		 ?>

		<a href="product.php?ids=<?php echo "".$cv; ?>" style="color: black;">
	<div class="divbox">
		<!-- <img src="SD_Images/Image5.jpe" style="width: 100%;height: 200px; border-radius: 10px 10px 0 0;"> -->
		
		<img src="uploads/<?php echo "".$row2['name'] ;?>" style="width: 100%;height: 200px; border-radius: 10px 10px 0 0;">
		<div style="width: 280px;">
			<div style="width: 280px;height:50px; padding-left: 5px;padding-right: 5px; margin-left: 0px;font-weight:0px;font-size: 16px;"><?php echo $row['pname'];?></div>
			
			<div style="width: 280px;padding-left:5px; margin-left: 0px;font-weight: bold;font-size: 18px;float: left;">
				<!-- $10,000 -->
				<?php echo "₹".$row['price'];?>
			</div>
			<!-- <p style="float: left;">27-01-2020</p> -->
			<div style="width: 280px;padding-left:  5px;height: 40px; margin-left: 0px;/*font-weight: bold;*/font-size: 15px;word-wrap: break-word;
  			overflow: hidden;text-overflow: clip;"><?php echo $row['description'];?></div>
			<!-- <div style="width: 280px;padding: 5px;margin-left: 0px;font-size: 14px; "><?php echo $row1['city'].",".$row1['state'];?><p style="float: right;"><?php echo $row['date'];?></p> </div> -->
			<!-- <p style="padding: 5px;">Vizag</p> -->
			<div style="width: 180px;float: left; padding: 5px;margin-left: 0px;font-size: 14px; "><?php echo $row1['city'].",".$row1['state'];?>
</div>
<div style="float: right;width: 100px;padding: 5px;">
  
      <p style="float: right;margin-top: 5px;"><?php echo $row['date'];?></p> </div>
</div>
		</div>
	</div>
	</a>

	 <?php
            }}
    else{
		?>
		<script type="text/javascript">
			alert("Login first");
			window.location.href="login.php";
		</script>
		<?php
	}

?>
		<!-- <p style="float: right;color: white;font-size: 18px;margin-top: 24px;margin-right: 5px;">Search:</p> -->
<!--<h2 style="font-family:cursive; color: white;">Hey  you! Here are few product categories you can buy, shop now and have fun. </h2>-->
</body>
</html>

<script>
        function getInputValue(){
            // Selecting the input element and get its value 
            var inputVal = document.getElementById("myInput").value;
            
            // Displaying the value
            // alert(inputVal);
            var x = "search.php?s="+inputVal;
            window.location.href=x;
        }
        function handleSelect(elm)
{
window.location = elm.value;
}
    </script>