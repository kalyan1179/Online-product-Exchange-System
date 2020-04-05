<?php
  require 'connect.inc.php';
  session_start();
//   if(isset($_GET['pid'])){
// $p = mysqli_real_escape_string($_GET['pid']);
  if(isset($_GET['id'])){
    $b = $_GET['id'];
    echo "$b";
  $rcv = mysqli_query($conn,"SELECT * FROM `images` WHERE  id='$b'");
  while($rows = mysqli_fetch_assoc($rcv)){
    $imagedata = $rows['name'];
  }
  header("connect-type:image/jpeg");
  $imagedata1 = "uploads/".$imagedata;
  // echo $imagedata1;        
  $_SESSION['imagename']=$imagedata1;
  }

  ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
 <img src="<?php echo $imagedata;?>"> 
</body>
</html>
