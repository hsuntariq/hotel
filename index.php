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
    <title>Document</title>
</head>

<body>

    <?php include 'navbar.php';
        if(isset($_SESSION['success'])){
            echo "
                <div class='flash position-fixed bg-success p-2 w-25' style='top:0;right:0;z-index:222'>
                    {$_SESSION['success']}
                </div>  
            ";
        }
    ?>
    


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