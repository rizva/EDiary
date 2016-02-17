<?php
session_start();
include_once 'user.php';
$user = new User(); 
$id = $_SESSION['id'];


$fileName = $_FILES["uploaded_file"]["name"]; 
$fileTmpLoc = $_FILES["uploaded_file"]["tmp_name"]; 
$fileType = $_FILES["uploaded_file"]["type"]; 
$fileSize = $_FILES["uploaded_file"]["size"]; 
$fileErrorMsg = $_FILES["uploaded_file"]["error"]; 
$kaboom = explode(".", $fileName); 
$fileExt = end($kaboom); 
//  PHP Image Upload Error Handling --------------------------------------------------
if (!$fileTmpLoc) { 
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
} else if($fileSize > 5242880) { 
    echo "ERROR: Your file was larger than 5 Megabytes in size.";
    unlink($fileTmpLoc); 
    exit();
} else if (!preg_match("/.(gif|jpg|png)$/i", $fileName) ) {
         
     echo "ERROR: Your image was not .gif, .jpg, or .png.";
     unlink($fileTmpLoc); 
     exit();
} else if ($fileErrorMsg == 1) { 
    echo "ERROR: An error occured while processing the file. Try again.";
    exit();
}
// END PHP Image Upload Error Handling ---------------------------------

$moveResult = move_uploaded_file($fileTmpLoc, "images/$fileName");

if ($moveResult != true) {
    echo "ERROR: File not uploaded. Try again.";
    unlink($fileTmpLoc); 
    exit();
}
unlink($fileTmpLoc); 

include_once 'images_class.php';

$imgclass = new Images();

$target_file = "images/$fileName";

$name = $user->get_fullname($id);
$path = 'images/'.$name.'/resized';
if (!file_exists($path)) {
    mkdir($path, 0777, true);
}

$resized_file = "$path/processed_$fileName";
$wmax = 450;
$hmax = 450;
$imgclass->resize_photo($target_file, $resized_file, $wmax, $hmax, $fileExt);


$target_file = "$path/processed_$fileName";

$path1 = 'images/'.$name.'/thumb';
if (!file_exists($path1)) {
    mkdir($path1, 0777, true);
}
$thumbnail = "$path1/thumb_$fileName";
$wthumb = 75;
$hthumb = 75;
$imgclass->thumb_photo($target_file, $thumbnail, $wthumb, $hthumb, $fileExt);


// Test
echo "The file named <strong>$fileName</strong> uploaded successfuly.<br /><br />";
echo "It is <strong>$fileSize</strong> bytes in size.<br /><br />";
echo "It is an <strong>$fileType</strong> type of file.<br /><br />";
echo "The file extension is <strong>$fileExt</strong><br /><br />";
echo "The Error Message output for this upload is: $fileErrorMsg";
 
 
?>