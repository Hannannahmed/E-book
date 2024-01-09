
<?php

require '../../connection.php';



if(isset($_POST["submit"])){

  $username =$_POST["val-username"];
$useremail =$_POST["val-email"];
$userpassword =$_POST["val-password"];
$userrole =$_POST["val-role"];
$userimage =$_FILES["val-image"];




$check_Email_present_or_not ="select * from users where email='$useremail'";

$check_dboy =mysqli_query($connect,$check_Email_present_or_not);

$cehck_email_present=mysqli_num_rows($check_dboy);

if($cehck_email_present == 0){

$actualimageaddres = $userimage ["tmp_name"];
$actualimagename =$userimage ["name"];


$extension =explode('.',$actualimagename);

$actualextension =$extension[1];

$mypath ='../../profileimages/'.$actualimagename;

move_uploaded_file($actualimageaddres,$mypath);



$query =" INSERT INTO `users`( `name`, `email`, `password`, `user_type`,`image`)
VALUES ('$username',' $useremail','$userpassword','$userrole','$mypath')";

$dboy =mysqli_query($connect,$query);


if($dboy ==  TRUE){
header('location:userlist.php');
}




}else{

 echo"
  <script>

  window.location.href='adduser.php';
  var error = document.getElementById('error');
  error.innerHTML ='emailaleradry registered';
  </script>";
}












}











?>
