<?php

require '../../connection.php';

$compettionid=$_GET['compettionid'];


$query= "delete from competition where id=$compettionid";


$db=mysqli_query($connect,$query);

if($db == TRUE){


  header('location:competionlist.php');
}














?>
