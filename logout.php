<?php
// start session and logout
session_start();
session_destroy();

//redirect to login page
header("Location: login.php");

?>

