<?php

require '../../connection.php';



if(isset($_POST['winner'])){


$Prize =$_POST['val-prize'];
$date =$_POST['val-date'];
$winners =$_POST['val-winners'];



$query ="INSERT INTO `winners`( `Prize`, `Award_date`, `winner_email`) VALUES ('$Prize','$date','$winners')";

$db =mysqli_query($connect,$query);




$removeFromCartSql = "DELETE FROM competition ";
mysqli_query($connect, $removeFromCartSql);


header('location: winnerlist.php');
exit();




// if($db == TRUE){
//   header('location:winnerlist.php');
// }





}










?>
