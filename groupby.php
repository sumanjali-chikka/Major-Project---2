<?php
include("connection.php");
$query = "SELECT * FROM quantity_table group by phone_number having count(*)>1";
$result=mysqli_query($conn, $query);
$res=mysqli_fetch_array($result);
if($result){
    $num=$res['balance'];
    header("Location:debt.php?bn=$num");
}
?>