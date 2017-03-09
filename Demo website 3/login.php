<?php
session_start();
require_once('db_connect.php');

if(isset($_POST) &!empty($_POST)) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = md5($_POST['password']);
    $query = "SELECT * FROM users WHERE email='$email' and password='$password' ";
    $result = mysqli_query($connection, $query);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['username'] = $username;
        echo "<div class='alert alert-success' role='alert'>User Logged in successfully!</div>";
    }else{
        $fmsg = "Incorrect email or password!";
    }
    if(isset($_SESSION['username'])){
        $smsg =  "User already logged in!";
    }
    header("Location: home.php");
}
?>