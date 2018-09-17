<?php
session_start();
unset($_SESSION['SESS']);
//session_destroy();
//redirect to login page
header('Location:index.html');
?>