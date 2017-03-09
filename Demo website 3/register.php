<?php
session_start();
require_once('db_connect.php');

if(isset($_POST['submit']) &!empty($_POST)) {
    // prevent sql injections/ clear user invalid inputs
    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);
    $password = trim($_POST['password']);
    $password = strip_tags($password);
    $password = htmlspecialchars($password);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = md5( $_POST['password']);
    $query = "INSERT INTO users SET username='".$username."', email='".$email."', password='".$password."' ";
    $result = mysqli_query($connection, $query);
    
    if($result){
        $smsg = "User Created Successfully!";
    }else{
        $fmsg =  "User Registration Failed!";
    }
    header('location: index.php');
}
?>