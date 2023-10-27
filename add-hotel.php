<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'boot_css.php'?>
    <title>Hotel</title>
</head>
<body>
<?php include 'navbar.php';
    if(isset($_SESSION['message'])){
        echo "
            <div class='flash text-light p-3 bg-dark position-fixed' style='top:0;right:0'>
                {$_SESSION['message']}
            </div>
        ";
    }

?>
    
    <div class="container mt-2 shadow p-3">
        <h1 class="display-3 text-center">
            Add A Hotel
        </h1>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img width="100%" height="100%" style="object-fit: cover;" src="https://news.airbnb.com/wp-content/uploads/sites/4/2019/06/PJM020719Q202_Luxe_WanakaNZ_LivingRoom_0264-LightOn_R1.jpg?fit=2500%2C1666" alt="">
            </div>
            <div class="col-lg-6">
                <form action="./add.php" method="POST" enctype="multipart/form-data">
                    <label for="">Hotel Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Add a hotel...">
                    <label for="">Hotel Location</label>
                    <input class="form-control" type="text" name="location" placeholder="Add a location...">
                    <label for="">Hotel Price</label>
                    <input class="form-control" type="number" name="price" placeholder="Add a Price...">
                    <label for="">Hotel Description</label>
                    <textarea placeholder="Description..." class="form-control" name="desc" id="" cols="30" rows="5"></textarea>
                    <label for="">Rooms</label>
                    <input class="form-control" type="number" name="rooms" placeholder="Add Rooms...">
                    <label for="">Image</label>

                    <input class="form-control" type="file" name="image" id="">
                    <button class="btn btn-dark my-3 w-100">
                        Add Hotel
                    </button>
                </form>
            </div>
        </div>
    </div>


<?php include 'boot_js.php';
    unset($_SESSION['message']);
?>

<script>
    let flash = document.querySelector('.flash');
    setTimeout(()=>{
        flash.style.transform = 'translateX(100%)'
        flash.style.transition = 'all 0.6s'

    },2000)
</script>

</body>
</html>