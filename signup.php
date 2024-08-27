<?php
include 'inc/header.php';
?>

<div class="content">

    <div class="card form1 loginpage">

        <h1>Sign Up page</h1>

        <p>Sign up to become one of our members! Already have an account? Log in today!</p>

        <form id="signupForm" action="register.php" method="post">
            <label for="account">Account:</label><br>
            <input type="text" id="account" name="account" placeholder="Enter your account name" required><br>
            <p class="invalid" id="msgUsername"></p>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="Enter your password" required><br>
            <p class="invalid" id="msgPassword"></p>

            <label for="repassword">Retype Password:</label><br>
            <input type="password" id="repassword" name="repassword" placeholder="Re enter your password" required><br>
            <p class="invalid" id="msgRePassword"></p>

            <input type="submit" value="Sign up">
        </form>

    </div>

    <a href="login.php" class="btn btns">Login</a>

    <script>

        function validateForm() {
            let username = document.getElementById('account').value,
                msgUsername = document.getElementById('msgUsername'),
                password = document.getElementById('password').value,
                msgPassword = document.getElementById('msgPassword'),
                rePassword = document.getElementById('repassword').value,
                msgRePassoword = document.getElementById('msgRePassword'),
                valid = true;
            if (username.length < 3) {
                msgUsername.innerHTML = 'Account name must have minimun 3 letters';
                valid = false;
            }
            else {
                //msgUsername.innerHTML = ' ';
            }

            if (password.length < 4) {
                msgPassword.innerHTML = 'Password is too short (at least 4 characters)';
                valid = false;
            }
            else {
                //msgPassword.innerHTML = ' ';
            }


            if (password !== rePassword) {
                msgRePassoword.innerHTML = 'Password does not match';
                valid = false;
            }
            else {
               // msgRePassoword.innerHTML = ' ';
            }

            return valid;

        }

        function submission(){
            event.preventDefault(); // Prevent form submission
            let valid = validateForm();
            if (valid) {
                this.submit();//submits the form
            }
        }

        document.getElementById('signupForm').addEventListener('submit', submission); 

    </script>

</div>

<?php
include 'inc/footer.php';
?>