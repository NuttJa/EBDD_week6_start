<?php
include("../config.php");

if(isset($_POST["update"]))
{
     if(!empty($_POST["item_no"])
        &&!empty($_POST["item_name"])
        &&!empty($_POST["price"])
        &&!empty($_POST["location"])
        &&!empty($_POST["qty_on_hand"])
        &&!empty($_POST["reorder_pt"]))
        {
            
            $item_no = $_POST["item_no"];
            $item_name = $_POST["item_name"];
            $price = $_POST["price"];
            $location = $_POST["location"];
            $qty_on_hand = $_POST["qty_on_hand"];
            $reorder_pt = $_POST["reorder_pt"];
            $sup_no = $_POST["sup_no"];
            $image_name = $_FILES["myfile"]["name"];
            $image_type = $_FILES["myfile"]["type"];
            if($image_name != ""){
            $image_data = addslashes(file_get_contents($_FILES["myfile"]["tmp_name"]));
            }
            else
        {
        $image_data = "" ;     
        }

            $old_item_no = $_GET["old_item_no"];
if($image_name != "")
{
            $sql = "UPDATE `inventory` SET `item_no`='$item_no',`item_name`='$item_name',`price`='$price',
            `location`='$location',`qty_on_hand`='$qty_on_hand',`reorder_pt`='$reorder_pt',sup_no = '$sup_no'
            ,image_name='$image_name',image_type='$image_type',image_data='$image_data'
            WHERE item_no = '$old_item_no'";
}
else
{
     $sql = "UPDATE `inventory` SET `item_no`='$item_no',`item_name`='$item_name',`price`='$price',
            `location`='$location',`qty_on_hand`='$qty_on_hand',`reorder_pt`='$reorder_pt',sup_no = '$sup_no'
            
            WHERE item_no = '$old_item_no'";
}
            
            if(mysqli_query($conn,$sql))
            {
                echo "<script> alert ('แก้ไขข้อมูลเรียบร้อย'); window.location.href = 'inventory_list.php'; </script>";
            }
        }
    else 
    {
        echo "<script> alert ('กรอกข้อมูลไม่ครบ'); history.back(); </script>";
    }
}
mysqli_close($conn);
?>