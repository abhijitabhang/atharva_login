<?php
session_start();
include('functions.php');

// Validate input
$username = cleanInput($_POST['username']);
$password = cleanInput($_POST['password']);

// Whitelisting/blacklisting can be applied here

// Simulated user validation
if($username === 'atharv' && $password === '123') {
    $_SESSION['username'] = $username;
    header("dashboard.php");
} else {
    header("Location: <C:><xampp><htdocs><mywebsite>login.php?error=invalid");
}
