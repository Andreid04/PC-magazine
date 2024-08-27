<?php
session_start();

include 'inc/dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {//also tests request method
    $account = $_POST['account'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE account = '$account' AND password = '$password'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Account and password are correct, start a session
        $_SESSION['account'] = $account; //name of account in current session
        header('Location: index.php'); // Redirect to a logged-in page
        exit;
    } else {
        include 'inc/invalid.php';

        echo '<h1>Invalid account or password.</h1>';
        echo '<a class="btn btns" href="login.php">Try again</a>.';

        include 'inc/invalidb.php';
    }
} else {
    include 'inc/invalid.php';
    echo '<h1>Invalid request method.</h1>';
    include 'inc/invalidb.php';
}
?>