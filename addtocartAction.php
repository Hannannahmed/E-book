
<?php
session_start();
require 'connection.php';

$productid = $_GET['productid'];

// $querySelect = "SELECT name FROM products WHERE id = $productid";
// $result = mysqli_query($connect, $querySelect);
// $product = mysqli_fetch_assoc($result);
// $productName = $product['name'];

$userId = isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : "";

if ($userId > 0) {
    
    $query = "INSERT INTO `addtocart`(`user_id`, `product_id`) 
    VALUES ('$userId ','$productid ')";
  


    $dlvryboy = mysqli_query($connect,$query);

    if($dlvryboy == TRUE){
    
      header('location:shop-cart.php');
    
    }else{
      header('location:shop-login.php');
    }
    
     }
 else {
    header('location: shop-login.php');
}
?>
