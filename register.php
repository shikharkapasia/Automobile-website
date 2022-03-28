<?php
error_reporting(0);
// if(!$user){
// 	die("user can't be found");
// }
// $connect= mysqli_connect("localhost","root","") or die("server not connected");
// mysqli_select_db($connect,"appointment") or die("database not connected");
// $accesscount = mysqli_query($connect,"SELECT * FROM deepanshu Where user='$user' AND date='$date'");
// $assoccount = mysqli_num_rows($accesscount);
// $access = mysqli_query($connect,"SELECT * FROM officials WHERE username='$user'");
// $assoc =mysqli_fetch_assoc($access);
// $gmail =$assoc['gmail'];
// $name  =$assoc['name'];
// $username =$assoc['username'];
// $password =$assoc['password'];
// $gid =$assoc['gid'];
// echo "<div class=\"welcomescreen\">Welcome! $name you got $assoccount appointments today</div>";
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:900,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="registerstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:700&display=swap" rel="stylesheet">
	<title>REGISTRATION FORM</title>
</head>
<body>
<div class="formcontain">
<div class="ulhead"><img src="regimg.png" class="clockimg"><div class="ulheadtxt">REGISTER <span class="appointmenttxt">YOURSELF<br></span> HERE</div></div>
<div class="formuser">
<div class="assist">
Enter your details!
</div>
<form name="formforuser" method="post" class="formforuser">
	<div class="sec1">
	Name<br><input type="text" name="name" class="inp1 ul1 jname" value="Enter Name Here"><br><br>
	Phone Number<br><input type="text" name="phone" class="inp1 ul1 jpn" value="Enter Phone Number"><br><br>
	E-mail<br><input type="text" name="email" class="inp1 ul1 jem" value="Enter E-mail"><br><br>
	
	Date Of Birth<br><input type="date" name="date" class="inp1 ul1 jdob formar" ><br><br>
	<a href="#" class="next">Next</a>
</div> 
<div class="sec2">
	Select a username<br><input type="text" name="name" class="inp1 ul1 jusername" value="Enter username"><br><br>
	Select a password<br><input type="text" name="name" class="inp1 ul1 jpassword" value="Enter password"><br><br>
	Confirm password<br><input type="text" name="name" class="inp1 ul1 jcpassword" value="confirm password"><br><br>
	
	<a href="#" class="next2">Next</a>
</div>
<div class="sec3">
	<div class="cartxt">Are you using a car?</div>
	<div class="yesno">
	<a href="#" class="ayes">Yes</a>
	<a href="#" class="ano" >No</a><br></div>
</div>
<div class="sec4">
	Car Number<br><input type="text" name="car" class="inp1 ul1 jcn" value="Enter Car Number"><br><br>
</div>

	<input type="submit" value="register" class="submitbtn">
</form>`
</div>
</div>
<!-- <div class="statuscontainer" style="background-color:rgba(41, 241, 195, 1);height:2%;">
</div>
<div class="containstatus">
	<div class="statushead">You have the following appointments today</div>
<div class="status">
</div>
</div>
<div class="containsuccessfull">
	<div class="successfullhead">Successfull appointments today</div>
<div class="successfull">
</div>
</div>

<div class="containunsuccessfull">
	<div class="unsuccessfullhead">UNSUCCESSFULL APPOINTMENTS <div class="ush2">NO WORRIES!!</div><div class="ush3">FIX THEM AGAIN :)</div></div>
<div class="unsuccessfull">
</div>
</div>
</div>
<footer>
	This website is designed and developed by <div class="footerhead">Deepanshu Sharma</div>
</footer>
</body>
</html>
<script>
	$(document).ready(function(){

		$(".welcomescreen").load("http://localhost/appointment/welcomescreen.php?user=<?php echo $user;?>")
	});
	</script> -->

<script>
	$(document).ready(function(){

		$(".jname").click(function(){
			$(".jname").attr("value","");
			$(".assist").text("Enter your name");
		});
			$(".jpn").click(function(){
			$(".jpn").attr("value","");
			$(".assist").text("Enter your phone number");
		});
				$(".jem").click(function(){
			$(".jem").attr("value","");
			$(".assist").text("Enter your gmail ID");
		});
		$(".next").click(function(){
			$(".sec1").fadeOut(10);
			$(".sec2").fadeIn(1000);
			$(".assist").text("Enter the details of visitor!");

		});
		$(".jdob").click(function(){
			$(".jd").attr("value","");
			$(".assist").text("Enter your date of birth");
		});
			$(".jusername").click(function(){
			$(".jusername").attr("value","");
			$(".assist").text("Select a username");
		});
				$(".jpassword").click(function(){
			$(".jpassword").attr("value","");
			$(".assist").text("Select a password");
		});
		$(".next2").click(function(){
			$(".sec2").fadeOut(10);
			$(".sec3").fadeIn(1000);
			$(".assist").text("Register");
			
		});

		$(".jcpassword").click(function(){
			$(".jcpassword").attr("value","");
			$(".assist").text("Confirm password");
		});
		$(".next2").click(function(){
			$(".sec2").fadeOut(10);
			$(".sec3").fadeIn(1000);
			$(".assist").text("Car details!");
			
		});

		$(".ayes").click(function(){
			$(".ayes").css("color","rgba(46, 49, 49, 1)");
			$(".ayes").css("background-color","white");
			$(".sec4").css("display","block");
			$(".submitbtn").css("display","block");
			$(".ano").css("color","white");
			$(".ano").css("background-color","rgba(46, 49, 49, 1)");
		});
		$(".ano").click(function(){
			$(".ano").css("color","rgba(46, 49, 49, 1)");
			$(".ano").css("background-color","white");
			$(".sec4").css("display","none");
			$(".submitbtn").css("display","block");
			$(".ayes").css("background-color","rgba(46, 49, 49, 1)");
			$(".ayes").css("color","white");
		});
		$(".jcn").click(function(){
			$(".jcn").attr("value","");
			$(".assist").text("Enter the Car Number of visitor");
		});


	});
</script>








