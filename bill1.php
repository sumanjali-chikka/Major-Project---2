<?php
include("bill.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Items
        </title>
        <link rel="stylesheet" href="bill.css" />
    </head>
    <body>
        <center><h1>BILLING SYSTEM</h1></center>
        <h3>CUSTOMER DETAILS</h3>
        
        <div class="container1">   
            <label>Customer name : </label>   
            <input type="text" placeholder="Enter Customer name" name="name" value="<?php echo $name; ?>" disabled>  
            <label>Phone Number : </label>   
            <input type="tel" placeholder="Enter Phone number" name="number" value="<?php echo $number; ?>" disabled>
            <label>Bill Number : </label>   
            <input type="number" placeholder="Enter Bill number" name="billnumber" value="<?php echo $bill_number; ?>" disabled> 
        </div>
    <h3>ITEMS LIST</h3>
    
    <div>
        <div>
        <div class="container2">
        <div class="food">
        <h5>Food</h5>
        <div class="container">
        <div class="wrapper">
        <label>Bread </label>
        <input type="number" name="Fitem1" placeholder="Quantity" value="<?php echo $fitem1q; ?>" disabled></br>
        <label>Candy </label>
        <input type="number" name="Fitem2" placeholder="Quantity" value="<?php echo $fitem2q; ?>" disabled></br>
        <label>Hamburger </label>
        <input type="number" name="Fitem3" placeholder="Quantity" value="<?php echo $fitem3q; ?>" disabled></br>
        <label>Sandwich </label>
        <input type="number" name="Fitem4" placeholder="Quantity" value="<?php echo $fitem4q; ?>" disabled></br>
        <label>Chikki </label>
        <input type="number" name="Fitem5" placeholder="Quantity" value="<?php echo $fitem5q; ?>" disabled></br>
        <label>Jam </label>
        <input type="number" name="Fitem6" placeholder="Quantity" value="<?php echo $fitem6q; ?>" disabled></br>
        <label>Muffins </label>
        <input type="number" name="Fitem7" placeholder="Quantity" value="<?php echo $fitem7q; ?>" disabled></br>
        <label>Butter</label>
        <input type="number" name="Fitem8" placeholder="Quantity" value="<?php echo $fitem8q; ?>" disabled></br>
        </div>
        </div>
    </div>
        <div class="grocery">
        <h5>Grocery</h5>    
        <div class="container">
        <div class="wrapper">
        <label>Rice </label>
        <input type="number" name="Gitem1" placeholder="Quantity" value="<?php echo $gitem1q; ?>" disabled></br>
        <label>Food Oil </label>
        <input type="number" name="Gitem2" placeholder="Quantity" value="<?php echo $gitem2q; ?>" disabled></br>
        <label>Salt </label>
        <input type="number" name="Gitem3" placeholder="Quantity" value="<?php echo $gitem3q; ?>" disabled></br>
        <label>Sugar </label>
        <input type="number" name="Gitem4" placeholder="Quantity" value="<?php echo $gitem4q; ?>" disabled></br>
        <label>Dal </label>
        <input type="number" name="Gitem5" placeholder="Quantity" value="<?php echo $gitem5q; ?>" disabled></br>
        <label>Maggi </label>
        <input type="number" name="Gitem6" placeholder="Quantity" value="<?php echo $gitem6q; ?>" disabled></br>
        <label>Pasta </label>
        <input type="number" name="Gitem7" placeholder="Quantity" value="<?php echo $gitem7q; ?>" disabled></br>
        <label>Masala </label>
        <input type="number" name="Gitem8" placeholder="Quantity" value="<?php echo $gitem8q; ?>" disabled></br>
        </div>
        </div>
    </div>
    <div class="others">
    <h5>Others</h5>
        <div class="container">    
        <div class="wrapper">
        <label>Juice </label>
        <input type="number" name="Oitem1" placeholder="Quantity" value="<?php echo $oitem1q; ?>" disabled></br>
        <label>Boost </label>
        <input type="number" name="Oitem2" placeholder="Quantity" value="<?php echo $oitem2q; ?>" disabled></br>
        <label>Honey </label>
        <input type="number" name="Oitem3" placeholder="Quantity" value="<?php echo $oitem3q; ?>" disabled></br>
        <label>Gatorade </label>
        <input type="number" name="Oitem4" placeholder="Quantity" value="<?php echo $oitem4q; ?>" disabled></br>
        <label>Nuts </label>
        <input type="number" name="Oitem5" placeholder="Quantity" value="<?php echo $oitem5q; ?>" disabled></br>
        <label>Dried fruits</label>
        <input type="number" name="Oitem6" placeholder="Quantity" value="<?php echo $oitem6q; ?>" disabled></br>
        <label>Soaps</label>
        <input type="number" name="Oitem7" placeholder="Quantity" value="<?php echo $oitem7q; ?>" disabled></br>
        <label>Conditioners </label>
        <input type="number" name="Oitem8" placeholder="Quantity" value="<?php echo $oitem8q; ?>" disabled></br>
        </div>
        </div>
    </div>
    <?php
    $total_food = ($fitem1q * 50 ) + ($fitem2q * 30 ) + ( $fitem3q * 60 ) + ($fitem4q * 30) + ($fitem5q * 15) +
     ($fitem6q * 35) + ($fitem7q * 30) + ($fitem8q * 89);
     $total_g = ($gitem1q * 20 ) + ($gitem2q * 130 ) + ( $gitem3q * 37 ) + ($gitem4q * 54) + ($gitem5q * 120) +
     ($gitem6q * 50) + ($gitem7q * 68) + ($gitem8q * 49);
     $total_oth= ($oitem1q * 99 ) + ($oitem2q * 104 ) + ( $oitem3q * 64 ) + ($oitem4q * 30) + ($oitem5q * 35) +
     ($oitem6q * 59) + ($oitem7q * 30) + ($oitem8q * 100);
    
    ?>

    </div>

</br>
<?php

$query= "insert into customer_details (customer_name, phone_number, bill_number) values ('$name','$phone_no','$bill_number')";
mysqli_query($conn, $query);



$query1 = "insert into quantity_table (bill_number,fitem1q,fitem2q,fitem3q,fitem4q,fitem5q,fitem6q,fitem7q,fitem8q
,gitem1q,gitem2q,gitem3q,gitem4q,gitem5q,gitem6q,gitem7q,gitem8q,oitem1q,oitem2q,oitem3q,oitem4q,oitem5q,
oitem6q,oitem7q,oitem8q) values ('$bill_number','$fitem1q','$fitem2q','$fitem3q','$fitem4q','$fitem5q',
'$fitem6q','$fitem7q','$fitem8q','$gitem1q','$gitem2q','$gitem3q','$gitem4q','$gitem5q','$gitem6q','$gitem7q','$gitem8q',
'$oitem1q','$oitem2q','$oitem3q','$oitem4q','$oitem5q','$oitem6q','$oitem7q','$oitem8q')";

mysqli_query($conn, $query1);

?>
    
        <button type="submit" class="Generate Bill" onclick="upt()"> Generate Bill</button>
        <button type="button" class="Clear" > Clear</button>
        <button type="button" class="Exit" > Exit</button>
        
    </div>

<script type="text/javascript">
    function upt(){
        <?php
            header("Location: total.php?billno=$bill_number&mobileno=$phone_no");
        ?>
    }
    function update(){
        var quan=document.getElementById('fitem1');
        var costf1=50*quan;
        document.getElementById('ftotal').innerHTML=costf1;
    }
</script>
    </body>
</html>