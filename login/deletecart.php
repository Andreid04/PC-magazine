<?php
session_start();
include '../inc/dbconnection.php';

if (isset($_POST['id']) && isset($_SESSION['account'])) {
    $id = intval($_POST['id']);
    $account = $_SESSION['account'];//we always delete from global id in the table!!!!

    // Delete item from cart
    $sql = "DELETE FROM cart WHERE id = $id AND name = '$account'";
    if (mysqli_query($connect, $sql)) {
        $_SESSION['message'] = ' class="invalidg">Item removed from cart.';
    } else {
        $_SESSION['message'] = ' class="invalid">Failed to remove item from cart (connection error with the database!).';
    }
}

header("Location: ../cart.php");//redirect/reload the page in this case
exit();
?>