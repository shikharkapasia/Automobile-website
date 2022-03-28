<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:700&display=swap" rel="stylesheet">
	<meta name="google-signin-client_id" content="259047734539-ep245d7dhsbjin7qao42r2mn9tm0qq4o.apps.googleusercontent.com">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta http-equiv="refresh" class="meta">

	
	
<title>LOGIN</title>
</head>
<body>
	
<div class="formcontain">
<div class="formuser">
<h1 class="ulhead">USER LOGIN</h1>
<img src="loginimg.png" class="loginimg">
<form method="post" name="login" class="userform">
	<input type="text" name="username" class="ul1" value="Username">
	<input type="password" name="password"  class="ul2" value="password">
	<input type="submit" value="Login" class="loginbtn" onclick="passerror()">
	<div class="alert alert-secondary" role="alert">
  New User? <a href="register.php" class="alert-link">Register</a> here to login.
</div>

</form>

</div>
<div class="formgoogle">
<img src="google.png" class="googleimg">
<p class="gsignin">Log in with Google Account</p>
<img src="glogin.png" class="gloginimg">
<div class="g-signin2" data-onsuccess="onSignIn"></div>
<div class="alert alert-primary" role="alert">
  If you don't have an account or unable to login,kindly contact your service provider.
</div>

</div>
</div>
<script>
 function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  var id = profile.getId();
  // var test =document.getElementsByClassName('meta')[0].setAttribute("content","2;url=http://appointmentappdh.000webhostapp.com/appointment/login.php?id="+ id);
    var test =document.getElementsByClassName('meta')[0].setAttribute("content","2;url=http://localhost/asd/landingpage.php?id="+ id);
}
  </script>
</body>
</html>


<?php
error_reporting(0);
require "connect.php";
$username = $_POST['username'];
$password = $_POST['password'];
if(($username)&&($password)){
$match = mysqli_query($connect,'SELECT * FROM officials');
$count = mysqli_num_rows($match);
for($i=0;$i<=$count;$i++){
	$access = mysqli_query($connect,"SELECT * FROM officials WHERE id=$i") or die('cannot select');
	$assoc = mysqli_fetch_assoc($access);
	if($username==$assoc['username']){
		if($password==$assoc['password']){
			$dh ="landingpage.php";	
			header("Location:$dh");	
		}		
	}

}
}
?>

<?php
$id = $_GET['id'];
if(!empty($id)){
$match2 = mysqli_query($connect,"SELECT * FROM officials WHERE gid='$id'") or die("gid error");
$assoc2 = $assoc = mysqli_fetch_assoc($match2);

$username2 = $assoc2['username'];
$dh2 ="landingpage.php?user=$username2";	
header("Location:$dh2");	

}
?>
<script>
$(document).ready(function(){
	$(".ul1").focus(function(){
		$(".ul1").attr("value","");
		
	});
	$(".ul2").focus(function(){
		$(".ul2").attr("value","");
		
	$(".ul1").blur(function(){
		$(".ul1").attr("value","Username");
		
	});
	$(".ul2").blur(function(){
		$(".ul2").attr("value","password");
	});

	});
});
</script>