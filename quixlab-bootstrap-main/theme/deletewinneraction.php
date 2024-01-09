<?php

require '../../connection.php';

$deletwinner=$_GET['winnersid'];


$query= "delete from winners where winner_id=$deletwinner";


$db=mysqli_query($connect,$query);

if($db == TRUE){


  header('location:winnerlist.php');
}














?>
