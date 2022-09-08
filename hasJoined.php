<?php
$capefolder = "replace this to folder with capes";
$skinfolder = "replace this to folder with skins";

if(isset($_GET['username'])){
 $username = $_GET['username']; 
} else {
 die('username is not set(this data is not valid)'); 
}

if(!file_exists($skinfolder ."skin-". $username .'.png')){
  $skinjson = '{"SKIN":{"url":"example.com/skins/skin-steve.png"}';
} else {
 $skinjson = '{"SKIN":{"url":"example.com/skins/skin-'. $username .'.png"}'; 
}
if(!file_exist){
  
}
