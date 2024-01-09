<?php

require '../../connection.php';

$deletid =$_GET['deletid'];

$query ="delete  from orders where id=$deletid";

$db =mysqli_query($connect,$query);

if($db == True){

  header('location:orderlist.php');
}







?>
