<?php
  

// this is the connection file
include_once '\bankpro/connection/conn.php';;

if(isset($_POST['sub'])){
    $username = trim(mysqli_real_escape_string($conn, $_POST['username']));
    $Email = trim(mysqli_real_escape_string($conn, $_POST['email']));
    $pin = trim(mysqli_real_escape_string($conn, $_POST['pin']));
    $phone = trim(mysqli_real_escape_string($conn, $_POST['phone_number']));
    $birth_date = trim(mysqli_real_escape_string($conn, $_POST['birth_date']));
    $location = trim(mysqli_real_escape_string($conn, $_POST['location']));
    $password = trim(mysqli_real_escape_string($conn, $_POST['password']));
    $password_pass = trim(mysqli_real_escape_string($conn, $_POST['password_pass']));
    if(empty($username)||empty($email)||empty($pin)||empty($phone_number)||empty($birth_date)||empty($location)||empty($password)||
        empty($password_pass)){
        header('Location:\bankpro/login_and_signup/sign up.php? please fill the space ');;
        exit();;

    }