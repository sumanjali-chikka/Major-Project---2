<?php
include("connection.php");
$cbill = $_GET['bill'];
$mobileno=$_GET['mobile_no'];
$query = "SELECT * FROM quantity_table WHERE bill_number='".$cbill."'";
$result=mysqli_query($conn, $query);
$res=mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debt option</title>
    <link rel="stylesheet" href="debt.css" />
</head>
<body>
    <div class="container">
    <center><h1>DEBT OPTION</h1></center>
    <label>Balance: </label>
    <input type="number" name="balance"  size="30" value="<?php echo $res['balance'];?>"><br>
    <label>Bill Amount: </label>
    <input type="number" name="bill_amount" value="<?php echo $res['total_amount'] ?>" size="30"><br>
    <label>Total Amount: </label>
    <input type="number" name="total" size="30" value="<?php echo $res['total_amount']; + $res['balance'];?>"></br>
    
    <label>Amount Paying: </label>
    <input type="number" name="amt_paying" size="30" value="<?php echo $res['total_amount'] - $res['balance'];?>"><br>
    <div><button type="submit" class="button" onclick="location.href='payment.html';">pay now</button></div>
    </div>
</body>
</html>