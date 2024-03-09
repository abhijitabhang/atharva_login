<?php
session_start();
if(isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="#" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit" name="btn_submit">Login</button>
        </form>
    </div>
</body>
</html>
<?php 

if(isset($_POST['btn_submit'])){
    extract($_POST);
    if($username === 'atharv' && $password === '123') {
        echo "<script>";
        echo "alert('Login Sucessfull');";
        echo "</script>";
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "<script>";
        echo "alert('enter valid credientials');";
        echo "</script>";
    }

}



?>