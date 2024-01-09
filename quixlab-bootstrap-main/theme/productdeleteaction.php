<?php

require '../../connection.php';


$delete =$_GET['deleteid'];

$query ="delete from products where id=$delete";


$db =mysqli_query($connect,$query);


if($db){
  header('location:productlist.php');

}




?>
