<?php
session_start();
require 'connection.php';

$uid = isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : "";

if (isset($_POST['product_id'], $_POST['quantity'])) {
    $product_id = intval($_POST['product_id']);
    $quantity = intval($_POST['quantity']);

    // Update the quantity in the cart for the specific product
    $updateQuery = "UPDATE addtocart SET quantity = '$quantity' WHERE user_id = '$uid' AND product_id = '$product_id'";
    $result = mysqli_query($connect, $updateQuery);

    if ($result) {
        // Redirect back to the page after the update
        header('location: your-page.php');
    } else {
        echo "Error updating quantity";
    }
} else {
    echo "Invalid request";
}
