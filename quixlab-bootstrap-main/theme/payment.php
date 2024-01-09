<?php
require '../../connection.php';

if (isset($_POST['update_payment_status'])) {
    $newPaymentStatus = $_POST['payment_status'];
    $orderId = $_POST['order_id'];

    $updateQuery = "UPDATE orders SET payment_status = '$newPaymentStatus' WHERE id = $orderId";
    $db = mysqli_query($connect, $updateQuery);

    if ($db == TRUE) {
        header('location:orderlist.php');
    } else {
      // echo" <script>'alert (not connected)'</script>";
    }
}
?>

