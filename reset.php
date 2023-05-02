<?php 
$mail=$_GET['email'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RESET PASSWORD</title>
        <link rel="stylesheet" href="forgot.css">
    </head>
<body>
    <form action="?" method="post">
    <div class="container">
    <h1>RESET PASSWORD!!!</h1>
    <label class="id" >Enter New Password: </label>   
    <input type="text"  name="password" required size="36"/>
    <button>Submit</button>
    <button onclick="location.href='forgot.php';">Back</button>
    </div>
    </form>
    </body>
</html>

<?php 
include("connection.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $password=$_POST['password'];
    echo $password;
    $query ="UPDATE register set password = '$password' where email= '$mail' ";
    $result= mysqli_query($conn,$query);
    if($result){
        header("Location: suma.html");
    }
}

?>
