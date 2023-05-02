<!DOCTYPE html>
<html>
    <head>
        <title>Forgot Password</title>
        <link rel="stylesheet" href="forgot.css">
    </head>
<body>
    <form action="?" method="post">
    <div class="container">
    <h1>FORGOT PASSWORD!!!</h1>
    <label class="id" >Enter email id: </label>   
    <input type="tel"  name="email" required size="36"/>
    <!--label><b>Confirm your Email</b></label><br>
    <label>Enter OTP Recieved :</label>
    <input type="password " id="pass" name="pass" required  size="36"><br><br>
    <label>Password :</label>
    <input type="password " id="pass" name="pass" required  size="36"><br><br>
    <label>Retype Password :</label>
    <input type="password" id="pass" name="pass" required size="36"--><br>
    <button>Submit</button>
    <button onclick="location.href='suma.html';">Back</button>
    </div>
    </form>
    </body>
</html>
<?php
include("connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $mailid=$_POST['email'];
    if(!empty($mailid)){
        $query="SELECT * FROM register WHERE email='".$mailid."' ";
        $result=mysqli_query($conn,$query);
        if($result){
            header("Location: reset.php?email=$mailid");
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
