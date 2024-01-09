<?php

session_start();
require 'connection.php';

if(isset($_POST["submit"])){
$userotp =$_POST["otp"];
$OTP =$_SESSION["OTP"];
   

if($OTP == $userotp){
    $username=$_SESSION["username"];
    $useremail= $_SESSION["useremail"];
    $userpasss= $_SESSION["userpassword"];
    $userimage=  $_SESSION["userimage"];

   $query =" INSERT INTO `users`( `name`, `email`, `password`, `user_type`,`image`)
    VALUES ('$username',' $useremail','$userpasss','customer','$userimage')";


   $dboy =mysqli_query($connect,$query);


if($dboy){
    echo  "<script>alert('Data inserted successfullly');</script>";
    header('location:shop-login.php');
}else{
    echo  "<script>alert('Data is not inserted successfullly');</script>";
}






}else{
    echo   "<script>alert('wrong OTP u cant be created')</script>";
    header('location:shop-registration.php');
}

    

}






?>