<?php
    session_start();
    include './config.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $insert = "INSERT INTO users (name,email,password) VALUES ('{$name}','{$email}','{$password}')";
    mysqli_query($connection,$insert);
    header("Location:{$hostname}");
    $_SESSION['success'] = "Welcome $name";
    $_SESSION['user'] = "user loged in";
?>