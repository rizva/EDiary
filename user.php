<?php  include "db_config.php";  



class User{  
	public $db;  
	public function __construct(){ 
		$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);  
		if(mysqli_connect_errno()) { 
			echo "Error: Could not connect to database."; 
			exit; 
			} 
			}  
	/*** for registration process ***/ 
	public function reg_user($fname,$lname,$username,$password,$email){  
		$password = md5($password); 
		$sql="SELECT * FROM users WHERE username='$username' OR email='$email'";  
		
		//checking if the username or email is available in db 
		$check = $this->db->query($sql) ; 
		$count_row = $check->num_rows;  
		
		//if the username is not in db then insert to the table 
		
		if ($count_row == 0){ 
			$sql1="INSERT INTO users SET username='$username', password='$password', fname='$fname', lname='$lname',email='$email'"; 
			$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot be inserted"); 
			return $result; 
			} else { 
				return false;
				} 
				}  
				/*** for login process * ***/ 
				 public function check_login($username, $password){  
				 	$password = md5($password); 
				 	$sql2="SELECT id from users WHERE username='$username' and password='$password'";  
				 	
				 	//checking if the username is available in the table 
				 	
				 	$result = mysqli_query($this->db,$sql2); 
				 	$user_data = mysqli_fetch_array($result); 
				 	$count_row = $result->num_rows;  
				 	if ($count_row == 1) { 
				 		
				 		// this login var will use for the session thing 
				 		$_SESSION['login'] = true; 
				 		$_SESSION['id'] = $user_data['id']; 
				 		return true; 
				 		} else{ 
				 		    return false; 
				 		    } 
				 		    }  
				 		    
				 		    /*** for changing the password ***/
				 		    public function change_password($id, $password){
				 		        $sql9 = "UPDATE users SET password='$password' WHERE id='$id'";
				 		        
                                $result = mysqli_query($this->db,$sql9) or die(mysqli_connect_errno()."Password cannot be uptadet"); 
                                return $result; 
				 		    }
				 		    /*** for showing the username or fullname ***/ 
				 		    public function get_fullname($id){ 
				 		        $sql3="SELECT fname,lname FROM users WHERE id = $id"; 
				 		        $result = mysqli_query($this->db,$sql3); 
				 		        $user_data = mysqli_fetch_array($result); 
				 		        echo $user_data['fname']." ". $user_data['lname']; 
				 		        }  
                             /*** for showing the username ***/ 
                            public function get_username($id){ 
                                $sql4="SELECT username FROM users WHERE id = $id"; 
                                $result = mysqli_query($this->db,$sql4); 
                                $user_data = mysqli_fetch_array($result); 
                                echo $user_data['username']; 
                                }  
                            public function get_firstname($id){ 
                                $sql5="SELECT fname FROM users WHERE id = $id"; 
                                $result = mysqli_query($this->db,$sql5); 
                                $user_data = mysqli_fetch_array($result); 
                                echo $user_data['fname']; 
                                } 
                            public function get_lastname($id){ 
                                $sql6="SELECT lname FROM users WHERE id = $id"; 
                                $result = mysqli_query($this->db,$sql6); 
                                $user_data = mysqli_fetch_array($result); 
                                echo $user_data['lname']; 
                                }
                            public function get_password($id){ 
                                $sql7="SELECT password FROM users WHERE id = $id"; 
                                $result = mysqli_query($this->db,$sql7); 
                                $user_data = mysqli_fetch_array($result); 
                                echo $user_data['password']; 
                                }
                            public function get_email($id){ 
                                $sql8="SELECT email FROM users WHERE id = $id"; 
                                $result = mysqli_query($this->db,$sql8); 
                                $user_data = mysqli_fetch_array($result); 
                                echo $user_data['email']; 
                                }       
				 		        /*** starting the session ***/ 
				 		        public function get_session(){ 
				 		            return $_SESSION['login']; 
				 		            }  
				 		            public function user_logout() { 
				 		                $_SESSION['login'] = FALSE; 
				 		                session_destroy(); 
				 		          }  
				 		       } 
				 		                
?>

