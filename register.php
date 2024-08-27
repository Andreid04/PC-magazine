<?php
include 'inc/dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $account = $_POST['account'];
    $password = $_POST['password'];

    // check if the account already exists!!!!
    $checkq = "SELECT * FROM login WHERE account = '$account'";
    $result = mysqli_query($connect, $checkq);

    if (mysqli_num_rows($result) > 0) {
        include 'inc/invalid.php';
        echo '<h1>Account already exists. Please choose a different account name.</h1>';
        echo '<a class="btn btns" href="signup.php">Sign up again!</a>';
        include 'inc/invalidb.php';
    } else {
        // Insert the new user into the database
        $insertQuery = "INSERT INTO login (account, password) VALUES ('$account', '$password')";

        if (mysqli_query($connect, $insertQuery)) {
            include 'inc/invalid.php';
            echo '<h1>Account created successfully. You can now<h1> <br> 
            <a class="btn btns" href="login.php">Log in</a>.';
            include 'inc/invalidb.php';
        } else {
            echo 'Error: ' . mysqli_error($connect);
        }
    }
} else {
    include 'inc/invalid.php';
    echo '<h1>Invalid request method.</h1>';
    include 'inc/invalidb.php';
}

mysqli_close($connect);
?>
