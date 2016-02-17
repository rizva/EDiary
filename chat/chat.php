<?php 

include_once '../db_config.php';
include_once 'rizvaerrorhandler.php';

class Chat{
    
    private $mysqli;
    
    function __construct(){
        $this->mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    }
    
    function __destruct(){
        $this->mysqli->close();
    }
    
    
    public function deleteAllMessages(){
        $query = 'TRUNCATE table chat';
        $result = $this->mysqli->query($query);
    }
    
    public function postNewMessages($username,$message,$color){
        $username = $this->mysqli->real_escape_string($username);
        $message = $this->mysqli->real_escape_string($message);
        $color = $this->mysqli->real_escape_string($color);
        $query = 'INSERT INTO chat(posted_on,user_name,message,color)' .
        'VALUES (NOW(),
        "'.$username.'",
        "'.$message.'",
        "'.$color.'"
        )';
         $result = $this->mysqli->query($query);
    }
    
    public function getNewMessages($id=0){
        $id = $this->mysqli->real_escape_string($id);
        
        if($id>0){
            $query = 'SELECT message_id,user_name,message,color,DATE_FORMAT(posted_on,"%H:%i:%s")
            AS posted_on FROM chat WHERE message_id > '.$id.' ORDER BY message_id ASC';
        }else{
            $query = 'SELECT message_id,user_name,message,color,posted_on FROM
            (SELECT message_id,user_name,message,color,DATE_FORMAT(posted_on,"%H:%i:%s")
            AS posted_on FROM chat ORDER BY message_id DESC LIMIT 50) AS LAST50
            ORDER BY message_id DESC';
        }
        $result = $this->mysqli->query($query);
        
        $response = '<?xml version="1.0" encoding = UTF-8 standalone="yes" ?>';
        $response.='<response>';
        $response.=$this->isDatabaseCleared($id);
        
        if($result->num_rows){
            while ($row=$result->fetch_array(MYSQLI_ASSOC)) {
                $id = $row['message_id'];
                $username = $row['user_name'];
                $time = $row['posted_on'];
                $color = $row['color'];
                $message = $row['message'];
                
                $response.='<id>'. $id . '</id>' .
                            '<time>'. $time . '</time>' .
                            '<name>'. $username . '</name>' .
                            '<color>'. $color . '</color>' .
                            '<message>'. $message . '</message>';
                
            }
            $result->close();
        }
        
        $response.='</response>';
        return $response;
    }



        private function isDatabaseCleared($id){
            
            if($id>0){
               $check_clear ='SELECT COUNT(*) old FROM chat WHERE message_id <='.$id;
                
                $result = $this->mysqli->query($check_clear);
                $row = $result->fetch_array(MYSQLI_ASSOC);
                if($row['old'] == 0){
                    return '<clear>true</clear>';
                } 
            }
            return '<clear>false</clear>';
        }

}
?>