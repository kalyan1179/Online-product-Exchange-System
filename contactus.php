<!-- <!DOCTYPE html>
  <head>
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <form  method="post" target="_self">
  <div class="contact-form">
    <h1>Contact Us</h1>
    <div class="txtb">
      <label>Full Name :</label>
      <input type="text" name="" value="" placeholder="Enter Your Name">
    </div>

    <div class="txtb">
      <label>Email :</label>
      <input type="email" name="email" value="" placeholder="Enter Your Email" required>
    </div>

    <div class="txtb">
      <label>Phone Number :</label>
      <input type="text" name="" value="" placeholder="Enter Your Phone Number">
    </div>

    <div class="txtb">
      <label>Message :</label>
      <textarea></textarea>
    </div>
   <div class="btn">
   <input type ="button" value="send">
   </div>
   <footer>
<div class="footer">
<footer>
      <div class="footer-container">
        <div class="left-col">
        <div class="social-media">
    <h1> <b>Mail us: </b></h1>
           <p>ShopDrop Private Limited, <br>
            Building no:5,Alphuza Towers,<br>
              IT Sez Area,Outer Ring Road,<br>
              Visakhapatnam, Andhra Pradesh,<br>
              India-560197.   
         </p>
          </div>
          <p class="rights-text"></p>
        </div>

        <div class="right-col">
          <div class="border"></div>
          <p>  Contact:+91 9788766756<br>
           Email : shopdrop.18@gmail.com<br>   
      </p>
          </form>
        </div>
      </div>
  </div>
  </footer>
  </form>
    </body>
</html>


  </div>
  </footer>
  </form>
    </body>
</html>
 -->
 <!DOCTYPE html>
 <html>
 <head>
   <title>Contact Us</title>
   <style type="text/css">
     body{
      background: url("bg (1).jfif");
  background-size: cover;margin: 0;
     }
     p{
      margin-left: 20px;color: black;
     }
     h1{
        color: black;
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
   </style>
 </head>
 <body>
  <div class="nav" >
        <a href="home.php" id="home" onclick="document.location=this.id+'.php';return false;">
     <img src="premiumlogo/logo.jpg" style="width: 250px;height: 75px;margin-top: 0px;">
     </a> 
    <!-- <button><a href="login.html">Login</a></button> -->
      <?php
      session_start();
        if(isset($_SESSION['id'])){
      ?>
    <a href="profile.php" id="profile" onclick="document.location=this.id+'.php';return false;">
    <img src="SD_Images/avatarprofile.jpg" style="float: right;height: 24px;width: 25px;margin-top: 23px;margin-right: 15px;border-radius:50px">
    </a>
  <?php } ?>
    <!-- <div style="height: 0px;float: right;"> -->
     <a href="aboutus.html" style="text-decoration: none; font-size: 18px;float: right;margin-top: 24px;margin-right: 15px; color: black;">About Us</a>
       <a href="contactus.php" style="text-decoration: none; font-size: 18px;float: right;margin-top: 24px;margin-right: 15px;color: black;">Contact Us</a>

      <h1 align="center">Contact us at anytime</h1>
      <div align="left" style="background: rgba(1,1,1,0.3);width: 600px;margin-left:33%;">
        <p style="font-size: 20px;">Mail: shopdrop764@gmail.com</p>
        <!-- <br> -->
        <p style="font-size: 20px;">Phone: 9876541230</p>
        <p style="font-size: 20px;">Address: Building no:5,Alphuza Towers,
              IT Sez Area,Near Outer Ring Road,
              Hyderabad, Telangana,
              India-560197</p>

      </div>
 </body>
 </html>