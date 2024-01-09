<?php
$uid = isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : "";
require 'connection.php';

$deleteorder = $_GET['cencelorder'];

$query = "DELETE FROM orders WHERE id='$deleteorder'";

$db = mysqli_query($connect, $query);

if ($db == TRUE) {
    header('location: orderhistory.php');
}
?>
