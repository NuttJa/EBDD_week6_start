<?php
include("../config.php");

$cust_no = $_POST['cust_no'];
$cust_name = $_POST['cust_name'];
$cust_street = $_POST['cust_street'];
$cust_city = $_POST['cust_city'];
$cust_state = $_POST['cust_state'];
$cust_zip = $_POST['cust_zip'];
$ship_to_name = $_POST['ship_to_name'];
$ship_to_street = $_POST['ship_to_street'];
$ship_to_city = $_POST['ship_to_city'];
$ship_to_state = $_POST['ship_to_state'];
$ship_to_zip = $_POST['ship_to_zip'];
$credit_limit = $_POST['credit_limit'];
$last_revised = $_POST['last_revised'];
$credit_terms = $_POST['credit_terms'];
$pro_no = $_POST['pro_no'];

$sql = "SELECT * FROM customers WHERE cust_no = '$cust_no'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if($row)
{
    echo "<script> alert ('มี item no นี้แล้ว'); history.back(); </script>";
}
else
{
$sql = "INSERT INTO customers (
            cust_no, cust_name, cust_street, cust_city, cust_state, cust_zip,
            ship_to_name, ship_to_street, ship_to_city, ship_to_state, ship_to_zip,
            credit_limit, last_revised, credit_terms, pro_no
        ) VALUES (
            '$cust_no', '$cust_name', '$cust_street', '$cust_city', '$cust_state', '$cust_zip',
            '$ship_to_name', '$ship_to_street', '$ship_to_city', '$ship_to_state', '$ship_to_zip',
            $credit_limit, '$last_revised', '$credit_terms', '$pro_no'
        )";


//echo $sql; exit();
if(mysqli_query($conn,$sql))
{
    echo "<script> alert ('บันทึกเรียบร้อย'); window.location.href = 'customer_list.php'; </script>";
}
else
{
    echo "ERROR".mysqli_connect_error($conn);
}
}



mysqli_close($conn);
?>