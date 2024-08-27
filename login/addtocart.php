<?php
session_start();
include '../inc/dbconnection.php';

if (isset($_POST['product']) && isset($_SESSION['account'])) {
    $product = intval($_POST['product']);//returns an integer (product has a value between 1 and 9)
    $account = $_SESSION['account'];

    // Insert product into cart table
    $sql = "INSERT INTO cart (name, product) VALUES ('$account', $product)";//add the pc in the database
    if (mysqli_query($connect, $sql)) {
        $_SESSION['message'] = ' class="invalidg">Product added to cart successfully.';
    } else {
        $_SESSION['message'] = ">Failed to add product to cart.";
    }
} else {
    $_SESSION['message'] = ">You must be logged in to add items to the cart.";
}

//$_SESSION['message'] throws the errors that will later be fetched by the recommendations page individually

header("Location: ../recommendations.php");
exit();
?>
