<?php
    include("../config.php");

    $cust_no = $_GET["cust_no"];

    $sql = "DELETE FROM `customers` WHERE cust_no = '$cust_no' ";


    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert ('ลบข้อมูลเรียบร้อย'); window.location.href = 'inventory_list.php' </script>";
    }
mysqli_close($conn);
?>