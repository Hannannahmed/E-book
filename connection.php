<?php

$servername ="localhost";
$username ="root";
$password="";
$db ="e_book_db";


$connect =mysqli_connect($servername,$username,$password,$db);

if(!$connect){

echo "<script> alert ('not connected') </script>";


}


















?>