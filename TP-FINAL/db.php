<?php
//connexion

$server = 'localhost'; 
$username ='root'; 
$passw ='root'; 
$database ='tpfinal'; 

$conn = mysqli_connect($server, $username, $passw, $database); 

if(!$conn){
   die('error');
}
?>