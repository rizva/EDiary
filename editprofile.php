<?php 
session_start();

include_once 'user.php'; 

$user = new User(); 

if(isset($_POST['passchange'])){

        $oldpass = $_POST['oldpass'];
        $password = $_POST['newpass1'];
        $password1 = $_POST['newpass2'];

    if(empty($_POST['oldpass']) || empty($_POST['newpass1']) || empty($_POST['newpass2'])){
        echo "<h1>Please fill all fields</h1>";
        
        
    }else{
      echo "success";
    }
  
    }

 ?>