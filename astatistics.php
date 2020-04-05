<?php require 'connect.inc.php'; 
	session_start();
	if(isset($_SESSION['aid'])){
		$q1 = "select count(p.cid) as c,cname as name from product p right join category c on p.cid=c.cid group by c.cid";
		$r1 = mysqli_query($conn,$q1);
		$r2 = mysqli_query($conn,$q1);
		$q3 = "SELECT count(*) as countm from product where EXTRACT(MONTH FROM upload_date) = EXTRACT(MONTH FROM CURRENT_DATE)";
		$r3 = mysqli_query($conn,$q3);
		$re3 = mysqli_fetch_assoc($r3);
		$mc = $re3['countm'];
		$q4 = "SELECT count(*) as countm from product where EXTRACT(YEAR FROM upload_date) = EXTRACT(YEAR FROM CURRENT_DATE)";
		$r4 = mysqli_query($conn,$q4);
		$re4 = mysqli_fetch_assoc($r4);
		$yc = $re4['countm']; 
		$q5 = "SELECT count(*) as countm from product";
		$r5 = mysqli_query($conn,$q5);
		$re5 = mysqli_fetch_assoc($r5);
		$tc = $re5['countm']; 
	?>
<!DOCTYPE html>
<html>
<head>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>Home Page</title>
	<meta charset="utf-8">
	<style type="text/css">
		html
		{
			scroll-behavior: smooth;
		}
		body{
			
			background: url("SD_Images/bg9.jpg");background-size:cover;background-attachment: fixed;
			background: rgba(1,1,1,0);
		}
		.nav 
		{
			/*position: fixed;*/
			background-color:rgba(0,20,20,0); /*rgba(50,50,50,0.9);*/
			/*background:  #06263D;*/
			height: 75px;
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
			/*position: fixed;*/
			background-color: rgb(255, 255, 255);
			border-radius: 25px;
		}
		.cl{
			float: left; width: 33.3%;height: 100%;border-right: 0px solid black;
			padding: 10px;
		}
		.num{
			font-size: 30px;font-weight: bold;text-align: center;
			border : 3px solid darkcyan;border-radius: 50%;
			 	height: 150px;width: 150px;	margin:0px 0 0 30%;padding: 50px 20px 20px 20px;
		}
		#piechart{
			background: none;
		}
		td,th{
			text-align: center;
			border-bottom: 1px solid black;
			border-right: 1px solid black;
		}
	</style>
</head>
<body style="width: 100%;">
	<div class="nav" >
		<a href="home.php" id="home" onclick="document.location=this.id+'.php';return false;">
		<img src="premiumlogo/logo.jpg" style="width: 250px;height: 75px;margin-top: 0px;">
		<!-- <button><a href="login.html">Login</a></button> -->
		<a href="profile.php" id="profile" onclick="document.location=this.id+'.php';return false;">
		<!-- <img src="SD_Images/avatarprofile.jpg" style="float: right;height: 24px;width: 25px;margin-top: 23px;margin-right: 15px;border-radius:50px"> -->
		</a>
		<!-- <div style="height: 0px;float: right;"> -->
		 <a href="aboutus.html" style="font-size: 18px;float: right;margin-top: 24px;margin-right: 15px; color: black;">About Us</a>
    	 <a href="contactus.php" style="font-size: 18px;float: right;margin-top: 24px;margin-right: 15px;color: black;">Contact Us</a>

	</div>
	
	<div style="margin:30px 50px 100px 30px;height: 300px;border:2px solid black;">
		<h1 align="center" style="margin-bottom: 20px;">Products Uploaded</h1>
		<div class="cl" >
			
			<div class="num" id="num1"></div>
			<p style="font-size: 20px;text-align: center;font-weight: bolder;">This Month</p>
		</div>
		<div class="cl" >
			<div class="num" id="num2"></div>
			<p style="font-size: 20px;text-align: center;font-weight: bolder;">This Year</p>

		</div>
		<div class="cl" >
			<div class="num" id="num3"></div>
			<p style="font-size: 20px;text-align: center;font-weight: bolder;">Total</p>	
		</div>
	</div>
	<!-- <br><br> -->
	<h1 align="center">Number of Products in each Category</h1>
	<table align="center" style="width: 50%;font-size: 20px;border:1px solid black;">
		<thead>
			<tr>
				<th>Category</th>
				<th>Number of products uploaded</th>
			</tr>
			<?php
			while ($re2 = mysqli_fetch_assoc($r2)) {
				?>
				<tr>
					<td><?php echo $re2['name'];?></td>
					<td><?php echo $re2['c'];?></td>
				</tr>
				<?php
			}
			?>
		</thead>
	</table>
	<h1 align="center" style="margin-top: 50px;">Percentage of Categories uploaded</h1>
	<div id="piechart" align="center"></div>
	 <?php
	}else{
		?>
		<script type="text/javascript">
			alert("Login first");
			window.location.href="alogin.php";
		</script>
		<?php
	}

?>
	
	


</body>
</html>



<script type="text/javascript">
	function number(id,tot)
	{
		var i = 1,speed=10;
		// i=Math.floor(0.7*tot);
		var inc = setInterval(()=>{
		// global speed;
			$(id).text(i);
			i++;
			if (i>tot)
			{
				clearInterval(inc);
			}
			},speed);
	}
	number("#num1", <?php echo "$mc";?>);
	number("#num2",  <?php echo "$mc";?>);
	number("#num3", <?php echo "$tc";?>);
		// var i = 0,tot=90,speed=1;
		// i=Math.floor(0.7*tot);
		// var inc = setInterval(()=>{
		// // global speed;
		// 	$('.num').text(i);
		// 	i++;
		// 	if (i==tot)
		// 	{
		// 		clearInterval(inc);
		// 	}
		// 	},speed);
			// console.log(speed);

	</script>





	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  <?php 
  	while($re1 = mysqli_fetch_assoc($r1)){


  ?>
  ['<?php echo $re1['name']?>', <?php echo $re1['c'];?>],
<?php }?>
  
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'', 'width':750, 'height':600};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>