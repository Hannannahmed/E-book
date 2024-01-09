<?php
session_start();
require '../connection.php';

$uid = isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : "";

if (isset($_POST["submit"])) {
    if (!$uid) {
       
        header('location:../shop-login.php');
        exit();
    }
    $pdfFileName = $_FILES["pdf_file"]["name"];
    $pdfTmpName = $_FILES["pdf_file"]["tmp_name"];

  
    $uploadPath = "pdf/" . $pdfFileName;
    move_uploaded_file($pdfTmpName, $uploadPath);

    
    $insertSql = "INSERT INTO `competition`( `user_id`, `pdf`) VALUES ('$uid','$uploadPath')";
    $DB = mysqli_query($connect, $insertSql);

    if ($DB == true) {
        header('location: ../index.php');
    }
}
?>