<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$myEmail = "b171210373@sakarya.edu.tr";
$pass = "123";

if ($email == $myEmail && $pass == $password) {
    $_SESSION["login"] = true;
    header("Location: index.php");
} else {
    header("Location: login.php");
}
