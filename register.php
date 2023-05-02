<?php
    include("connection.php");
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $cname=$_POST['cashiername'];
        $id=$_POST['cashierid'];
        $mail=$_POST['email'];
        $num=$_POST['phone_number'];
        $pass=$_POST['password'];
        $cnpass=$_POST['confirmpassword'];

        $sql = "INSERT INTO register (cashiername, cashierid, email, phone_number, password, confirmpassword) VALUES ('$cname', '$id', '$mail', '$num', '$pass', '$cnpass')";
        mysqli_query($conn, $sql);
        header("Location: suma.html");
        if($conn->query($sql)===TRUE){
            echo "New record created successfully";
            if($pass!=$cnpass){
                echo "Password not matched!!";
            }
        }
        else{
            echo "Error: ". $sql . "<br>" .$conn->error;
        }
    }
?>