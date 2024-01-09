

<?php
session_start();

require 'connection.php';
if(isset($_POST["login"])){

$useremail=$_POST["dzemail"];
$userpassword=$_POST["dzpassword"];


$query ="select * from  users where email='$useremail' and password='$userpassword';";

$dboy =mysqli_query($connect,$query);


// print_r($dboy);


if(mysqli_num_rows($dboy) > 0){

    $row =mysqli_fetch_assoc($dboy);



$_SESSION ["user_id"]= $row ["id"];
$_SESSION ["user_name"]= $row ["name"];
$_SESSION ["user_email"]= $row ["email"];
$_SESSION ["user_role"]= $row ["user_type"];

if($_SESSION["user_role"] == "admin"){
    
    header('location:quixlab-bootstrap-main/theme/index.php');

}else if($_SESSION["user_role"] == "customer"){

    header('location:my-profile.php');

}else{
    header('location:index.php');

}

}
else{
    echo "<script>
    alert('credential wrong');
    window.location.href='shop-login.php';

    </script>";
}









}












?>
