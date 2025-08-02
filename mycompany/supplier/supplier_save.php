<?php
include("../config.php");

// รับค่าเก่าเพื่อใช้ใน WHERE
$old_sup_no = $_GET['old_sup_no'];

// รับค่าจากฟอร์ม
$sup_no = $_POST['sup_no'];
$sup_company = $_POST['sup_company'];
$sup_contact = $_POST['sup_contact'];
$sup_telephone = $_POST['sup_telephone'];
$sup_email = $_POST['sup_email'];

// อัปเดตข้อมูล
$sql = "UPDATE suppliers 
        SET sup_no='$sup_no', 
            sup_company='$sup_company', 
            sup_contact='$sup_contact', 
            sup_telephone='$sup_telephone', 
            sup_email='$sup_email' 
        WHERE sup_no='$old_sup_no'";

if (mysqli_query($conn, $sql)) {
    echo "Supplier updated successfully.<br>";
    echo "<a href='supplier_list.php'>Back to Suppliers List</a>";
} else {
    echo "Error updating supplier: " . mysqli_error($conn);
}
?>
