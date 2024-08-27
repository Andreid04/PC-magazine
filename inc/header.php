<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Magazine</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>

</body>
<header class="top">
    <div class="row">
        <div class="col-md-1 sign">
            <img src="images/mir.jpg" class="logo">
        </div>
        <div class="col-md-9">
            <nav>
                <ul class="navigation">
                    <li><a href="index.php">Home</a> </li>
                    <li><a href="configurator.php">Build configurator</a></li>
                    <li><a href="recommendations.php">System recommendations</a></li>
                    <li><a href="compatibility.php">Compatibility chart</a></li>
                    <!--<li><a href="login.php">Log In</a></li>-->
                </ul>
            </nav>
        </div>
        <div class="col-md-2">
            <?php if (isset($_SESSION['account'])): ?>
                <div class="row small">
                    <p class="l0">Welcome back, <?= $_SESSION['account']; ?>!</p>
                </div>
                <div class="row small">
                    <div class="col-md-6">
                        <a class="btn btn-danger l1" href="login/logout.php">Log Out</a>
                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-success l2" href="cart.php">Cart</a>
                    </div>
                </div>
            <?php else: ?>
                <a href="login.php" class="btn login1">Log In</a>
                <a href="signup.php" class="btn login2">Sign Up</a>
            <?php endif; ?>
        </div>
    </div>

    <div class="row banner-container">
        <img class="banner" src="images/banner.jpg" alt="">
        <div class="col-md-4 banner-content">
            <div class="logosite">
                <p>PC Magazine</p>
            </div>
        </div>
        <div class="col-md-9 banner-content">
            <p class="description">The last stop for building your dream computer!</p>
        </div>
    </div>

</header>