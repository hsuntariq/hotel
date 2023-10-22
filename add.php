<?php
    session_start();
    // establish the connection
    include './config.php';
    // get the values from the form
    $name = $_POST['name'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $rooms = $_POST['rooms'];
    // get the image
    $fileName = $_FILES['image']['name'];
    $tempName = $_FILES['image']['tmp_name'];
    // store the image in the local storage
    move_uploaded_file($tempName, './images/' . $fileName );
    // send the data to the database

    echo $insert = "INSERT INTO hotel (name,location,price,description,rooms,image) VALUES ('{$name}','{$location}',$price,'{$desc}',$rooms,'{$fileName}')";
    // execute the query (GO);
    mysqli_query($connection,$insert);
    // start session to store your message;
    $_SESSION['message'] = 'Hotel Added Successfully!!!';
    // return back
    header("Location: {$hostname}/add-hotel.php");

?>