<?php
session_start();
unset($_SESSION["uname"]);
unset($_SESSION["pass"]);
header("Location:student_login.php");
?>