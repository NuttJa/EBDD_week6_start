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
$old_cust_no = $_GET['old_cust_no'];
$pro_no = $_POST['pro_no'];


$sql = "UPDATE `customers` SET
    `cust_no` = '$cust_no',
    `cust_name` = '$cust_name',
    `cust_street` = '$cust_street',
    `cust_city` = '$cust_city',
    `cust_state` = '$cust_state',
    `cust_zip` = '$cust_zip',
    `ship_to_name` = '$ship_to_name',
    `ship_to_street` = '$ship_to_street',
    `ship_to_city` = '$ship_to_city',
    `ship_to_state` = '$ship_to_state',
    `ship_to_zip` = '$ship_to_zip',
    `credit_limit` = '$credit_limit',
    `last_revised` = '$last_revised',
    `credit_terms` = '$credit_terms',   
    pro_no = '$pro_no'
WHERE `cust_no` = '$old_cust_no'";



            if(mysqli_query($conn,$sql))
            {
                echo "<script> alert ('แก้ไขข้อมูลเรียบร้อย'); window.location.href = 'customer_list.php'; </script>";
            }

mysqli_close($conn);
?>