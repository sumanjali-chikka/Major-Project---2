<?php
include("connection.php");
$name=$_POST['name'];
$phone_no=$_POST['number'];
$bill_number=$_POST['billnumber'];
$fitem1q=$_POST['Fitem1'];
$fitem2q=$_POST['Fitem2'];
$fitem3q=$_POST['Fitem3'];
$fitem4q=$_POST['Fitem4'];
$fitem5q=$_POST['Fitem5'];
$fitem6q=$_POST['Fitem6'];
$fitem7q=$_POST['Fitem7'];
$fitem8q=$_POST['Fitem8'];
$gitem1q=$_POST['Gitem1'];
$gitem2q=$_POST['Gitem2'];
$gitem3q=$_POST['Gitem3'];
$gitem4q=$_POST['Gitem4'];
$gitem5q=$_POST['Gitem5'];
$gitem6q=$_POST['Gitem6'];
$gitem7q=$_POST['Gitem7'];
$gitem8q=$_POST['Gitem8'];
$oitem1q=$_POST['Oitem1'];
$oitem2q=$_POST['Oitem2'];
$oitem3q=$_POST['Oitem3'];
$oitem4q=$_POST['Oitem4'];
$oitem5q=$_POST['Oitem5'];
$oitem6q=$_POST['Oitem6'];
$oitem7q=$_POST['Oitem7'];
$oitem8q=$_POST['Oitem8'];
$query= "insert into customer_details (customer_name, phone_number, bill_number) values ('$name','$phone_no','$bill_number')";
mysqli_query($conn, $query);



$query1 = "insert into quantity_table (bill_number,fitem1q,fitem2q,fitem3q,fitem4q,fitem5q,fitem6q,fitem7q,fitem8q
,gitem1q,gitem2q,gitem3q,gitem4q,gitem5q,gitem6q,gitem7q,gitem8q,oitem1q,oitem2q,oitem3q,oitem4q,oitem5q,
oitem6q,oitem7q,oitem8q) values ('$bill_number','$fitem1q','$fitem2q','$fitem3q','$fitem4q','$fitem5q',
'$fitem6q','$fitem7q','$fitem8q','$gitem1q','$gitem2q','$gitem3q','$gitem4q','$gitem5q','$gitem6q','$gitem7q','$gitem8q',
'$oitem1q','$oitem2q','$oitem3q','$oitem4q','$oitem5q','$oitem6q','$oitem7q','$oitem8q')";

mysqli_query($conn, $query1);
header("Location: total.php?billno=$bill_number&mobileno=$phone_no");


?>