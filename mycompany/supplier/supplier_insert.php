<?php
include("../config.php");

// รับค่าจากฟอร์ม
$sup_no = $_POST['sup_no'];
$sup_company = $_POST['sup_company'];
$sup_contact = $_POST['sup_contact'];
$sup_telephone = $_POST['sup_telephone'];
$sup_email = $_POST['sup_email'];

// สร้างคำสั่ง SQL
$sql = "INSERT INTO suppliers (sup_no, sup_company, sup_contact, sup_telephone, sup_email)
        VALUES ('$sup_no', '$sup_company', '$sup_contact', '$sup_telephone', '$sup_email')";

if (mysqli_query($conn, $sql)) {
     echo "<script>alert('บันทึกข้อมูลเรียบร้อย'); window.location.href = 'supplier_list.php';</script>";
    
} else {
    echo "Error: " . mysqli_error($conn);
}