<?php


require 'connection.php';

$cartid =$_GET['cartid'];

$query ="delete from addtocart where cart_id='$cartid'";

$db =mysqli_query($connect,$query);


if($db ==TRUE){


header('location:shop-cart.php');

}







?>