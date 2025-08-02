<?php
    include("../config.php");

    $item_no = $_GET["item_no"];

    $sql = "DELETE FROM `inventory` WHERE item_no = '$item_no' ";


    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert ('ลบข้อมูลเรียบร้อย'); window.location.href = 'inventory_list.php' </script>";
    }
mysqli_close($conn);
?>