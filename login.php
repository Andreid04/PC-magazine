<?php
include 'inc/header.php';
?>

<div class="content">

    <div class="card form1 loginpage">

        <h1>Login page</h1>

        <p>Don't have an account? Sign up to become one of our members!</p>

        <form action="authenticate.php" method="post" >
            <label for="account">Account:</label><br>
            <input type="text" id="account" name="account" placeholder="Enter your account name" required><br>
            
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="Enter your password" required><br>

            <input type="submit" value="Login">
        </form>

    </div>

    <a href="signup.php" class="btn btns" >Sign up today!</a>

</div>

<?php
include 'inc/footer.php';
?>