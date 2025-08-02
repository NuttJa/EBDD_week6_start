<?php
include("../config.php");

// รับค่า sup_no เดิมจาก query string
$old_sup_no = $_GET["old_sup_no"];

// ดึงข้อมูลจากฐานข้อมูลตาม sup_no ที่ส่งมา
$sql = "SELECT * FROM suppliers WHERE sup_no = '$old_sup_no'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<h2>Edit Supplier</h2>
<form action="supplier_save.php?old_sup_no=<?php echo $old_sup_no; ?>" method="post">
    sup_no<br>
    <input type="text" name="sup_no" value="<?php echo $row['sup_no']; ?>"><br>

    sup_company<br>
    <input type="text" name="sup_company" value="<?php echo $row['sup_company']; ?>"><br>

    sup_contact<br>
    <input type="text" name="sup_contact" value="<?php echo $row['sup_contact']; ?>"><br>

    sup_telephone<br>
    <input type="text" name="sup_telephone" value="<?php echo $row['sup_telephone']; ?>"><br>

    sup_email<br>
    <input type="email" name="sup_email" value="<?php echo $row['sup_email']; ?>"><br><br>

    <input type="submit" name="update" value="Update">
</form>
