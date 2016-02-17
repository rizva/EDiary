
<?php
//i will add this for testing 
include_once 'user.php'; 
$user = new User(); 
// Checking for user logged in or not  
if (isset($_REQUEST['submit'])){
     extract($_REQUEST); 
     $register = $user->reg_user($fname,$lname,$username,$password,$email); 
     if ($register) {
          // Registration Success 
          echo '<h1>Registration successful <a href="login.php">Click here</a> to login</h1>'; 
     } else {
          // Registration Failed 
          echo 'Registration failed. Email or Username already exits please try again'; 
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
            <h1 id="title" class="hidden"><span id="logo">Registration</span></h1>
        </div>
    
    <div class="login-box animated fadeInUp">
    <form action="#" method="post" name="reg">

        
            <div class="box-header">
                <h2>Registration</h2>
            </div>
            <label for="fname">First Name</label>
            <br/>
            <input type="text" id="fname" name="fname" required=""/>
            <br/>
            <label for="lname">Last Name</label>
            <br/>
            <input type="text" id="lname" name="lname" required=""/>
            <br/>
            <label for="username">Username</label>
            <br/>
            <input type="text" id="username" name="username" required=""/>
            <br/>
            <label for="email">Email</label>
            <br/>
            <input type="email" id="email" name="email" required=""/>
            <br/>
            <label for="password">Password</label>
            <br/>
            <input type="password" id="password" name="password" required=""/>
            <br/>
            <button type="submit"  name="submit" id="submit">Register</button>
            <br/>
            
            <a href="login.php"><p>Already registered! Click Here!</p></a>
        
       </form>
    </div>
    </div>
    
</body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/login_form.js"></script>

