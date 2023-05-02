<?php 
include("connection.php");

$bill_no=$_GET['billno'];
$phone_no=$_GET['mobileno'];
$query = "select * from quantity_table where bill_number='$bill_no'";
//$query3 = "SELECT  bill_number FROM quantity_table WHERE phone_number='$phone_no'";
$result=mysqli_query($conn, $query);
$res=mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            total sum
        </title>
        <link rel="stylesheet" href="total.css" />
    </head>
    <body>
        <center><h2>PAYMENT</h2></center>
        <div class="wrapper">
        
        <label>Bread Rs 50/each</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['fitem1q'] * 50?>" disabled></br>
        <label>Candy Rs 30/each</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['fitem2q'] * 30?>" disabled></br>
        <label>Hamburger Rs 60/each</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['fitem3q'] * 60?>" disabled></br>
        <label>Sandwich Rs 30/each</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['fitem4q'] * 30?>" disabled></br>
        <label>Chikki Rs 15/each</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['fitem5q'] * 15?>" disabled></br>
        <label>Jam Rs 35/each</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['fitem6q'] * 35?>" disabled></br>
        <label>Muffins Rs 30/each</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['fitem7q'] * 30?>" disabled></br>
        <label>Butter Rs 89/each</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['fitem8q'] * 89?>" disabled></br>
        <label>Rice  Rs 20/kg</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['gitem1q'] * 20?>" disabled></br>
        <label>Food Oil Rs 130/kg</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['gitem2q'] * 130?>" disabled></br>
        <label>Salt Rs 37/kg</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['gitem3q'] * 37?>" disabled></br>
        <label>Sugar Rs 54/kg</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['gitem4q'] * 54?>" disabled></br>
        <label>Dal Rs 120/kg</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['gitem5q'] * 120?>" disabled></br>
        <label>Maggi Rs 50/each</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['gitem6q'] * 50?>" disabled></br>
        <label>Pasta Rs 68/each</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['gitem7q'] * 68?>" disabled></br>
        <label>Masala Rs 49/each</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['gitem8q'] * 49?>" disabled></br>
        <label>Juice Rs 99/-</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['oitem1q'] * 99?>" disabled></br>
        <label>Boost Rs 104/kg</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['oitem2q'] * 104?>" disabled></br>
        <label>Honey Rs 64/kg</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['oitem3q'] * 64?>" disabled></br>
        <label>Gatorade Rs 30/kg</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['oitem4q'] * 30?>" disabled></br>
        <label>Nuts Rs 35/each</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['oitem5q'] * 35?>" disabled></br>
        <label>Dried fruits Rs 59/each</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['oitem6q'] * 59?>" disabled></br>
        <label>Soaps Rs 30/each</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['oitem7q'] * 30?>" disabled></br>
        <label>Conditioners Rs 100/each</label>
        <input type="number" placeholder="Quantity" value="<?php echo $res['oitem8q'] * 100?>" disabled></br>

    </div>
<?php 
$total_cost=($res['fitem1q'] * 50) + ($res['fitem2q'] * 30) + ($res['fitem3q'] * 60) + ($res['fitem4q'] * 30) 
+ ($res['fitem5q'] * 15) + ($res['fitem6q'] * 35) + ($res['fitem7q'] * 30) + ($res['fitem8q'] * 89) + ($res['gitem1q'] * 20)
+ ($res['gitem2q'] * 130)+ ($res['gitem3q'] * 37) + ($res['gitem4q'] * 54) + ($res['gitem5q'] * 120) + ($res['gitem6q'] * 50)
+ ($res['gitem7q'] * 68) + ($res['gitem8q'] * 49) + ($res['oitem1q'] * 99) + ($res['oitem2q'] * 104) + ($res['oitem3q'] * 64) 
+ ($res['oitem4q'] * 30) + ($res['oitem5q'] * 35) + ($res['oitem6q'] * 59) + ($res['oitem7q'] * 30) + ($res['oitem8q'] * 100);

?>
     
    <label class="total">Total Amount</label>
    <input type="number" name="total_amount" value="<?php echo $total_cost ?>" disabled><br><br>
    <button type="cash" onclick="location.href='thank.html';" >CASH</button>
    
    <script>
        var bill="<?php echo $bill_no;?>";
        var phone = "<?php echo $phone_no;?>";
    </script>
    <button type="submit" onclick="location.href='debt.php?bill=' + bill +'&mobile_no='+ phone  ;">DEBT</button>
       
    
    
    

<?php

//
 $total = $total_cost;
 
 $query1 = "UPDATE `quantity_table` SET `total_amount`='$total' where bill_number=$bill_no";
 mysqli_query($conn, $query1);
 $number = $phone_no;
 $query2 = "UPDATE `quantity_table` SET `phone_number`='$number' where bill_number=$bill_no";
 mysqli_query($conn, $query2);
?>
 
</body>
</html>