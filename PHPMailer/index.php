<?php
/**
 * PHPMailer SPL autoloader.
 * PHP Version 5
 * @package PHPMailer
 * @link https://github.com/PHPMailer/PHPMailer/ The PHPMailer GitHub project
 * @author Marcus Bointon (Synchro/coolbru) <phpmailer@synchromedia.co.uk>
 * @author Jim Jagielski (jimjag) <jimjag@gmail.com>
 * @author Andy Prevost (codeworxtech) <codeworxtech@users.sourceforge.net>
 * @author Brent R. Matzelle (original founder)
 * @copyright 2012 - 2014 Marcus Bointon
 * @copyright 2010 - 2012 Jim Jagielski
 * @copyright 2004 - 2009 Andy Prevost
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 * @note This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * PHPMailer SPL autoloader.
 * @param string $classname The name of the class to load
 */
function PHPMailerAutoload($classname)
{
    //Can't use __DIR__ as it's only in PHP 5.3+
    $filename = dirname(__FILE__).DIRECTORY_SEPARATOR.'class.'.strtolower($classname).'.php';
    if (is_readable($filename)) {
        require $filename;
    }
}

if (version_compare(PHP_VERSION, '5.1.2', '>=')) {
    //SPL autoloading was introduced in PHP 5.1.2
    if (version_compare(PHP_VERSION, '5.3.0', '>=')) {
        spl_autoload_register('PHPMailerAutoload', true, true);
    } else {
        spl_autoload_register('PHPMailerAutoload');
    }
} else {
    /**
     * Fall back to traditional autoload for old PHP versions
     * @param string $classname The name of the class to load
     */
    function __autoload($classname)
    {
        PHPMailerAutoload($classname);
    }
}
?>

<?php
require '../connect.inc.php'; 
session_start();
$rmail = $_SESSION['email'];
$name = $_SESSION['x'];
$otp = $_SESSION['otp'];
date_default_timezone_set('Asia/Calcutta');

// require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

$mail->Host = 'smtp.gmail.com'; // Which SMTP server to use.
$mail->Port = 587; // Which port to use, 587 is the default port for TLS security.
$mail->SMTPSecure = 'tls'; // Which security method to use. TLS is most secure.
$mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
$mail->Username = ""; // Your Gmail address.
$mail->Password = ""; // Your Gmail login password or App Specific Password.

/*
 * Message Configuration
 */

$mail->setFrom('', ''); // (Gmail,Name)Set the sender of the message.
$mail->addAddress($rmail, $name); // Set the recipient of the message.
$mail->Subject = 'PHPMailer GMail SMTP test'; // The subject of the message.

/*
 * Message Content - Choose simple text or HTML email
 */
 
// Choose to send either a simple text email...
$mail->Body = 'Your otp is '. $otp; // Set a plain text body.

// ... or send an email with HTML.
//$mail->msgHTML(file_get_contents('contents.html'));
// Optional when using HTML: Set an alternative plain text message for email clients who prefer that.
//$mail->AltBody = 'This is a plain-text message body'; 

// Optional: attach a file
// $mail->addAttachment('images/phpmailer_mini.png');
// $value = ;
// echo $value;
if ($mail->send()) {
    // echo "Your message was sent successfully!";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    	<title></title>
    	<style type="text/css">
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
body{
	background: rgba(0,0,0,0.5);margin: 0;
}
    	</style>
    </head>
    <body>
    	<div class="nav" >
    		<a href="../home.php">
		 <img src="../premiumlogo/logo.jpg" style="width: 250px;height: 75px;margin-top: 0px;">
		 </a> 
		<!-- <button><a href="login.html">Login</a></button> -->
		<!-- <a href="../profile.php" id="profile" > -->
		<!-- <img src="../SD_Images/avatarprofile.jpg" style="float: right;height: 24px;width: 25px;margin-top: 23px;margin-right: 15px;border-radius:50px"> -->
		<!-- </a> -->
		<!-- <div style="height: 0px;float: right;"> -->
		 <a href="../aboutus.html" style="text-decoration: none; font-size: 18px;float: right;margin-top: 24px;margin-right: 15px; color: black;">About Us</a>
    	 <a href="../contactus.php" style="text-decoration: none; font-size: 18px;float: right;margin-top: 24px;margin-right: 15px;color: black;">Contact Us</a>
    	 </div>
<div align="center" style="margin-top: 100px;height: 300px;width: 500px;margin-left: 30%">
	
    	<form method="post">
    		<label style="font-weight: bold;font-size: 20px;">Enter OTP:</label>
    		<input type="number" name="otp" style="border: 0;height: 30px;"><br><br>
    		<button type="submit" name="submit" style="background: black;color: red;border:0;height: 30px;width: 90px;">Submit</button>
    	</form>
</div>
    </body>
    </html>

    <?php
} else {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
$username = $_SESSION['y'];
if(isset($_POST['submit'])){
	if($_POST['otp'] == $_SESSION['otp']){
		$q = "UPDATE `user` set valid=1 where username = '$username'";
		mysqli_query($conn,$q);
		?>
		<script type="text/javascript">
			window.location.href="../login.php";
		</script>
		<?php 
	}
	else{
		?>
		<script type="text/javascript">
			alert("Entered OTP is Incorrect");
			window.location.href="../logout.php";
		</script>
		<?php
	}
}
?>
