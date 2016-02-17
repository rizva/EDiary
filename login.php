<?php
session_start(); 
include_once 'user.php'; 
$user = new User();  
if (isset($_REQUEST['submit'])) {
     extract($_POST); 
     $login = $user->check_login($username, $password); 
     if ($login) {
          // Registration Success 
          header("location:home.php"); 
     } else {
          // Registration Failed 
          echo 'Wrong username or password'; 
     } 
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Login EDiary</title>
    
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/logreg.css">

    
	
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">E <span>Diary</span></span></h1>
		</div>
	
	<div class="login-box animated fadeInUp">
	<form action="" method="post" name="login">

		
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<label for="username">Username</label>
			<br/>
			<input type="text" id="username" name="username" required=""/>
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="password" name="password" required=""/>
			<br/>
			<button type="submit"  name="submit" id="submit">Log In</button>
			<br/><br/>
			
			<a href="#"><p class="small">Forgot your password?</p></a>
		
	   </form>
	</div>
	</div>
	
</body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/login_form.js"></script>
 	
	
    
</html>