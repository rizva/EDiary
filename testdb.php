<?php 
include 'connect.php';

  $db = Database::getInstance();
    $mysqli = $db->getConnection(); 
    $sql_query = "SELECT * FROM users WHERE id =1";
    $result = $mysqli->query($sql_query);
	while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $lname = $row['lname'];
		$username = $row['username'];
		$password = $row['password'];
		$fname = $row['fname'];
		$email = $row['email'];
		
    }
	echo $fname. " " . $lname ;
?>