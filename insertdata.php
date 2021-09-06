<?php
    include "connect_DB.php";
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date1 = $_POST["date"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];

    $hashed_password1 = password_hash($password1,PASSWORD_DEFAULT);
    $hashed_password2 = password_hash($password2,PASSWORD_DEFAULT);
     
    if($conn->connect_error){
        die("connection failed");
    }else{
        $query = "SELECT * FROM registration WHERE email = '$email'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            echo "email already taken";
        }else{
            // inserting data into database
            $data = $conn->prepare("INSERT INTO registration(username,email,phonenumber,dateofbirth,password1,password2) VALUES(?,?,?,?,?,?)");
            $data->bind_param("ssssss",$username,$email,$phone,$date1,$hashed_password1,$hashed_password2);
            $data->execute();
            header("location: login.php");
            $data->close();
            $conn->close();
        }
    }
?>