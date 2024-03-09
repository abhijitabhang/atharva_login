<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
