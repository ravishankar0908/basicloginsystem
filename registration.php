<?php 
    session_start();
    if(isset($_SESSION['username'])){
        header("location: home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registation</title>
    <link rel="shortcut icon" href="./Assets/logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <div class="container shadow-lg p-3 bg-white">
        <form action="insertdata.php" method="POST" id="form" name="form">
        <div class="text-center">
            <img class="w-25 mb-3" src="./Assets/login_avatar.jpg" alt="">
        </div>
        <h2 class="text-center">Registration here</h2>
            <div class="form-row mt-3">
                <div class="col-sm-6">  
                    <div class="form-group">
                        <label for="text1">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off">
                        <div id="errorfname"></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date">D.O.B</label>
                        <input type="date" class="form-control" id="date" name="date" autocomplete="off">
                        <div id="errordate"></div>
                    </div>
                </div>
                
            </div>
            <div class="form-row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="1234567890" autocomplete="off">
                        <div id="errorphone"></div>
                        <small class="text-muted">we won't share your phonenumber with anyone</small>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="text2">Enter your email id</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email id" autocomplete="off">
                        <div id="errorlname"></div>
                        <small class="text-muted">we won't share uour email with anyone</small>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="password1">Enter Password</label>
                        <input type="password" class="form-control" id="password1" name="password1" placeholder="Enter password">
                        <div id="errorpassword1"></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="password2">Confirm-Password</label>
                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm-Password">
                        <div id="errorpassword2"></div>
                    </div>
                </div>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="checkbox1" id="checkbox1" autocomplete="off">
                <label for="checkbox1" class="custom-control-label" id="checkbox1label">Show Password</label>
            </div>
            <div class="custom-control custom-checkbox text-md-center mt-3">
                <input type="checkbox" class="custom-control-input" name="checkbox2" id="checkbox2" autocomplete="off">
                <label for="checkbox2" class="custom-control-label" id="checkbox2label">Accept the <a href="#" data-toggle="modal" data-target="#modaltermsandcondition">terms and condition</a></label>
                <div id="errorcheckbox"></div>
            </div>
            <div class="form-group mt-3">
                <input type="submit" id="btnsubmit" class="btn btn-primary btn-block" value="Submit">
            </div>
            <div class="form-group">
                <a href="./login.php" target="_blank">already have an account?</a>
            </div>
        </form>
    </div>

    <div class="modal fade" tabindex="0" id="modaltermsandcondition" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-tile" id="modaltermsandcondition">Terms and condition</h3>
                </div>

                <div class="modal-body">
                    <h5>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore optio natus quasi quidem, dicta nulla excepturi vel sunt totam iusto eius hic, explicabo recusandae illo voluptas minus impedit blanditiis exercitationem! Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Velit dolor cupiditate eius eaque maxime tempora rem dolore, architecto nisi ex adipisci commodi in debitis voluptatibus voluptatem quaerat. Reprehenderit, recusandae et. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Ducimus dolore delectus inventore fuga adipisci. Nihil aliquam consequuntur explicabo nostrum ad recusandae sed placeat eveniet enim ab unde minima quod dicta, laboriosam fugit voluptatibus doloribus et quis magnam
                        modi vel. Laudantium rem voluptates facere?
                    </h5>
                </div>

                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-primary">close</button>
                </div>
            </div>
        </div>
    </div>

    <?php include "./copyrights.php"; ?>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./custom_javascript/registration_validation.js"></script>
</body>

</html>