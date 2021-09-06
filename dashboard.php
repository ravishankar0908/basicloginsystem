<?php
    session_start();
    if($_SESSION['is_login']){
        $username = $_SESSION['username'];
    }else{
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="shortcut icon" href="./Assets/dashboard.png" type="image/x-icon">
</head>

<body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <a href="home.php" class="navbar-brand">Navbar</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarnav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarnav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link">home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            <?php echo $username ?>
                        </a>

                        <div class="dropdown-menu">
                            <a href="profile.php" class="dropdown-item">profile</a>
                            <a href="#" class="dropdown-item disabled">settings</a>
                            <a href="#" class="dropdown-item disabled">history</a>
                            <div class="dropdown-divider"></div>
                            <a href="logout.php" class="dropdown-item">logout</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">about</a>
                    </li>
                </ul>
            </div>
        </nav>

        

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>