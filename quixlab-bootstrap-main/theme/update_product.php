<?php


require '../../connection.php';

$finalupdate =$_GET["finalupdate"];

if(isset($_POST["submit"])){

$productname =$_POST["val-productname"];
$productauthor =$_POST["val-authorname"];
$productprice =$_POST["val-price"];
$category_id = $_POST["val-category"];
$productimage1 = $_FILES["val-image-1"];

    $actualname1 = $productimage1["name"];
    $actualaddress1 = $productimage1["tmp_name"];



    $mypath1 = "productimage/".$actualname1;

    move_uploaded_file($actualaddress1,$mypath1);



$query ="UPDATE `products` SET `name`='$productname',`author`='$productauthor',`price`='$productprice',`category`='$category_id',`image`='$mypath1',`user_id`='6' WHERE id=$finalupdate";
   $dboy = mysqli_query($connect,$query);

if ($dboy) {
    header('location:productlist.php');
}

}













?>
