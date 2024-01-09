<?php
session_start();
require 'connection.php';

$uid = isset($_SESSION["user_id"]) ? $_SESSION["user_id"]:"";


if(isset($_POST['orderplaced'])){

$firstname =$_POST['firstname'];
$phnumber =$_POST['phnumber'];
$email =$_POST['email'];
$delivery =$_POST['cashdelivery'];
$address =$_POST['address'];
$totalproduct =$_POST['totalproducts'];
$totalprice =$_POST['totalprice'];
$paymentstatus =$_POST['cashdelivery'];
$placedon = date("Y-m-d H:i:s");


$query ="INSERT INTO `orders`( `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`)
 VALUES ('$uid ','$firstname','$phnumber','$email','cash on delivery','$address','$totalproduct','$totalprice','$placedon','pending')";

 $db=mysqli_query($connect,$query);


 $removeFromCartSql = "DELETE FROM addtocart WHERE user_id = '$uid'";
    mysqli_query($connect, $removeFromCartSql);


    header('location: orderconfrim.php');
    exit();
 





}














?>