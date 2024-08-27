<?php
session_start();
session_unset(); //frees variables
session_destroy();//destroys actual session
header('Location: ../index.php'); // Redirect to the homepage after logout
exit();
?>
