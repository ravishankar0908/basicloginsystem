<?php include "connect_DB.php"; ?>
<?php
    session_start();
    if(isset($_SESSION['username'])){
        header("location: home.php");
    }
    if(isset($_POST['loginbtn'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM registration WHERE username = '$username'";
        $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) == 1){
                while($row = mysqli_fetch_array($result)){
                    if(password_verify($password,$row['password1'])){
                        $_SESSION['is_login'] = true;
                        $_SESSION['username'] = $username;
                        $_SESSION['userid'] = $row['id'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['dateofbirth'] = $row['dateofbirth'];
                        $_SESSION['phonenumber'] = $row['phonenumber'];
                        header("location: home.php");
                    }else{
                        header("location: login.php");
                    }
                } 
            }else{
                header("location: login.php");
            }      
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="shortcut icon" href="./Assets/login_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <div class="container shadow-lg p-3 mb-5 bg-white">
        <div class="text-center">
            <img class="w-25" src="./Assets/login_avatar.jpg">
        </div>
        <form action="./login.php" method="post" id="form">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <h2 class="text-center p-2">Login here</h2>
                    <div class="form-group">
                        <label for="username">Enter Username</label>
                        <input type="text" class="form-control" placeholder="Enter username" id="username" name="username" autocomplete="off">
                        <div id="errorusername"></div>
                    </div>
                    <div class="form-group">
                        <label for="password">Enter Password</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="password" name="password">
                        <div id="errorpassword"></div>
                        <span>
                        </span>
                    </div>
                    <div class="custom-checkbox custom-control">
                        <input type="checkbox" class="custom-control-input" name="checkbox1" id="checkbox1">
                        <label for="checkbox1" class="custom-control-label" id="checkbox1label">show password</label>
                    </div>
                    <div class="form-group mt-2">
                        <a href="./forgot_password.php" target="_blank">Forgot Password?</a>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="submit" id="loginbtn" name="loginbtn">
                    </div>
                    <a href="./registration.php" target="_blank">don't have an account?</a>

                </div>
            </div>
        </form>
    </div>
    <?php include "./copyrights.php"; ?>




    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./custom_javascript/login.js"></script>
</body>

</html>