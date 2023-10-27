<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="text-white navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="text-white nav-link active" aria-current="page" href="./add-hotel.php">Add Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="text-white nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <?php
                    if(!isset($_SESSION['user']) ){
                        echo "
                        <li class='nav-item'>
                        <a class='text-white nav-link' href='./signup.php'>Sign Up</a>
                        </li>
                        
                        <li class='nav-item'>
                            <a class='text-white nav-link' href='./login.php' aria-disabled='true'>Login</a>
                        </li>
                        
                        ";
                    }
                ?>
                <li class='nav-item'>
                            <a href='./show-hotels.php' class='text-white nav-link' aria-disabled='true'>Our Hotels</a>
                        </li>
                <?php
                    if(isset($_SESSION['user'])){
                        echo "
                        <li class='nav-item'>
                        <a href='./logout.php' class='mx-2 text-white btn btn-danger ' aria-disabled='true'>Logout</a>
                    </li>
                        ;
                    
                        <li class='nav-item'>
                        <a class='text-white nav-link'>Hello {$_SESSION['user']} </a>
                    </li>";
                    }    
                ?>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>