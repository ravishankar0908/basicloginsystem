<?php include "dashboard.php"; ?>
<?php
    $id = $_SESSION['userid'];
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $dob = $_SESSION['dateofbirth'];
    $phone = $_SESSION['phonenumber'];

    include "connect_DB.php";

    if(isset($_POST['usernamebtn'])){
        $newusername = $_POST['username'];
        $sql = "UPDATE registration SET username = '$newusername' WHERE id = '$id'";
        if($conn->query($sql) == true){
            header("location: logout.php");
        }
    }   
    
    if(isset($_POST['emailbtn'])){
        $newemail = $_POST['email'];
        $sql = "UPDATE registration SET email = '$newemail' WHERE id = '$id'";
        if($conn->query($sql) == true){
            header("location: logout.php");
        }
    }  
    
    if(isset($_POST['dobbtn'])){
        $newdob = $_POST['dateofbirth'];
        $sql = "UPDATE registration SET dateofbirth = '$newdob' WHERE id = '$id'";
        if($conn->query($sql) == true){
            header("location: logout.php");
        }
    }  

    if(isset($_POST['phonebtn'])){
        $newphone = $_POST['phonenumber'];
        $sql = "UPDATE registration SET phonenumber = '$newphone' WHERE id = '$id'";
        if($conn->query($sql) == true){
            header("location: logout.php");
        }
    }  

    if(isset($_POST['deletebtn'])){
        $sql = "DELETE FROM registration WHERE id = '$id'";
        if($conn->query($sql) == true){
            header("location: logout.php");
        }
    }
?>

<div class="container mt-2">
    <h3>User profile</h3>
    <table class="table mt-4">
        <tr>
            <th>User-Id</th>
            <th><?php echo $id ?></th>
            <th><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">Delete account?</button></th>
        </tr>
        <tr>
            <th>username</th>
            <th><?php echo $username ?></th>
            <th><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#username">update</button></th>
        </tr>
        <tr>
            <th>email-ID</th>
            <th><?php echo $email ?></th>
            <th><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#email">update</button></th>
        </tr>
        <tr>
            <th>date of birth</th>
            <th><?php echo $dob ?></th>
            <th><button class="btn btn-primary btn-sm" data-target="#dateofbirth" data-toggle="modal">update</button></th>
        </tr>
        <tr>
            <th>phone number</th>
            <th><?php echo $phone ?></th>
            <th><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#phonenumber">update</button></th>
        </tr>
    </table>
</div>

<div class="modal fade" id="username" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">update Username</h2>
            </div>

            <form action="profile.php" method="post">
                <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>               
                </div>

                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">close</button>
                    <button type="submit" class="btn btn-success" name="usernamebtn">save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="email" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">update email</h2>
            </div>

            <form action="profile.php" method="post">
                <div class="modal-body">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="E-mail" name="email">
                        </div>    
                </div>

                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">close</button>
                    <button type="submit" class="btn btn-success" name="emailbtn">save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="dateofbirth" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">update date of birth</h2>
            </div>

            <form action="profile.php" method="post">
                <div class="modal-body">
                        <div class="form-group">
                            <input type="date" class="form-control" placeholder="date of birth" name="dateofbirth">
                        </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">close</button>
                    <button type="submit" class="btn btn-success" name="dobbtn">save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="phonenumber" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">update phone number</h2>
            </div>

            <form action="profile.php" method="post">
                <div class="modal-body">                   
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="phone number" name="phonenumber">
                        </div>                    
                </div>

                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">close</button>
                    <button type="submit" class="btn btn-success" name="phonebtn">save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="delete" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">confirmation</h2>
            </div>

            <form action="profile.php" method="post">
                <div class="modal-body">                   
                        <h3>Are you sure you want to delete the account?</h3>               
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" name="deletebtn">Yes</button>
                    <button class="btn btn-success" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "./copyrights.php"; ?>
