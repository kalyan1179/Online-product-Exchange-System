<!DOCTYPE html>
<html>
    <head>
        <title>Categories</title>
<!--<link rel="stylesheet" href="commonpage.css">-->
         <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<body>
<style>
body
{
  background-color:#0a0a0a;
}		
.nav
{
 /*position: fixed;*/
  background-color: black;
  height: 75px;
  width: 100%;
  margin-top: 0px;
  color: white;
}	
.search
{
	border: 0px;
	width: 260px;
    height: 40px;
    float: right;
    margin-top:  19px;
    background-color: rgb(255, 255, 255);
    border-radius: 5px;
}
.nav button
{
			margin-left: 20px;
			margin-top: 22px;
			margin-right: 10px;
			background-color: black;
			float: right;
			border: 0px;
			font-size: 18px;
			border: 1px groove white;
}
    .box{
        height: 380px;width: 308px;box-sizing: border-box;border:2px solid black;
        text-align: center;
        font-size: 20px;
        position: relative;
        background-color:  darkred;
         float:left;
                border-radius: 20px;

    }
    .box1{
        height: 380px;width: 308px;box-sizing: border-box;border:2px solid black;
        text-align: center;
        font-size: 20px;
        position: relative;
        background-color:  darkred;
        margin-left: 310px;
        border-radius: 20px;
    }
    .box2{
        height: 380px;width: 308px;box-sizing: border-box;border:2px solid black;
        text-align: center;
        font-size: 20px;
        position: relative;
        background-color:  darkred;
        margin-left: 620px;
        margin-top: -380px;
    border-radius:20px;
    }
       .box3{
        height: 380px;width: 308px;box-sizing: border-box;border:2px solid black;
        text-align: center;
        font-size: 20px;
        position: relative;
        background-color: darkred;
        margin-left: 930px;
        margin-top: -380px;
        border-radius:20px;
    }
    box a{
        text-align: center;    }
    x{
        font-size: 10px;
/*        margin-left: 30%;*/
/*        align-content: center;*/
    }
    .box4{
        height: 380px;width: 308px;box-sizing: border-box;border:2px solid black;
        text-align: center;
        font-size: 20px;
        position: relative;
        background-color: darkred;
/*        margin-left: 930px;*/
/*        margin-top: -380px;*/
        border-radius:20px;
    }
      .box5{
        height: 380px;width: 308px;box-sizing: border-box;border:2px solid black;
        text-align: center;
        font-size: 20px;
        position: relative;
        background-color: darkred;
        margin-left: 310px;
        margin-top: -380px;
        border-radius:20px;
    }
    button{
        font-size: 25px;
        color:white;
        background-color:  darkred;
        cursor:pointer;
        border: 0px;
    }
    button:hover{
        /*color: black;*/
        text-decoration:underline;
        color:lightgoldenrodyellow;
    }
    </style>
<div class="nav" >
		<img src="premiumlogo/logo.jpg" style="width: 250px;height: 75px;margin-top: 0px;">
              <img src="SD_Images/avatarprofile.jpg" style="float: right;height: 40px;width: 40px;margin-top: 18px;margin-right: 10px;">
			<img src="SD_Images/search.png" style="float: right;height: 40px;width: 40px;margin-top: 21px; margin-right: 25px;">
			<input class="search" type="search" name="search" placeholder="Search here..." style="color: grey;">
     </div>
<br>
    <div class="box">
        <h1 style="text-align: center;color: black " >Mobile Phones</h1>
        <a href="buy.php"> <button>Samsung</button></a> <br>
        <button href="">xiaomi</button><br>
        <button>Poko</button><br>
        <button>Oneplus</button><br>
                                 <button>Others</button>

    </div>
    
    <div class="box1">
        <h1 style="text-align: center;color: black" >Electronics</h1>
        <button href="">ACs</button><br>
        <button href="">Computers/Laptops</button><br>
        <button>Refrigerator</button><br>
        <button>Washing Machines</button><br>
        <button>TVs</button><br>
                                 <button>Others</button>

    </div>
    <div class="box2">
        <h1 style="text-align: center;color: black " >Fashion</h1>
                <button>Women</button><br>
                <button>Men</button><br>
                <button>Kids</button><br>
                                 <button>Others</button>

    </div>
     <div class="box3">
        <h1 style="text-align: center;color: black " >Furniture</h1>
                <button>Sofa</button><br>
                <button>Bed</button><br>
                <button>Dining</button><br>
                         <button>Others</button>

    </div>
        </div>
     <div class="box4">
        <h1 style="text-align: center; color: black" >Books and sports</h1>
                <button>Books</button><br>
                <button>Sports Equipment</button><br>
                                  <button>Others</button>

<!--                <button>Dining</button>-->
    </div>
      <div class="box5">
        <h1 style="text-align: center;color: black " >Pets</h1>
                <button>Fishes</button><br>
                <button>Pet food</button><br>
                                   <button>Dogs</button><br>
                                   <button>Others</button>


    </div>
</body>
</html>