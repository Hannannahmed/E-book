<?php

require '../../connection.php';

$deletid =$_GET['deleteid'];

$query ="delete  from users where id='$deletid';";

$db=mysqli_query($connect,$query);

if($db == TRUE){

  header('location:userlist.php');
}

















?>
