<?php


require '../../connection.php';

if(isset($_POST["submit"])){

$productname =$_POST["val-productname"];
$productauthor =$_POST["val-authorname"];
$productprice =$_POST["val-price"];

$category_id = $_POST["val-category"];
$productimage1 = $_FILES["val-image-1"];
    // $productimage2 = $_FILES["val-image-2"];

    $actualname1 = $productimage1["name"];
    $actualaddress1 = $productimage1["tmp_name"];

    // $actualname2 = $productimage2["name"];
    // $actualaddress2 = $productimage2["tmp_name"];

    // $mypath1 = "productimage/".$actualname1;
    $mypath1 ="productimage/".$actualname1;
    move_uploaded_file($actualaddress1,$mypath1);

    // $mypath2 = "productimage/".$actualname2;
    // move_uploaded_file($actualaddress2,$mypath2);

    // $query ="INSERT INTO `products`(`product_name`, `product_price`, `product_discrpition`, `product_image_1`, `product_iamge_2`, `category_id`)
    // VALUES ('$productname','$productauthor','$productdiscription',' $mypath1','$mypath2','$category_id')";

$query ="INSERT INTO `products`( `name`, `author`, `price`, `category`, `image`, `user_id`)
 VALUES ('$productname','$productauthor','$productprice','$category_id','$mypath1','6')";

   $dboy = mysqli_query($connect,$query);

if ($dboy) {
    header('location:productlist.php');
}

}









?>
