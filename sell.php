<!-- https://www.youtube.com/watch?v=kPGxWaIhLmk -->
<?php require 'connect.inc.php'; 
// SET wait_timeout=2147483;
// set_time_limit(100);
  session_start();
  if(isset($_SESSION['id'])){
    if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $category = $_POST['category'];
      $date = $_POST['year'];
      $price = $_POST['price'];
      $description = $_POST['description'];$i = $_SESSION['id'];
      $h = "SELECT * FROM `category` where cname = '$category'";
      $cv = mysqli_fetch_assoc(mysqli_query($conn,$h));
      $cid = $cv['cid'];
      $q = "INSERT INTO `product`( `pname`, `description`, `price`, `uid`, `date`,`cid`,`upload_date`) VALUES ('$name','$description','$price','$i','$date','$cid', CURDATE())";
      // $q = "INSERT INTO `product`(`pid`, `pname`, `category`, `description`, `price`, `uid`, `date`, `sold`, `cid`) VALUES ()";

      $res = mysqli_query($conn,$q);
      $query = "SELECT `pid` FROM `product` WHERE pname = '$name' and cid='$cid' and description='$description' and price='$price' and uid='$i' and `date` = '$date'";
      $answer = mysqli_query($conn, $query);
      // if($answer){
      //   echo "hello";
      // }
      $rs = mysqli_fetch_assoc($answer);
      $idp=$rs['pid']; 
      // $idp = 144;
      $cnt = count($_FILES["files"]["name"]);
      // echo "$cnt";
      $uploads_dir= 'uploads/';
      for ($i=0; $i <$cnt ; $i++) { 
        $imageName = mysqli_real_escape_string($conn,$_FILES["files"]["name"][$i]);
        $bm= "SELECT * FROM `images` WHERE `name`='$imageName'";
        $bn = mysqli_query($conn,$bm);
        if(mysqli_num_rows($bn)){
          $imageName = "$idp".$imageName;
        }
        $localFile='uploads/'.$_FILES["files"]["name"][$i];
        $iname = $_FILES["files"]["name"][$i];
        move_uploaded_file($_FILES["files"]["tmp_name"][$i], $uploads_dir."/".$imageName);
        // $imageData = mysqli_real_escape_string($conn,file_get_contents($localFile));
        $imageData = addslashes(file_get_contents($localFile));



        $imageType = mysqli_real_escape_string($conn,$_FILES["files"]["type"][$i]);
        // echo substr($imageType, 0,5);
        if(substr($imageType, 0,5)=="image"){
          // echo "success";
          // echo "$imageName";
          $uq = "INSERT INTO `images`(`pid`, `image`, `name`) VALUES ('$idp','$imageData','$imageName')";
          $ir = mysqli_query($conn,$uq);
        }
      }
?>
<script type="text/javascript">
  window.location.href="uploadedproducts.php";  
</script>
<?php
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
<!DOCTYPE html>
<html style="padding: 0px;">
    <head>
        <title>Sell page</title>
        <!-- <link rel="stylesheet" href="commonpage.css"> -->
        <style type="text/css">
        body{
  background-color:black;  color: white;font-family: verdana;font-size: 14px;margin: 0;
}
.nav
{
   /*position: fixed;*/
/*background-color: rgb(38, 39, 41);*/
height: 75px;
   width: 100%;
margin: 0px;
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
   border-radius: 35px;
}
.button1:hover{color:white;background-color: black;}
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

.r{border: none; border-bottom: 1px solid white; background-color: black; color: white;padding: 10px;width:190px;}


.space{padding: 5px;margin-left: 420px;}
        </style>
    </head>
<body style="width: 100%;">
<div class="nav" >
<a href="home.php"><img src="premiumlogo/logo.jpg" style="width: 250px;height: 75px;margin-top: 0px;"></a>
<a href="profile.php" id="profile" onclick="document.location=this.id+'.php';return false;">
              <img src="SD_Images/avatarprofile.jpg" style="float: right;height: 30px;width: 30px;margin-top: 22px;margin-right: 10px;border-radius:50px;">
            </a>
            <a href="aboutus.html" style="text-decoration: none; font-size: 18px;float: right;margin-top: 24px;margin-right: 15px;">About Us</a>
       <a href="contactus.php" style="text-decoration: none; font-size: 18px;float: right;margin-top: 24px;margin-right: 15px;">Contact Us</a>

<!-- <img src="SD_Images/search.png" style="float: right;height: 40px;width: 40px;margin-top: 21px;margin-right: 25px;">
<input class="search" type="search" name="search" placeholder="Search here..." style="color: grey;"> -->
    <!-- </div> -->
<!-- <p style="float: right;color: white;font-size: 18px;margin-top: 24px;margin-right: 5px;">Search:</p> -->
</div>

<!-- <img src="uploads/ test.php?id=67"> -->
<div style="padding: 30px;">
 
  <fieldset >
    <form enctype="multipart/form-data" method="post">
      <div style="text-align: center;font-family: verdana;font-size: 30px;">ENTER PRODUCT DETAILS <hr style="width: 500px;"></div>
      <br><!-- <div class="space">
        <div style="float: left;padding-right: 177px;">State</div>
      <select style="width: 188px;height: 22px;background-color: black;color: white;border-radius: 3px;">
        <option>AP</option>
        <option>Maharastra</option>
        <option>kerala</option>
        <option>Telangana</option>
        
      </select><br></div> -->
      <div class="space">
        <label style="font-weight: normal;margin-right: 20px;">Name of the product: </label>
        <!-- <input type="" name=""> -->
       <input type="text" name="name" value="" placeholder="Enter Name" class="r"> <br></div><div class="space" required>
      </div>
      <div class="space">
      <div style="float: left;padding-right: 110px;">Category:</div>
      <select name="category" style="width: 188px;height: 22px;background-color: black;color: white;border-radius: 3px;" required>
        <option>Select a category</option>
        <?php 
          $b = "SELECT * FROM `category`";
          $i = mysqli_query($conn,$b);
          while($o = mysqli_fetch_assoc($i)){
            ?>
            <option><?php echo $o['cname'];?></option>
            <?php
          }

        ?>
        <!-- <option>Cars</option>
        <option>fashion</option>
        <option>Gadgets</option>
        <option>Pets</option>
        <option>Bikes</option>
        <option>Books/sports</option> -->
      </select>
      <br></div><div class="space">
        <label style="font-size: 15px;font-weight: normal;margin-right: 40px;">Date Of Purchase:</label>
       <input type="date" name="year" value="" placeholder="Year of purchase" class="r" required> <br></div>
       <div class="space" >
      <div style="padding-bottom: 5px;">Description</div>
      <textarea name="description" rows="9" cols="54" style="border-radius: 3px;width: 400px;background: cyan;color: black" required=""> </textarea>

      <br>
      <div style="font-size: 10px;color: #ccc">Mention the key features of your item (e.g. brand, model, age, type)</div>
      <br></div>
     <div class="space">
      <label style="font-weight: normal;margin-right: 80px;">Price</label>
      <input type="number" name="price" value="" placeholder="Price" class="r" required><br></div>
     <div class="space" ng-repeat=""> <div style="float: left;padding-right: 120px;">Upload photo</div> 
        <input type="file" name="files[]" id="file" style="border-color: white;border:1px;border-radius: 4px;border:5px;" required="" multiple accept=".jpg, .png, .gif .jpeg" >
     <br>
      </div>
  <!--    <input type="file" name="pic" accept="image/*"><br> 
      <input type="file" name="pic" accept="image/*"><br>
      <input type="file" name="pic" accept="image/*"><br>
      <input type="file" name="pic" accept="image/*"><br>
      <input type="file" name="pic" accept="image/*"><br> -->
  <div class="space" style="float: right;margin-right: 50px;"><input type="submit" id="insert" name="submit" class="button1" style="height: 43px;

    width: 128px;
    color: red;
    border-radius: 58px;">
</div>
    </form>
  </fieldset>
</div>



</body>
</html>
<!-- <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  