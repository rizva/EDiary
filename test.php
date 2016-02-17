<?php 


$name = 'Edin Rizvic';
$path = 'images/'.$name.'/resized';

if (!file_exists($path)) {
    mkdir($path, 0777, true);
}
?>