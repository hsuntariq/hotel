<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php'?>
    <title>Sign Up</title>
</head>
<body>
<?php include 'navbar.php';
        if(isset($_SESSION['invalid'])){
            echo "
                <div class='flash position-fixed bg-success p-2 w-25' style='top:0;right:0;z-index:222'>
                    {$_SESSION['invalid']}
                </div>  
            ";
        }
    ?>
    <div class="row container my-4 mx-auto align-items-center">
        <h1 class="display-1 text-center">
            Register to get started
        </h1>
        <div class="col-lg-6">
            <form action="./log-in.php" class="shadow p-3 rounded" method="POST">
                <h3 class="text-center">
                    Your Credentials
                </h3>
                <label for="">Email</label>
                <input class="form-control" type="email" name="email">
                <label for="">Password</label>
                <input class="form-control" type="password" name="password" id="">
                <button class="btn btn-success w-100 my-2">
                    Login
                </button>
            </form>
        </div>
        <div class="col-lg-6">
    <img src="https://media3.giphy.com/media/Ltz1ZA728qKw4mEY94/giphy.gif" width="100%" alt="">
        </div>
    </div>


    <?php include 'boot_js.php';
    unset($_SESSION['success']);
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