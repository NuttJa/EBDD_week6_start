<?php
    include("../config.php");

    $sup_no = $_GET["sup_no"];

    $sql = "DELETE FROM `suppliers` WHERE sup_no = '$sup_no' ";

    //echo $sql; exit();


    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert ('ลบข้อมูลเรียบร้อย'); window.location.href = 'supplier_list.php' </script>";
    }
mysqli_close($conn);
?>