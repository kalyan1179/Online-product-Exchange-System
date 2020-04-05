<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php require 'connect.inc.php'; 
session_start();
if(isset($_SESSION['id'])){
	$uid = $_SESSION['id'];
	$e = "SELECT * FROM `user` WHERE uid = $uid";
	$r = mysqli_query($conn,$e);
	$data = mysqli_fetch_assoc($r);

		if(isset($_POST['submit'])){

			$name = $_POST['name'];
			// $username = $_POST['username']; $_SESSION['x']=$username;
			$email = $_POST['email'];
			$ph = $_POST['phone'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$password = $_POST['password'];
			$confirmpassword = $_POST['password_c'];
			
			// echo "$username\n";
			
			// echo "$password fdtjlk $confirmpassword";
			if(($password == "" || $confirmpassword=="" || !(isset($_POST['g'])))){
				?>
<script type="text/javascript">
	alert("Invalid Details.");
	window.location.href="editprofile.php";
</script>
				<?php
			}else{
				$gender = $_POST['g'];
			if($password==$confirmpassword){
				// if(preg_match('/(?=.{8,20}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z])/', $password)){

				// }
				// echo "$name";
					$q1 = "UPDATE `user` set `name`='$name',`email`='$email',`phone no`='$ph',`city`='$city',`state`='$state',`gender`='$gender',`address`='$address',`password`='$password' WHERE uid = '$uid'";
					$r1 = mysqli_query($conn,$q1);
					// echo $q1;
				?>
				<script type="text/javascript">
					window.location.href="profile.php";
				</script>
				<?php
			}
			else{
				?>
				<script type="text/javascript">
					// alert("Password didn't match");
					// window.location.href="editprofile.php";
				</script>
				<?php
			}
			}
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	<!-- <link rel="stylesheet" type="text/css" href="sty-signin.css"></link> -->
	<style type="text/css">
		body{
	margin:0;
	padding:0;
	font-family:sans-serif;
	background: #090000;
}

.signin pre{
	/*margin-top:6%;
	margin-left:6.5%;*/
	font-family: sans-serif;
	font-weight: bold;
	font-size:19.05px;
	color: #000;
}

.signin{
	width:600px;
	/*height:860px;*/
	color: grey;
	position: absolute;margin-top: 260px;
	top:50%;
	left:50%;margin-bottom: 50px;
	float: left;
	transform: translate(-50%,-50%);
	box-sizing:border-box;
	border: 1px solid seagreen;
  	padding: 20px 20px;
  	font-size: 18px;
  	box-shadow:5px 5px 15px 8px seagreen;
}

.signin Label{
	margin: 0;
	padding: 0;
	font-weight: bold;color: darkcyan;
}

.signin input{
	margin-bottom: 15px;
}

.signin input[type="radio"]
{
		margin:0;
		padding:0;
}

.signin input[type="text"],input[type="password"],input[type="email"],input[type="tel" ]
{
	border:none;
	border-bottom:2px solid lightgrey;
	background: transparent;
	outline:none;
	height:40px;
	color:#fff;
	font-size: 14px;
	width: 100%;
	margin-bottom: 15px;
}

.signin textarea{
	background: transparent;
	color:#fff;
}

.signin input[type="submit"]
{
	outline: none;
	border:none;
	background-color:seagreen;
	box-shadow:5px 5px 15px 1px seagreen;
	height: 40px;
	width:200px;
	color: #fff;
	font-size: 17px;
	border-radius:25px;
}

.signin input[type="submit"]:hover
{
	cursor:pointer;
	background:tomato;
	box-shadow:5px 5px 15px 1px tomato;
	color:#fff;
}	
.tt{
	color: red;padding:0 0 10px 0;
}			
span
{
	display: none;
}		
	</style>
</head>
<body>
<!-- <div class="tt"></div> -->
  <div class="signin">
  	<p>
  		<h1 style="color:seagreen;font-family:times new roman;font-style:italic;font-weight: bold;font-stretch:ultra-expanded;text-align: center;margin: 20px 0 20px 0;font-size: 45px;">EDIT PROFILE</h1>
  		<!-- <h4 style="color:lightgrey;margin: 25px 0 20px 40px;">Welcome,please enter the following to create an account.</h4></p>  -->
	<form id="frm1" action="" method="POST" ng-app="myApp" ng-controller="validateCtrl" name="myForm" novalidate>
		<label>Name:  </label> 	
		<input style="width: 50%;margin-left: 100px;" type="text" name="name" placeholder="Enter your Name" value="<?php echo $data['name']?>" required></input>
		<br><br>
		<!-- <label>UserName:  </label> 	
		<input onchange="existing_user()" style="width: 50%;margin-left: 60px;"  value="<?php echo $data['username']?>" type="text" name="username" placeholder="Enter User Name" minlength="4" ng-model="username"  ng-pattern="/^[a-zA-Z0-9{1,}]{4,}$/" id="username" required>
		<span style="color:red;" ng-show="myForm.username.$dirty && myForm.username.$invalid" ng-disable>
			<span style="margin:0 0 10px 0;" ng-show="myForm.username.$error.pattern" >Enter valid User Name</span>
		</span>
		<span class="tt" ></span>
      	

		<p style="font-size: 13px;margin: -10px 0 -30px 0;color: yellow;margin-left: 0px">**Note: Should consists only alphabets and numbers(minimum of 4) **</p>

		<br><br> -->
		<!-- username valid? = <code>{{myForm.username.$valid}}</code><br>
      model = <code>{{model}}</code> -->
		<label>Email-id:</label>
		<input style="width: 50%;margin-left: 80px;" type="email" name="email" placeholder="Enter Mail-id" value="<?php echo $data['email']?>" required>
		<br><br>
		<label>Gender:</label>
		<input type="radio" name="g" value="M" style="margin-left: 83px;" required>Male
		<input type="radio" name="g" value="F" style="margin-left: 18px;" required>Female
		<input type="radio" name="g" value="O" style="margin-left: 18px;" required>Other

		<br><br>
		<label>Contact no.: </label>
		<input style="width: 50%;margin-left: 50px;" type="tel" name="phone" pattern="[6-9]{1}[0-9]{9}" placeholder="Enter phone number" required value="<?php echo $data['phone no']?>">
		<br><br>
		<div style="width: 20%;float: left;"><label>Address:</label></div>		
		<!-- <br> -->
		<textarea rows="4" cols="27" maxlength="255" name="address" style="margin-right: 120px; border-radius: 10px;padding: 10px;width: 280px;font-size: 100%;margin-top: 5px;float: right;" > <?php echo $data['address']?></textarea><br>
		<p style="font-size: 12px;margin-bottom: -30px;color: yellow;margin-left: 160px;">**Max of 255 charecters**</p>
		<br><br>
		<label>City:</label>
		<input style="width: 50%;margin-left: 115px;" type="text" name="city" placeholder="Enter city" required value="<?php echo $data['city']?>">
		<br><br>
		<label>State:</label>
		<input style="width: 50%;margin-left: 105px;" type="text" name="state" placeholder="Enter state" required value="<?php echo $data['state']?>">
		<br><br>	
		
		<label for="password">Password:</label>
       <input style="width: 50%; margin-left: 67px;" value="<?php echo $data['password']?>" type="password" id="password" name="password" ng-model="formData.password" ng-minlength="8" ng-maxlength="20" ng-pattern="/(?=.{8,20}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z])/" placeholder="Enter Password" required><br>
   <!-- <span ng-show="myForm.password.$error.required && myForm.password.$dirty"></span> -->
   <span style="color: red" ng-show="!myForm.password.$error.required && (myForm.password.$error.minlength || myForm.password.$error.maxlength) && myForm.password.$dirty">Passwords must be between 8 and 20 characters.</span>
   <span style="color: red"  ng-show="!myForm.password.$error.required && !myForm.password.$error.minlength && !myForm.password.$error.maxlength && myForm.password.$error.pattern && myForm.password.$dirty">Must contain one lower &amp; uppercase letter, and one non-alpha character (a number or a symbol.)</span>
       <!-- <br><p style="font-size: 13px;margin: -10px 0 -30px 0;color: yellow;">Note:<br>1.Must contain one lower &amp; uppercase letter, and one non-alpha character (a number or a symbol.)<br>2.Passwords must be between 8 and 20 characters.**</p><br> -->
       <br />
       
       
       <label for="password_c">Confirm Password:</label>
       <input style="width: 45%;margin-left: 14px;" value="<?php echo $data['password']?>" required  type="password" id="password_c" placeholder="Re-Enter Password" name="password_c" ng-pattern="/(?=.{8,20}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z])/" ng-model="formData.password_c" valid-password-c><br>
   <!-- <span style="color: red;"  ng-show="myForm.password_c.$error.required && myForm.password_c.$dirty">Please confirm your password.</span><br> -->
   <span style="color: red;"  ng-show="!myForm.password_c.$error.required && myForm.password_c.$error.noMatch && myForm.password.$dirty">Passwords do not match.</span>
   <span style="color: green;"  ng-show="!myForm.password_c.$error.required && !myForm.password_c.$error.noMatch && myForm.password.$dirty">Passwords matched.</span><br><br>
		<button style="margin: 0 10% 0 30%;outline: none;background: green;border-radius: 20px;width: 30%;height: 40px;border: 0px;
		box-shadow:0px 0px 5px 5px seagreen;color: white;"ng-show="!myForm.username.$error.pattern && !myForm.password_c.$error.pattern && !myForm.password.$error.pattern && !myForm.password_c.$error.noMatch" type="submit" name="submit" id="i">Update</button>
	</form>
  </div>
</body>
</html>


<?php 
}
else{
	?>
	<script type="text/javascript">
		alert("Login First");
		window.location.href="login.php";
	</script>
	<?php
}
?>
<script>
var app = angular.module('myApp', ['UserValidation']);
app.controller('validateCtrl', ['$scope',function($scope) {
}]);
angular.module('UserValidation', []).directive('validPasswordC', function () {
    return {
        require: 'ngModel',
        link: function (scope, elm, attrs, ctrl) {
            ctrl.$parsers.unshift(function (viewValue, $scope) {
                var noMatch = viewValue != scope.myForm.password.$viewValue
                ctrl.$setValidity('noMatch', !noMatch)
            })
        }
    }
})
function existing_user()
{
	$('.tt').load("tt.php?username="+$('#username').val());
	// if ($('#tt').val()==1) 
}
$(document).ready(()=>{
	$('span').show();
	// alert("ASdasd");
});
</script>