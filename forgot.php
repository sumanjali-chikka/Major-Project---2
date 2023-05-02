<?php 
include("connection.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $query ="UPDATE register set password='".$password."' where email='".$mail."'";
    $result= mysqli_query($con,$query);
    if($result){
        header("Location: suma.html");
    }
}

?>