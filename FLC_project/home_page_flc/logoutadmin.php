<?php
session_start();
unset($_SESSION['EMAIL']);
unset($_SESSION['IS_LOGIN']);
header('location:login.php');
?>