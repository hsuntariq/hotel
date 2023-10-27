<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'boot_css.php'?>
    <title>Document</title>
</head>
<body>
<?php include 'navbar.php'?>
    
<div class="container mt-3 shadow">
    <div class="row">
        <?php
            $id = $_GET['id'];
            include './config.php';
            $select = "SELECT * FROM hotel WHERE id = $id";
            $result = mysqli_query($connection,$select);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <div class='col-lg-6'>
                        <img width='100%' height='300px' style='object-fit:cover' src='./images/{$row['image']}'>
                    </div>
                    <div class='col-lg-6'>
                        <h1 class='display-5'>Hotel Name:{$row['name']}</h1>
                        <h3>Price:{$row['price']}</h3>
                        <h3>Location:{$row['location']}</h3>
                        <h5>Rooms:{$row['rooms']}</h5>
                        <p>Details:{$row['description']}</p>
                        <button class='btn btn-dark my-2 w-100'>Buy Now</button>
                    </div>
                    ";
                }
            }
        ?>
       
    </div>
</div>


<?php include 'boot_js.php'?>

</body>
</html>