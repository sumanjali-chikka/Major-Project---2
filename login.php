<?php
include("connection.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $uname=$_POST['username'];
    $pass=$_POST['password'];
    if(!empty($uname) && !empty($pass)){
        $query="select cashiername,password from register where cashiername='$uname' and password='$pass'";
        $result=mysqli_query($conn,$query);
        if($result){
            header("Location: bill.html");
        }
        else{
            echo "Enter valid details";
        }
    }
    else{
        echo "Enter details";
    }
}
?>