<?php 

include_once 'chat.php';
$mode = $_POST['mode'];
$id = 0;
$chat = new Chat();

if($mode == 'SendAndRetrieveNew'){
    
    $name = $_POST['name'];
    $message = $_POST['message'];
    $color = $_POST['color'];
    $id = $_POST['id'];
    
    if($name != '' && $message !='' && $color != ''){
        $chat->postNewMessages($name, $message, $color);
    }
}else if($mode == 'DeleteAndRetrieveNew'){
    $chat->deleteAllMessages();
}else if($mode == 'RetriveNew'){
    $id = $_POST['id'];
}


    if(ob_get_length()) ob_clean();
    
    header('Cache-Control: no-cache, must-revalidate');
    header('Pragma: no-cache');
    header('Content-Type: text/xml');
    
    echo $chat->getNewMessages($id);
?>