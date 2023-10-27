<?php
    session_start();
    include './config.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $check = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'";
    $result = mysqli_query($connection,$check);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = 'success';
        $_SESSION['loged_user'] = $row['name'];
        header("Location: {$hostname}");
    }else{
        $_SESSION['invalid'] = 'Invalid credentials, Tru Again!';
        header("Location: {$hostname}/login.php");
    }
    
?>