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

<div class="container">
    <div class="row">
        <?php
            include './config.php';
            $select = "SELECT * FROM hotel";
            // execute the query
            $result = mysqli_query($connection,$select);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                        <div class='col-lg-6 my-2'>
                            <div class='card p-3 rounded-2'>
                                <img width='100%' height='200px' style='object-fit:cover' src='./images/{$row['image']}' >
                                <h4>Name:{$row['name']}</h4>
                                <h5><span>$</span>{$row['price']}</h5>
                                <p>{$row['description']}</p>
                                <a href='./single-hotel.php?id={$row['id']}' class='btn btn-info w-100 my-2'>
                                    See More...
                                </a>
                            </div>
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