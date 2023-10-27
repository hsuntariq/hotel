<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php'?>
    <title>Sign Up</title>
</head>
<body>
    <div class="row container my-4 mx-auto align-items-center">
        <h1 class="display-1 text-center">
            Register to get started
        </h1>
        <div class="col-lg-6">
            <form action="./sign-up.php" class="shadow p-3 rounded" method="POST">
                <h3 class="text-center">
                    Your Credentials
                </h3>
                <label for="">Username</label>
                <input class="form-control" type="text" required name="name" id="">
                <label for="">Email</label>
                <input class="form-control" type="email" name="email">
                <label for="">Password</label>
                <input class="form-control" type="text" name="password" id="">
                <button class="btn btn-success w-100 my-2">
                    Sign Up
                </button>
            </form>
        </div>
        <div class="col-lg-6">
    <img src="https://media3.giphy.com/media/Ltz1ZA728qKw4mEY94/giphy.gif" width="100%" alt="">
        </div>
    </div>
</body>
</html>